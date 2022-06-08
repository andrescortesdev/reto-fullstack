@extends('layouts.app')
@section('content')
    <form action="{{ route('cursos.update', $course->id) }}" method="post">
        @method('put')
        @csrf
        <h3>Actualizar {{ $course->name }}</h3>
        <div class="row">

            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Nombre del curso</label>
                    <input type="text" name="name" class="form-control" value="{{ $course->name }}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Horario</label>
                    <input type="text" name="horary" class="form-control" value="{{ $course->horary }}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Fecha inicio</label>
                    <input type="date" name="start_date" class="form-control" value="{{ $course->start_date }}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Fecha fin</label>
                    <input type="date" name="end_date" class="form-control" value="{{ $course->end_date }}" required>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <button class="btn btn-primary ">Actualizar curso</button> | <a class="" href="{{ route('cursos.index') }}">Cancelar</a>

        </div>
    </form>
@endsection
