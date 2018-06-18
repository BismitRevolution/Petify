@extends('main')

@section('title', "Pet Detail")

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/pages/pet.css') }}">
@endsection

@section('content')
<div id="search-bar" class="bg-maroon">
    <div class="grid-x grid-padding-x grid-padding-y container">
        <!-- <div class="cell grid-x align-middle" style="min-height: 75px;">
            <h3 class="cell text-center">FIND PET</h3>
        </div> -->
        <div class="cell small-12">
            <form class="form-round" action="/" method="post">
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
    </div>
</div>

<div id="pet-data" class="bg-light maroon">
    <div class="grid-x container">
        <div id="pet-pic" class="cell small-4 medium-3" style="background-image: url('../img/banner.jpg')">
            <!-- <img src="{{ asset('img/banner.jpg') }}" alt=""> -->
        </div>
        <div class="cell small-1 medium-1">

        </div>
        <div class="cell small-6 medium-8">
            <div class="title">
                <h3>{{ $pet->name }}</h3>
            </div>
            <div class="subtitle">
                <h5>@if ($pet->gender == 1)
                    Male,
                    @else
                    Female,
                    @endif
                    {{ $pet->age }} th
                </h5>
            </div>
        </div>
    </div>
    <div class="container">
        <form class="form-round" action="/" method="post" onsubmit="return false;">
            <div class="expanded button-group">
                <button class="button bg-maroon round-start disabled" type="button" name="button">Intro</button>
                <button class="button bg-maroon round-middle" type="button" name="button">Location</button>
                <button class="button bg-maroon round-end" type="button" name="button">Other</button>
            </div>
        </form>
        <div class="panel">
            <div class="title">
                Intro
            </div>
            <div class="paragraph">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lacinia, augue sed venenatis cursus, eros massa consectetur urna, et porttitor diam nibh consectetur mi.
            </div>
        </div>
    </div>
</div>

<div id="contact" class="container bg-maroon white">
    <div class="title">
        <h3 class="text-center">Adopt this pet!</h3>
    </div>
    <div class="panel purple">
        <div class="paragraph" style="padding-left: 10px;">
            <p>Adoption Form</p>
        </div>
        <form class="form-round" action="/" method="post">
            <div class="form-inline grid-x grid-padding-x">
                <label for="" class="cell small-4">Name*</label>
                <input class="cell small-8" type="text" name="name" value="" required>
            </div>
            <div class="form-inline grid-x grid-padding-x">
                <label for="" class="cell small-4">Email*</label>
                <input class="cell small-8" type="email" name="email" value="" required>
            </div>
            <div class="form-inline grid-x grid-padding-x">
                <label for="" class="cell small-4">Phone*</label>
                <input class="cell small-8" type="number" name="phone" value="" required>
            </div>
            <div class="form-inline grid-x grid-padding-x">
                <label for="" class="cell small-4">Address*</label>
                <input class="cell small-8" type="text" name="address" value="" required>
            </div>
            <div class="text-center">
                <button class="button bg-corn" type="button" name="button">SUBMIT</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/pages/pet.js') }}"></script>
@endsection
