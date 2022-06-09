@extends('layouts.app')
@section('content')
    <div class="table-responsive">

         <h4>Listado de cursos con mayor cantidad de estudiantes en los ultimos 6 meses</h4>
        <hr>
        <table class="table table-striped table-hover mt-3">
            <thead>
            <tr>
                <th>NOMBRE</th>
                <th>HORARIO</th>
                <th>FECHA INICIO</th>
                <th>FECHA FIN</th>
                <th>TOTAL ESTUDIANTES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($top as $result)
                <tr>
                    <td>{{ $result->courses->name }}</td>
                    <td>{{ $result->courses->horary }}</td>
                    <td>{{ $result->courses->start_date }}</td>
                    <td>{{ $result->courses->end_date }}</td>
                    <td>{{ $result->total }}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
