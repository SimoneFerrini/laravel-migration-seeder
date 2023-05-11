@extends('layouts/main')

@section('content')
    <div class="my-container">
        <h1>Lista treni:</h1>
        <table class="my-table">
            <thead class="my-thead">

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
                @if ($treno->in_orario)
                <td>si</td>
                @else <td>no</td>                    
                @endif
                @if ($treno->cancellato)
                <td>si</td>
                @else <td>no</td>    
                @endif
            </tr>
               @endforeach
            </tbody>
        </table>

<!--treni che partono in data odierna-->
        <h2>Partenze odierne: </h2>
        <table class="my-table">
            <thead class="my-thead">

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
                @foreach ($treniOdierni as $trenoInPartenza)

                
                <tr>
                    <td>{{$trenoInPartenza->azienda}}</td>
                    <td>{{$trenoInPartenza->stazione_di_partenza}}</td>
                    <td>{{$trenoInPartenza->Stazione_di_arrivo}}</td>
                    <td>{{$trenoInPartenza->orario_di_partenza}}</td>
                    <td>{{$trenoInPartenza->orario_di_arrivo}}</td>
                    <td>{{$trenoInPartenza->codice_treno}}</td>
                    <td>{{$trenoInPartenza->numero_carrozze}}</td>
                    @if ($trenoInPartenza->in_orario)
                    <td>si</td>
                    @else <td>no</td>                    
                    @endif
                    @if ($trenoInPartenza->cancellato)
                    <td>si</td>
                    @else <td>no</td>    
                    @endif
                </tr>
                
               @endforeach
            </tbody>
        </table>

    </div>
@endsection