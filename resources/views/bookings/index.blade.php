@extends('layouts.app')

@section('content')

@if(count($bookings) > 1)
    @foreach($bookings as $booking)
        <div class = "well">
        <h3><a href ="/bookings/{{$booking->id}}">{{$booking->title}}</a></h3>
            <small>Written on {{$booking->created_at}}</small>
        </div>
    @endforeach
@else
    <p>No posts found</p>
@endif
@endsection