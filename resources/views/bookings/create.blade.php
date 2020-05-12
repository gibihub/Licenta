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
</div>
<div class="container py-4">
    <h1> @lang('bookings.create') </h1>
    @include('inc.messages')

    <form method="POST" action="{{route('bookings.store')}}" enctype="multipart/form-data">
        @csrf
        <label for="nume">
            @lang('bookings.nume')
        </label>
        <input type="text" name="nume" placeholder="@lang('bookings.nume')">
        <div class="two-cols">
            <div class="stars-item"><label>
                    Rating
                </label>
                <div class='rating-stars text-center'>
                    <ul id='stars'>
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
                    </ul>
                </div>
            </div>
            <div class="price-item"><label>
                Price / Night
            </label><input type="text" placeholder="Ex: 70 lei HATZ JONULE CICOCANIM" name='price'></div>
        </div>
        <div class="form-group">
            <label for="body"> @lang('bookings.body')</label>
            <textarea id="body" class="form-control" name="description" cols="30" rows="10" placeholder="Body Text"></textarea>
        </div>
        <input type="file" id="file-upload" name="cover_image" required />
                <label for="file-upload" class="btn btn-primary text-dark">@lang('bookings.incarca')</label>
                <div id="file-upload-filename"></div>
        <button type="submit" class="btn btn-primary"> @lang('bookings.submit')</button>   
    </form>
</div>
@endsection
