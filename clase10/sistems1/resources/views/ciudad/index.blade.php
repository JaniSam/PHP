@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestión de Ciudades</h1>
@stop

@section('content')

    @if(session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif
    <p>Bienvenido al panel de Administracion de Ciudades ✨</p>
    <table class="">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>----</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ciudades as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->nombre}}</td>
                    <td><a href="reporteCiudad/{{$c->id}}">📄</a></td>
                    <td><a href="editarCiudad/{{$c->id}}">🖊</a></td>
                    <td>
                        <form method="post" action="eliminarCiudad/{{$c->id}}">
                            @csrf
                            @method('delete')
                            <button type="submit" name="eliminar">🗑</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <h5>Registrar Ciudad</h5>
    <form method="post" action="guardarCiudad">
        @csrf
        <input type="text" name="ciudad" id="ciudad" placeholder="Nombre de la Ciudad">
        <button type="submit" name="btnCiudad">✔</button>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop