@extends('main')

@section('title', "Explore Pet")

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/pages/explore.css') }}">
@endsection

@section('content')
<div id="search-bar" class="bg-maroon">
    <div class="grid-x grid-padding-x grid-padding-y container">
        <!-- <div class="cell grid-x align-middle" style="min-height: 75px;">
            <h3 class="cell text-center">FIND PET</h3>
        </div> -->
        <div class="cell small-12">
            <form class="form-round" action="/explore" method="get">
                <div class="form-inline grid-x">
                    <input class="cell small-10 round-start" type="text" name="search" value="" placeholder="Search pet">
                    <button class="button cell small-2 bg-corn round-end" type="submit"><i class="fas fa-search"></i></button>
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

<div id="pet-list" class="grid-x grid-padding-x grid-padding-y container bg-maroon">
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
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/pages/explore.js') }}"></script>
@endsection
