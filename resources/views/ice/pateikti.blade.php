@extends("layouts.app")
@section('content')

<div class="container">
    <h1>Pateikti duomenis apie ledo storį</h1>
        <form method="POST" action="{{route('ice.store')}}">
            @csrf
            <div class="form-group">
                <label>Ledo storis</label>
                <input type="number" class="form-control" name="ledo_storis" id="ledo_storis" required>
            </div>
            <div class="form-group">
                <label>Komentaras</label>
                <input type="text" class="form-control" name="komentaras" id="komentaras">
            </div>
            <div class="form-group ">
                <label for="latitude"></label>
                <input type="number" step="0.0000001" value="" class="form-control" name="latitude" id="latitude" required>
            </div>
            <div class="form-group ">
                <label for="longitude"></label>
                <input type="number" step="0.0000001" value="" class="form-control" name="longitude" id="longitude" required>
            </div>

            <br>

            <button class="btn btn-primary" type="submit">Pateikti</button>
        </form>
    </div>
    <script src="{{asset('js\icecoord.js')}}"></script>
    @endsection

