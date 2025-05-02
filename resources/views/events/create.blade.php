@extends('layouts.plantilla')

@section('title', 'nuevo evento')

@section('content')
    <h1>Aquí se crean los eventos</h1>
    <form action={{route('events.save')}} method="POST" >
        
        @csrf
        
        <label>
            evento:
            <input type="text" name="title">
        </label>
        <br><br>
        <label>
            Detalles:
            <textarea name="description" rows="5"></textarea>
        </label>
        <br><br>
        <label>
            Donde:
            <input type="text" name="site">
        </label>
        <br><br>
        <label>
            Cuando: 
            <input type="datetime" name="dateTime">
        </label>
        <br><br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection()