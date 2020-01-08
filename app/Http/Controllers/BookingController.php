<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$bookings = Booking::orderBy('title', 'desc')->get();
        $bookings = Booking::orderBy('created_at', 'desc')->paginate(5);
        return view('bookings.index')->with('bookings', $bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nume' => 'required',
            'body' => 'required'
        ]);
       
        
        // Create Booking

        $booking = new Booking;
        $booking->title = $request->input('nume');
        $booking->body = $request->input('body');
        $booking->save();

        return redirect('/bookings')->with('success', 'Booking Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);
        return view('bookings.show')->with('booking' , $booking);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('bookings.edit')->with('booking' , $booking);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nume' => 'required',
            'body' => 'required'
        ]);
       
        
        // Create Booking

        $booking = Booking::find($id) ;
        $booking->title = $request->input('nume');
        $booking->body = $request->input('body');
        $booking->save();

        return redirect('/bookings')->with('success', 'Boooking Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect('/bookings')->with('success', 'Booking Deleted');
    }
}
