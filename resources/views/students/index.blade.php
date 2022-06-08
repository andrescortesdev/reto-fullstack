@extends('layouts.app')
@section('content')
    <div class="table-responsive">
        <form action="{{ route('estudiantes.index') }}" method="get">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">Crear nuevo estudiante</a>
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
                <th>APELLIDO</th>
                <th>EDAD</th>
                <th>EMAIL</th>
                <th>OPCIONES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->lastname }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a href="{{ route('estudiantes.show',$student->id) }}" class="btn btn-info btn-sm">Detalles</a>
                        <a href="{{ route('estudiantes.edit',$student->id) }}" class="btn btn-warning btn-sm">editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
    {{ $students->links() }}
@endsection
