@extends('layouts.app')
@section('content')
    <form action="{{ route('estudiantes.store') }}" method="post">
        @csrf
        <h3>Crear nuevo estudiante</h3>
        <div class="row">

            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="lastname">Apellidos</label>
                    <input type="text" name="lastname" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="age">Edad</label>
                    <input type="number" name="age" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <button class="btn btn-primary ">Crear nuevo estudiante</button> | <a class="" href="{{ route('estudiantes.index') }}">Cancelar</a>

        </div>
    </form>
@endsection
