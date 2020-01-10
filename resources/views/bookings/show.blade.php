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
        <a href="/bookings" class="btn btn-default"> @lang('bookings.Go Back') </a>
        <h1>{{$booking->title}}</h1>
        <div>
            {{$booking->body}}
        </div>
        <hr>
        <small> @lang('bookings.written on') {{$booking->created_at}} @lang('bookings.by') {{$booking->user->name}}</small>
        @if(!Auth::guest())
        @if(Auth::user()->id == $booking->user_id)
        <a href="/bookings/{{$booking->id}}/edit" class="btn btn-default">@lang('bookings.edit')</a>

        <form method="post" action="{{ route('bookings.destroy', $booking->id) }}" class="pull-right">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">@lang('bookings.delete')</button>
        </form>
        @endif
        @endif
    </div>
</div>
@endsection
