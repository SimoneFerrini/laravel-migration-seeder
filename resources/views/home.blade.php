@extends('layouts/main')

@section('content')
    <table>
        <thead>
            
            <th>Azienda</th>
            <th>Stazione di partenza</th>
            <th>Stazione di arrivo</th>
            <th>Orario di partenza</th>
            <th>Orario di arrivo</th>
            <th>Codice treno</th>
            <th>Numero Carrozze</th>
            <th>In orario</th>
            <th>Cancellato</th>
        </thead>
        <tbody>
            @foreach ($treni as $treno)
            <tr>
                <td>{{$treno->azienda}}</td>
                <td>{{$treno->stazione_di_partenza}}</td>
                <td>{{$treno->Stazione_di_arrivo}}</td>
                <td>{{$treno->orario_di_partenza}}</td>
                <td>{{$treno->orario_di_arrivo}}</td>
                <td>{{$treno->codice_treno}}</td>
                <td>{{$treno->numero_carrozze}}</td>
                <td>{{$treno->in_orario}}</td>
                <td>{{$treno->cancellato}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection