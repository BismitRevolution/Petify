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

<div id="topic-chooser" class="banner bg-maroon">
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

<div id="pet-list" class="banner">
    <div class="grid-x grid-padding-x grid-padding-y container">
        <div class="cell grid-x align-middle" style="min-height: 75px;">
            <h3 class="cell text-center">FIND PET</h3>
        </div>
        <div class="cell small-12">
            <form class="form-round" action="index.html" method="post">
                <div class="form-inline grid-x">
                    <input class="cell small-10 round-start" type="text" name="search" value="" placeholder="Search pet">
                    <button class="button cell small-2 bg-corn round-end" type="button"><i class="fas fa-search"></i></button>
                </div>

                <div class="grid-x white">
                    <h5 class="cell small-4 text-center">BREED</h5>
                    <h5 class="cell small-4 text-center">AGE</h5>
                    <h5 class="cell small-4 text-center">GENDER</h5>
                </div>

                <div class="expanded button-group purple">
                    <button class="button dropdown-button bg-corn round-start" type="button" data-toggle="filter-breed">Choose</button>
                    <!-- <div id="filter-breed" class="dropdown-pane" data-dropdown data-target="filter-breed-value"> -->
                    <div id="filter-breed" class="dropdown-pane" data-dropdown>
                        <!-- <input id="filter-breed-value" type="hidden" name="filter-breed" value="0"> -->
                        <input type="hidden" name="filter-breed" value="0">
                        <ul>
                            <li class="dropdown-item" data-toggle="filter-breed">Domestic</li>
                            <li class="dropdown-item" data-toggle="filter-breed">Persian</li>
                            <li class="dropdown-item" data-toggle="filter-breed">Wild</li>
                        </ul>
                    </div>

                    <button class="button dropdown-button bg-corn round-middle" type="button" data-toggle="filter-age">Choose</button>
                    <!-- <div id="filter-age" class="dropdown-pane" data-dropdown data-target="filter-age-value"> -->
                    <div id="filter-age" class="dropdown-pane" data-dropdown>
                        <!-- <input id="filter-age-value" type="hidden" name="filter-age" value="0"> -->
                        <input type="hidden" name="filter-age" value="0">
                        <ul>
                            <li class="dropdown-item" data-toggle="filter-age">Baby</li>
                            <li class="dropdown-item" data-toggle="filter-age">Young</li>
                            <li class="dropdown-item" data-toggle="filter-age">Adult</li>
                        </ul>
                    </div>

                    <button class="button dropdown-button bg-corn round-end" type="button" data-toggle="filter-gender">Choose</button>
                    <!-- <div id="filter-gender" class="dropdown-pane" data-dropdown data-target="filter-gender-value"> -->
                    <div id="filter-gender" class="dropdown-pane" data-dropdown>
                        <!-- <input id="filter-gender-value" type="hidden" name="filter-gender" value="0"> -->
                        <input type="hidden" name="filter-gender" value="0">
                        <ul>
                            <li class="dropdown-item" data-toggle="filter-gender">Male</li>
                            <li class="dropdown-item" data-toggle="filter-gender">Female</li>
                        </ul>
                    </div>

                </div>
            </form>
        </div>

        @foreach ($pets as $pet)
        <div class="cell small-12 medium-6 large-4 pet">
            <div class="panel grid-y maroon">
                <div class="panel-image small-12" style="background-image: url({{ asset('img/banner.jpg') }})">

                </div>
                <div class="panel-content small-12">
                    <div class="panel-title">
                        <h3><a href="pet">Doggy</a></h3>
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
        @endforeach
    </div>
</div>

<div id="about" class="banner bg-light purple">
    <div class="container text-center">
        <div class="title">
            <h3>Why we do this</h3>
        </div>
        <div class="subtitle grid-x grid-padding-y">
            <div class="cell small-12 medium-6 large-4">
                <h5><i class="fas fa-medkit fa-5x"></i></h5>
                <h5>TOPIC 1</h5>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <h5><i class="fas fa-hands-helping fa-5x"></i></h5>
                <h5>TOPIC 2</h5>
            </div>
            <div class="cell small-12 medium-12 large-4">
                <h5><i class="fas fa-ambulance fa-5x"></i></h5>
                <h5>TOPIC 3</h5>
            </div>
        </div>
        <div class="paragraph">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lacinia, augue sed venenatis cursus, eros massa consectetur urna, et porttitor diam nibh consectetur mi.</p>
        </div>
    </div>
</div>

<div id="article" class="banner bg-maroon white">
    <div class="container">
        <div class="title text-center">
            <h3>NEWS & EVENTS</h3>
        </div>
        <div class="subtitle grid-x grid-padding-x grid-padding-y">
            @foreach ($articles as $article)
            <div class="cell small-12 pet">
                <div class="panel grid-y maroon">
                    <div class="panel-image small-8" style="background-image: url({{ asset('img/banner.jpg') }})">

                    </div>
                    <div class="panel-content small-4">
                        <div class="panel-title">
                            <h3>Title</h3>
                        </div>
                        <div class="panel-paragraph">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lacinia, augue sed venenatis cursus, eros massa consectetur urna, et porttitor diam nibh consectetur mi. </p>
                        </div>
                        <div class="panel-button align-right">
                            <button class="button" name="button">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
