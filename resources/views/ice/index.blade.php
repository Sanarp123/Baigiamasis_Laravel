@extends('layouts.app')

@section('content')
    <div class="container">
        
        <!-- @if(session('danger_message'))
            <div class="alert alert-danger">
                {{ session('danger_message')}}
            </div>
        @endif

        @if(session('success_message'))
            <div class="alert alert-success">
                {{ session('success_message')}}
            </div>
        @endif -->
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Ledo storis (cm)</th>
                <th>Komentaras</th>
                <th>Platuma</th>
                <th>Ilguma</th>
                <th>Veiksmai</th>
            </tr>

            @foreach($ices as $ice)
                <tr>
                    <td>{{ $ice->id }}</td>
                    <td>{{ $ice->storis }}</td>
                    <td>{{ $ice->komentaras }}</td>
                    <td>{{ $ice->coord_x }}</td>
                    <td>{{ $ice->coord_y }}</td>
                    <td>
                        <a class="btn btn-secondary" href="">Edit</a> 
                        <form method="POST" action="">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection