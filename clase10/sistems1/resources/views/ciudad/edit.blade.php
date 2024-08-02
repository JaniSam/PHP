@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestión de Ciudades</h1>
@stop

@section('content')

    <p>Bienvenido al panel de Edición de Ciudades ✨</p>
    <hr>
    <h5>Editar Ciudad:</h5>
    <form method="post" action="editCiudad/{{$ciudad->id}}">
        @csrf
        @method('patch')
        <input type="text" name="editCiudad" id="editCiudad" value="{{$ciudad->nombre}}">
        <button type="submit" name="btnCiudad">🖊</button>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop