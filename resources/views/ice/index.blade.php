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
    <h1>Duomenų apie ledo storį įrašai</h1>

        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>@sortablelink('storis', 'Ledo storis')</th>
                <th>@sortablelink('komentaras','komentaras') </th>
                <th>@sortablelink('coord_x', 'Platuma')</th>
                <th>@sortablelink('coord_x', 'Ilguma')</th>
                <th>@sortablelink('created_at', 'Sukūrimo data')</th>
                <th>Veiksmai</th>
            </tr>
                @if ($ices->count() == 0)
                    <tr>
                        <td colspan="5">Nėra įrašų.</td>
                    </tr>
        @endif
            @foreach($ices as $ice)
                <tr>
                    <td>{{ $ice->id }}</td>
                    <td>{{ $ice->storis }}</td>
                    <td>{{ $ice->komentaras }}</td>
                    <td>{{ $ice->coord_x }}</td>
                    <td>{{ $ice->coord_y }}</td>
                    <td>{{ $ice->created_at }}</td>
                    <td>
                        <form method="POST" action="{{route('ice.destroy', $ice)}}">
                            @csrf
                            <button class="btn btn-danger" type="submit">Ištrinti</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $ices->appends(Request::except('page'))->render() !!}

        <p>
            Rodoma {{$ices->count()}} iš {{ $ices->total() }} įrašų.
        </p>    
    </div>
@endsection