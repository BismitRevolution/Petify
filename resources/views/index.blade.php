@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div id="parallax-top" class="parallax-container">
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

<div id="topic-chooser" class="bg-maroon">
    <div class="grid-x container">
        <div class="cell small-12 medium-12 large-4 grid-x align-middle" style="min-height: 75px;">
            <h3 class="cell text-center">ADOPT PET</h3>
        </div>
        <div class="cell small-6 medium-6 large-4 chooser">
            <div class="overlay-container">
                <img src="{{ asset('img/cat.png') }}" alt="adopt-cat">
                <div class="overlay-content">
                </div>
            </div>
            <h5 class="text-center" style="margin-top: 10px;">CAT</h5>
        </div>
        <div class="cell small-6 medium-6 large-4 chooser">
            <div class="overlay-container">
                <img src="{{ asset('img/dog.png') }}" alt="adopt-dog">
                <div class="overlay-content">
                </div>
            </div>
            <h5 class="text-center" style="margin-top: 10px;">DOG</h5>
        </div>
    </div>
</div>

<div id="pet-list" class="">
    <div class="grid-x grid-padding-x grid-padding-y container">
        <div class="cell grid-x align-middle" style="min-height: 75px;">
            <h3 class="cell text-center">FIND PET</h3>
        </div>
        <div class="cell small-12 medium-6 large-4 pet">
            <div class="panel grid-y maroon">
                <div class="panel-image small-12" style="background-image: url({{ asset('img/banner.jpg') }})">

                </div>
                <div class="panel-content small-12">
                    <div class="panel-title">
                        <h3>Doggy</h3>
                    </div>
                    <div class="panel-subtitle">
                        <h5>Age 8, Female</h5>
                    </div>
                    <div class="panel-paragraph">
                        <p>This dog is cute AF so much want this cutie oh my gosh</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
