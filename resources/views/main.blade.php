@extends("layouts.app")
@section('content')
@mapstyles

@map([
     'lat' => 55.200000,
     'lng' => 23.560000,
     'zoom' => 7,
     'markers' => $ice_markers,
 ])






@mapscripts
@endsection
