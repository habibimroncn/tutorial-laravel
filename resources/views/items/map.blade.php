

@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div id="map-canvas" style="width:700px;height:400px;"></div>
        </div>
    </div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
            var mapOptions = {
                zoom: 4,
                center: new google.maps.LatLng({{$items[0]->location}})
            }
            var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);


            @foreach($items as $item)
                var marker{{$item->id}} = new google.maps.Marker({
                    position: new google.maps.LatLng({{$item->location}}),
                    map: map,
                    title: "{{$item->title}}"
                });
            @endforeach
    }
    google.maps.event.addDomListener(window, 'load', initialize);
   
    </script>


@endsection

