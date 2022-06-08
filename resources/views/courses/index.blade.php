@extends('layouts.app')
@section('content')
    <div class="table-responsive">
        <form action="{{ route('cursos.index') }}" method="get">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('cursos.create') }}" class="btn btn-primary">Crear nuevo curso</a>
                </div>
                <div class="col-md-3">
                    <input type="search" name="q" value="{{ request()->get('q') }}" class="form-control" placeholder="Buscar...">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </form>


        <table class="table table-striped table-hover mt-3">
            <thead>
            <tr>
                <th>NOMBRE</th>
                <th>HORARIO</th>
                <th>FECHA INICIO</th>
                <th>FECHA FIN</th>
                <th>OPCIONES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->horary }}</td>
                    <td>{{ $course->start_date }}</td>
                    <td>{{ $course->end_date }}</td>
                    <td>
                        <a href="{{ route('cursos.show',$course->id) }}" class="btn btn-info btn-sm">Detalles</a>
                        <a href="{{ route('cursos.edit',$course->id) }}" class="btn btn-warning btn-sm">editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
    {{ $courses->links() }}
@endsection
