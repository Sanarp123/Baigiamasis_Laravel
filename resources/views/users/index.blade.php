@extends('layouts.app')

@section('content')

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

    <div class="container">
    <h1>Naudotojai</h1>

        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Vardas</th>
                <th>El. paštas</th>
                <th>Įmonė</th>
                <th>Sukūrimo data</th>
                <th>Redagavimo data</th>
                <th>Aktyvus</th>
                <th>Veiksmai</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->imone }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>{{ $user->confirmed }}</td>
                    <td>
                        <form method="POST" action="{{route('users.destroy', $user)}}">
                            @csrf
                            <button class="btn btn-danger" type="submit">Ištrinti</button>
                        </form>
                        <form method="POST" action="{{route('users.edit', $user)}}">
                            @csrf
                            <br>

                            <button class="btn btn-warning" type="submit">Redaguoti</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

   
    </div>
@endsection