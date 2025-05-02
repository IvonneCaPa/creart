@extends('layouts.plantilla')
@section('title', 'Editar Evento')

@section('content')
    <h1>Editar el Evento</h1>
    <form action={{route('events.update', $event)}} method="POST" >
        
        @csrf

        @method('put')
        
        <label>
            evento:
            <input type="text" name="title" value={{$event->title}}>
        </label>
        <br><br>
        <label>
            Detalles:
            <textarea name="description" rows="5">{{$event->description}}</textarea>
        </label>
        <br><br>
        <label>
            Donde:
            <input type="text" name="site" value={{$event->site}}>
        </label>
        <br><br>
        <label>
            Cuando: 
            <input type="datetime" name="dateTime" value={{$event->dateTime}}>
        </label>
        <br><br>
        <button type="submit">Actualizar Info</button>
    </form>
@endsection()