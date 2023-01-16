@extends("layouts.app")
@section('content')
<link rel="stylesheet" href="{{asset('css\main.css')}}">

@mapstyles

@map([
     'lat' => 55.200000,
     'lng' => 23.560000,
     'zoom' => 7,
     'markers' => $ice_markers,
 ])






@mapscripts
@endsection
