@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="banner overlay-container">
    <img src="{{ asset('img/banner.jpg') }}" alt="adopt-a-pet">
    <div class="overlay-content">
        This is subtitle
    </div>
</div>

<div id="parallax-top" class="parallax-container">
    <div class="parallax-content">

    </div>
</div>
<div class="">

</div>
@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/app.js') }}"></script> -->
@endsection
