@extends('layouts.main')

@section('title', 'Households')

@section('content')
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{  session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="card">
    <div class="card-body">
        From Map
        <div id="map"></div>
    </div>
</div>


@endsection

@section('scripts')
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCm7-oZ1_p9snCUz0VP62ZCXZ-fH8WlewY&callback=initMap">
    </script>
    <script>
        $(document).ready(function() {
        });

        let map;

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 8,
            });
        }
    </script>
@endsection
