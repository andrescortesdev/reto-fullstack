@extends('layouts.app')
@section('content')
        <h3>Detalles {{ $course->name }}</h3>
        <div class="row">
            <div class="col-md-4">
                <table class="table-hover table table-striped mt-2">
                    <tr>
                        <th>Nombre</th>
                        <td>{{ $course->name }}</td>
                    </tr>
                    <tr>
                        <th>Horario</th>
                        <td>{{ $course->horary }}</td>
                    </tr>
                    <tr>
                        <th>Fecha inicio</th>
                        <td>{{ $course->start_date }}</td>
                    </tr>
                    <tr>
                        <th>Fecha fin</th>
                        <td>{{ $course->end_date }}</td>
                    </tr>
                </table>
                <a class="btn btn-primary" href="{{ route('cursos.index') }}">Volver</a>
                <a class="btn btn-warning" href="{{ route('cursos.edit',$course->id) }}">Editar</a>
            </div>
        </div>

@endsection
