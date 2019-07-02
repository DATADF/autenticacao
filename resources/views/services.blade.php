@extends('layout')

@section('title', 'Services')

@section('content')
    <h1>Services</h1>

    <ul>
        @isset ($services)

            @foreach ($services as $serviceItem)

                <li>{{ $serviceItem['title'] }}</li>

            @endforeach
        @else
            <li>Não existem projetos para mostrar.</li>
        @endisset
    </ul>
@endsection
