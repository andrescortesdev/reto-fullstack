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
            <h3>Cursos asociados
                <button data-bs-toggle="modal" data-bs-target="#add_course" class="btn btn-sm btn-primary">Asociar a un
                    curso
                </button>
            </h3>
            @include('layouts.componets.alerts')
            <table class="table-hover table table-striped mt-2">
                <tr>
                    <th>Curso</th>
                    <th>Horario</th>
                    <th>Fecha inicio</th>
                    <th>Fecha fin</th>
                    <th>Opciones</th>
                </tr>
                @foreach($courses_associates as $courses_associate)
                    <tr>
                        <td>{{ $courses_associate->courses->name }}</td>
                        <td>{{ $courses_associate->courses->horary }}</td>
                        <td>{{ $courses_associate->courses->start_date }}</td>
                        <td>{{ $courses_associate->courses->end_date }}</td>
                        <td>
                            <form action="{{ route('remover.estudiantes.curso', $courses_associate->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Salir del curso</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <form action="{{ route('asociar.estudiantes.curso') }}" method="post">
        <input type="hidden" value="{{ $student->id }}" name="student_id">
        @csrf
        <div id="add_course" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="standard-modalLabel">Asociar un nuevo curso
                            a {{ $student->name }}</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="course_id">Cursos</label>
                            <select name="course_id" id="course_id" class="form-control">
                                <option value="">Seleccionar...</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
