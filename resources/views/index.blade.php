@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div id="parallax-top" class="banner parallax-container">
    <!-- <img src="{{ asset('img/banner.jpg') }}" alt="adopt-a-pet"> -->
    <div class="parallax-content grid-x align-middle">
        <div class="cell small-12 align-center text-center">
            <h2 class="title">WE CARE</h2>
            <h5 class="subtitle">We need people to take care of them</h5>
        </div>
    </div>
</div>

<!-- <div id="parallax-top" class="parallax-container">
<div class="parallax-content">

</div>
</div> -->

<div id="topic-chooser" class="bg-maroon container">
    <div class="grid-x">
        <div class="cell small-12 medium-4 grid-x align-middle" style="height: 75px;">
            <h3 class="cell text-center">ADOPT PET</h3>
        </div>
        <div class="cell small-6 medium-4 chooser">
            <div class="overlay-container">
                <img src="{{ asset('img/cat.png') }}" alt="adopt-cat">
                <div class="overlay-content" style="">
                </div>
            </div>
            <h5 class="text-center" style="margin-top: 10px;">CAT</h5>
        </div>
        <div class="cell small-6 medium-4 chooser">
            <div class="overlay-container">
                <img src="{{ asset('img/dog.png') }}" alt="adopt-dog">
                <div class="overlay-content">
                </div>
            </div>
            <h5 class="text-center" style="margin-top: 10px;">DOG</h5>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
