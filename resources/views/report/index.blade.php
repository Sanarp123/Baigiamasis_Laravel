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
    <h1>Analizių raportai</h1>

        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Sukūrimo data</th>
                <th>Redagavimo data</th>
                <th>Pateikėjas</th>
                <th>Pateikėjo įmonė</th>
                <th>Parametras A</th>
                <th>Parametras B</th>
                <th>Veiksmai</th>
            </tr>
                @if ($reports->count() == 0)
                    <tr>
                        <td colspan="5">Nėra įrašų.</td>
                    </tr>
                @endif
            @foreach($reports as $report)
                <tr>
                    <td>{{ $report->id }}</td>
                    <td>{{ $report->created_at }}</td>
                    <td>{{ $report->updated_at }}</td>
                    <td>{{ $report->ReportCreator->name }}</td>
                    <td>{{ $report->ReportCreator->imone }}</td>
                    <td>{{ $report->A_parameter }}</td>
                    <td>{{ $report->B_parameter }}</td>
                    <td>'Delete'</td>

                </tr>
            @endforeach
        </table>
        {!! $reports->appends(Request::except('page'))->render() !!}

        <p>
            Rodoma {{$reports->count()}} iš {{ $reports->total() }} įrašų.
        </p>    
    </div>
@endsection