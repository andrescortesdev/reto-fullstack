@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-4">
            <h3>Detalles {{ $student->name }}</h3>
            <table class="table-hover table table-striped mt-2">
                <tr>
                    <th>Nombre</th>
                    <td>{{ $student->name }}</td>
                </tr>
                <tr>
                    <th>Apellido</th>
                    <td>{{ $student->lastname }}</td>
                </tr>
                <tr>
                    <th>Edad</th>
                    <td>{{ $student->age }}</td>
                </tr>
                <tr>
                    <th>Correo</th>
                    <td>{{ $student->email }}</td>
                </tr>
            </table>
            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}">Volver</a>
            <a class="btn btn-warning" href="{{ route('estudiantes.edit',$student->id) }}">Editar</a>
        </div>
        <div class="col-md-8">
            <h3>Cursos asociados</h3>
            <table class="table-hover table table-striped mt-2">
                <tr>
                    <th>Cursos</th>
                    <td>Horario</td>
                    <td>Fecha inicio</td>
                    <td>Fecha fin</td>
                    <td>Opciones</td>
                </tr>
            </table>
        </div>
    </div>

@endsection
