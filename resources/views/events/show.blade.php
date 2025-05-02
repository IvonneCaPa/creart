@extends('layouts.plantilla')

@section('title')
    {{$event->title}}
@endsection()

@section('content')
    <h1>Nuestra Agenda</h1>
    <a href={{route('events.index')}}>Volver a cursos</a>
    <br>
    <a href={{route('events.edit', $event)}}>Editar Curso</a>
    <h2>Actividad: {{$event->title}}</h2>
    <p>Detalles: {{$event->description}} </p>
    <p>Donde: {{$event->site}} </p>
    <p>Cuando: {{$event->dateTime}} </p>
@endsection()
