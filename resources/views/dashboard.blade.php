@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/bookings/create" class="btn btn-primary ">@lang('bookings.create')</a>
                        <h3>Your Blog bookings</h3>
                        @if(count($bookings)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($bookings as $booking)
                            <tr>
                                    <td>{{$booking->title}}</td>
                            <td><a href="/bookings/{{$booking->id}}/edit" class ="btn btn-default">@lang('bookings.edit')</td>
                                    <td>
                                        <form method="booking" action="{{ route('bookings.destroy', $booking->id) }}" class= "float-right">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">@lang('bookings.delete')</button>
                                        </form>     
                                    </td>
                             </tr>
                            @endforeach
                        </table>
                    @else
                    <p>You have no bookings</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
