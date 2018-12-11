@extends('layouts.app')

@section('content')



<!-- Page Content -->
<div class="">

    <div id="map-container" class="wrap">
        <div class="newHomepage">
            <div class="searchArea">
                <div id="searchMap" class="leaflet-container leaflet-retina leaflet-fade-anim">
                    <div class="leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="leaflet-tile-pane">
                            <div class="leaflet-layer">
                                <div class="leaflet-tile-container"></div>
                                <div class="leaflet-tile-container leaflet-zoom-animated">
                                    <img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4821/6155.png" style="height: 256px; width: 256px; left: 565px; top: 183px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4821/6154.png" style="height: 256px; width: 256px; left: 565px; top: -73px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4820/6155.png" style="height: 256px; width: 256px; left: 309px; top: 183px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4822/6155.png" style="height: 256px; width: 256px; left: 821px; top: 183px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4821/6156.png" style="height: 256px; width: 256px; left: 565px; top: 439px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4820/6154.png" style="height: 256px; width: 256px; left: 309px; top: -73px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4822/6154.png" style="height: 256px; width: 256px; left: 821px; top: -73px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4820/6156.png" style="height: 256px; width: 256px; left: 309px; top: 439px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4822/6156.png" style="height: 256px; width: 256px; left: 821px; top: 439px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4819/6155.png" style="height: 256px; width: 256px; left: 53px; top: 183px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4823/6155.png" style="height: 256px; width: 256px; left: 1077px; top: 183px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4819/6154.png" style="height: 256px; width: 256px; left: 53px; top: -73px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4823/6154.png" style="height: 256px; width: 256px; left: 1077px; top: -73px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4819/6156.png" style="height: 256px; width: 256px; left: 53px; top: 439px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4823/6156.png" style="height: 256px; width: 256px; left: 1077px; top: 439px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4818/6155.png" style="height: 256px; width: 256px; left: -203px; top: 183px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4824/6155.png" style="height: 256px; width: 256px; left: 1333px; top: 183px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4818/6154.png" style="height: 256px; width: 256px; left: -203px; top: -73px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4824/6154.png" style="height: 256px; width: 256px; left: 1333px; top: -73px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4818/6156.png" style="height: 256px; width: 256px; left: -203px; top: 439px;"><img class="leaflet-tile leaflet-tile-loaded" src="https://a.tiles.mapbox.com/v3/foursquare.map-3ntucprk/14/4824/6156.png" style="height: 256px; width: 256px; left: 1333px; top: 439px;">
                                </div>
                            </div>
                        </div>
                        <div class="leaflet-objects-pane">
                            <div class="leaflet-shadow-pane"></div>
                            <div class="leaflet-overlay-pane"></div>
                            <div class="leaflet-marker-pane"></div>
                            <div class="leaflet-popup-pane"></div>
                        </div>
                    </div>
                    <div class="leaflet-control-container">
                        <div class="leaflet-top leaflet-left"></div>
                        <div class="leaflet-top leaflet-right"></div>
                        <div class="leaflet-bottom leaflet-left"></div>
                        <div class="leaflet-bottom leaflet-right"></div>
                    </div>
                </div>
                <div class="searchContentBackground"></div>
                <div class="searchContentWrapper">
                    <div class="searchContent">
                        <h1 class="largeLogo">Foursquare</h1>
                        <h2 class="tagline">Find the best places to eat, drink or shop in any city in the world.</h2>
                        <div class="inputs">
                            <form action="/explore" method="get" id="search">
                                <div class="inputSet searchInputSet withDropdownArrow" data-placeholder="I'm looking for...">
                                    <span class="input-holder">
                                        <input type="text" name="q" maxlength="200" id="headerBarSearch" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" placeholder="I'm looking for...">
                                        {{--<span class="input-default">I'm looking for...</span>--}}
                                    </span>
                                    <div class="dropdownArrow expand">
                                        <div class="down-icon"></div>
                                    </div>
                                </div>
                                <div class="inputSet locationInputSet">
                                    <span class="locationReset" title="Use your current location" style="display: none;"></span>
                                    <input type="text" name="near" id="headerLocationInput" class="location ui-autocomplete-input" placeholder="" value="New York" data-longgeoid="72057594043032440" maxlength="200" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                                </div>
                                <button class="submitButton" type="submit">
                                    <img class="goIcon" src="https://ss0.4sqi.net/img/chrome/icon-go_foursquare8@2x-8104e4d03ad47b81f079c1f043220e75.png" data-retina-url="https://ss0.4sqi.net/img/chrome/icon-go_foursquare8@2x-8104e4d03ad47b81f079c1f043220e75.png" alt="Search" height="22px" width="22px">
                                    <span class="buttonCopy">Search</span>
                                </button>
                            </form>
                        </div>
                        {{--<ul class="chiclets">--}}
                            {{--<li class="food simpleChiclet">--}}
                                {{--<a class="chicletLink" href="/explore?near=Secaucus, NJ&amp;cat=food">--}}
                                    {{--<span class="chicletText">Food</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="coffee simpleChiclet">--}}
                                {{--<a class="chicletLink" href="/explore?near=Secaucus, NJ&amp;cat=coffee">--}}
                                    {{--<span class="chicletText">Coffee</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="drinks simpleChiclet">--}}
                                {{--<a class="chicletLink" href="/explore?near=Secaucus, NJ&amp;cat=drinks">--}}
                                    {{--<span class="chicletText">Nightlife</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="arts simpleChiclet">--}}
                                {{--<a class="chicletLink" href="/explore?near=Secaucus, NJ&amp;cat=arts">--}}
                                    {{--<span class="chicletText">Fun</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="shops simpleChiclet">--}}
                                {{--<a class="chicletLink" href="/explore?near=Secaucus, NJ&amp;cat=shops">--}}
                                    {{--<span class="chicletText">Shopping</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="row">--}}
        {{--<div class="col-lg-6 portfolio-item">--}}
            {{--<div class="card h-100">--}}
                {{--<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>--}}
                {{--<div class="card-body">--}}
                    {{--<h4 class="card-title">--}}
                        {{--<a href="#">Project One</a>--}}
                    {{--</h4>--}}
                    {{--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-6 portfolio-item">--}}
            {{--<div class="card h-100">--}}
                {{--<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>--}}
                {{--<div class="card-body">--}}
                    {{--<h4 class="card-title">--}}
                        {{--<a href="#">Project Two</a>--}}
                    {{--</h4>--}}
                    {{--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-6 portfolio-item">--}}
            {{--<div class="card h-100">--}}
                {{--<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>--}}
                {{--<div class="card-body">--}}
                    {{--<h4 class="card-title">--}}
                        {{--<a href="#">Project Three</a>--}}
                    {{--</h4>--}}
                    {{--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-6 portfolio-item">--}}
            {{--<div class="card h-100">--}}
                {{--<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>--}}
                {{--<div class="card-body">--}}
                    {{--<h4 class="card-title">--}}
                        {{--<a href="#">Project Four</a>--}}
                    {{--</h4>--}}
                    {{--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-6 portfolio-item">--}}
            {{--<div class="card h-100">--}}
                {{--<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>--}}
                {{--<div class="card-body">--}}
                    {{--<h4 class="card-title">--}}
                        {{--<a href="#">Project Five</a>--}}
                    {{--</h4>--}}
                    {{--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-6 portfolio-item">--}}
            {{--<div class="card h-100">--}}
                {{--<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>--}}
                {{--<div class="card-body">--}}
                    {{--<h4 class="card-title">--}}
                        {{--<a href="#">Project Six</a>--}}
                    {{--</h4>--}}
                    {{--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /.row -->--}}

    {{----}}
    {{--<!-- Pagination -->--}}
    {{--<ul class="pagination justify-content-center">--}}
        {{--<li class="page-item">--}}
            {{--<a class="page-link" href="#" aria-label="Previous">--}}
                {{--<span aria-hidden="true">&laquo;</span>--}}
                {{--<span class="sr-only">Previous</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li class="page-item">--}}
            {{--<a class="page-link" href="#">1</a>--}}
        {{--</li>--}}
        {{--<li class="page-item">--}}
            {{--<a class="page-link" href="#">2</a>--}}
        {{--</li>--}}
        {{--<li class="page-item">--}}
            {{--<a class="page-link" href="#">3</a>--}}
        {{--</li>--}}
        {{--<li class="page-item">--}}
            {{--<a class="page-link" href="#" aria-label="Next">--}}
                {{--<span aria-hidden="true">&raquo;</span>--}}
                {{--<span class="sr-only">Next</span>--}}
            {{--</a>--}}
        {{--</li>--}}
    {{--</ul>--}}

</div>

@endsection