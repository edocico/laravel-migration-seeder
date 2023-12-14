@extends('layouts.app')

@section('header-content')
    <div class="container">
        <h1 class="text-center title">
            train list
        </h1>
    </div>
@endsection

@section('content')

    <table class="train-table">
        <thead>
            <tr>
                <th class="px-2">azienda</th>
                <th class="px-2">stazione di partenza</th>
                <th class="px-2">stazione di arrivo</th>
                <th class="px-2">orario di partenza</th>
                <th class="px-2">orario di arrivo</th>
                <th class="px-2">codice treno</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td class="px-2">{{ $train->azienda }}</td>
                <td class="px-2">{{ $train->stazione_di_partenza }}</td>
                <td class="px-2">{{ $train->stazione_di_arrivo }}</td>
                <td class="px-2">{{ $train->orario_di_partenza }}</td>
                <td class="px-2">{{ $train->orario_di_arrivo }}</td>
                <td class="px-2">{{ $train->codice_treno }}</td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    
@endsection

