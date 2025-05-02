@extends('layouts.plantilla')

@section('title', 'eventos')

@section('content')
    <h1>Bienvenido a nuestra agenda</h1>
    <a href={{route('events.create')}}>Crear Evento</a>
    <ul>
        @foreach ($events as $event)
            <li><a href={{route('events.show', $event->id)}}>{{$event->title}}</a></li>
        @endforeach
    </ul>

    {{$events->links()}}
@endsection
