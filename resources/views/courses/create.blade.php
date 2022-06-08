@extends('layouts.app')
@section('content')
    <form action="{{ route('cursos.store') }}" method="post">
        @csrf
        <h3>Crear nuevo curso</h3>
        <div class="row">

            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Nombre del curso</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Horario</label>
                    <input type="text" name="horary" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Fecha inicio</label>
                    <input type="date" name="start_date" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Fecha fin</label>
                    <input type="date" name="end_date" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <button class="btn btn-primary ">Crear nuevo registro</button> | <a class="" href="{{ route('cursos.index') }}">Cancelar</a>

        </div>
    </form>
@endsection
