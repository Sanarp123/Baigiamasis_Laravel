@extends("layouts.app")
@section('content')
<link rel="stylesheet" href="{{asset('css\main.css')}}">
@if(session('danger_message'))
            <div class="alert alert-danger">
                {{ session('danger_message')}}
            </div>
        @endif

        @if(session('success_message'))
            <div class="alert alert-success">
                {{ session('success_message')}}
            </div>
        @endif
@mapstyles

@map([
     'lat' => 55.200000,
     'lng' => 23.560000,
     'zoom' => 7,
     'markers' => $ice_markers,
 ])
@mapscripts
@endsection
