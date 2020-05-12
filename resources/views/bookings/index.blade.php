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
    <div class="align-center mt-4">

        {!! $bookings->render() !!}
    </div>

    @if(count($bookings) > 0)
    @foreach($bookings as $booking)
    <div class="container mt-4">
        <div class="booking-layout-show">
            <div class="booking-picture-show"><img src="{{asset('storage/cover_images/'.$booking->cover_image)}}" alt=""></div>
            <div class="booking-title-show">
                <h3 class="text-center title-booking">{{$booking->title}}</h3>
            </div>
            <div class="booking-rating-show">
                <div class='rating-stars text-center'>
                    <ul id='stars'>
                        @switch($booking->stars)
                        @case(1)
                        <li class='star selected' title='Poor' data-value='1'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Fair' data-value='2'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Good' data-value='3'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Excellent' data-value='4'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        @break
                        @case(2)
                        <li class='star selected' title='Poor' data-value='1'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star selected' title='Fair' data-value='2'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Good' data-value='3'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Excellent' data-value='4'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        @break
                        @case(3)
                        <li class='star selected' title='Poor' data-value='1'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star selected' title='Fair' data-value='2'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star selected' title='Good' data-value='3'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Excellent' data-value='4'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        @break
                        @case(4)
                        <li class='star selected' title='Poor' data-value='1'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star selected' title='Fair' data-value='2'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star selected' title='Good' data-value='3'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star selected' title='Excellent' data-value='4'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        @break
                        @case(5)
                        <li class='star selected' title='Poor' data-value='1'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star selected' title='Fair' data-value='2'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star selected' title='Good' data-value='3'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star selected' title='Excellent' data-value='4'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star selected' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        @break
                        @default
                        <li class='star' title='Poor' data-value='1'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Fair' data-value='2'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Good' data-value='3'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Excellent' data-value='4'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        @endswitch

                    </ul>
                </div>
            </div>
            <div class="booking-price-show"><h4>{{$booking->price}} lei / noapte</h4></div>
            <div class="booking-desc-show">{{$booking->description}}</div>
            <form action="/bookings/{{$booking->id}}">
                <div class="booking-button-show"><button type="submit" class="btn btn-submit"
                        style="margin-top: 25px;">Vezi cazarea</button></div>
            </form>
        </div>
    </div>
    @endforeach
    @endif

    <div class="align-center m-4">

        {!! $bookings->render() !!}
    </div>


    {{-- <div class="container py-4">
        @if(count($bookings) > 0)
        @foreach($bookings as $booking)
        <div class="well">
            <h3><a href="/bookings/{{$booking->id}}">{{$booking->title}}</a></h3>
    <small>@lang('bookings.written on') {{$booking->created_at}} @lang('bookings.by') {{$booking->user->name}}</small>
</div>
@endforeach
{{$bookings->links()}}
@else
<p>@lang('bookings.NoFoundBookings')</p>
@endif
</div> --}}


</div>
@endsection
