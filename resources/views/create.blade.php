<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
<body class="bg-light">

@extends('layouts.app')
@section('title', 'Crear Usuario')
@section('content')

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Formulario de Usuario</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="/usuarios">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre">
                </div>

                <div class="mb-3">
                    <label class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido">
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo</label>
                    <input type="email" name="correo" class="form-control" placeholder="Ingrese su correo">
                </div>

                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" placeholder="Ingrese su teléfono">
                </div>

                <button type="submit" class="btn btn-success">
                    Guardar
                </button>

                @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
            </form>
        </div>
    </div>

    @endsection

    @push('scripts')
    <script>
        console.log('Formulario cargado');
       
    </script>
    @endpush
</body>
</html>