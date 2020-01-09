@extends('layouts.app')

@section('content')
<div class="main-container">
    <section class="page-title page-title-2 image-bg overlay parallax">
        <div class="background-image-holder">
            <img alt="Background Image" class="background-image" src="{{asset('storage/img/cover15.jpg')}}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="uppercase mb8">Large Image</h2>
                    <p class="lead mb0">A descriptive subtitle for your page.</p>
                </div>
                <div class="col-md-6 text-right">
                    <ol class="breadcrumb breadcrumb-2">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Elements</a>
                        </li>
                        <li class="active">Page Titles</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-4">
        @if(count($bookings) > 0)
        @foreach($bookings as $booking)
        <div class="well">
            <h3><a href="/bookings/{{$booking->id}}">{{$booking->title}}</a></h3>
            <small>Written on {{$booking->created_at}} by {{$booking->user->name}}</small>
        </div>
        @endforeach
        {{$bookings->links()}}
        @else
        <p>No posts found</p>
        @endif
    </div>


</div>
@endsection
