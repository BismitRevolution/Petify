@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
@endsection

@section('content')
<div class="banner">
    <div class="overlay-container">
        <img src="{{ asset('img/banner.jpg') }}" alt="adopt-a-pet">
        <div class="overlay-content">
            This is subtitle
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/app.js') }}"></script> -->
@endsection
