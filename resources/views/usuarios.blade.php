<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuarios</title>
</head>
<body>
    @extends('layouts.app')

@section('title', 'Usuarios')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Lista de Usuarios</h2>

    <a href="/usuarios/create" class="btn btn-primary">
        + Crear Usuario
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Teléfono</th>
        </tr>
    </thead>
    <tbody>
        @forelse($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->apellido }}</td>
                <td>{{ $usuario->correo }}</td>
                <td>{{ $usuario->telefono }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">No hay usuarios registrados</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection

@push('scripts')
    <script>
        console.log('Formulario cargado');
       
    </script>
    @endpush
</body>
</html>