@extends('layouts.guest')
@section('content')

    <div class="auth-fluid">
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- title-->
                    <h4 class="mt-0">Iniciar</h4>
                    @if (isset($errors) && count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                              <li>Correo o contraseña invalidos</li>
                            </ul>
                        </div>
                    @endif
                    <!-- form -->
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electronico</label>
                            <input class="form-control" name="email" type="email" id="email" required="">
                        </div>
                        <div class="mb-3">
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" name="password" class="form-control">
                                <div class="input-group-text" data-password="false">
                                    <span class="password-eye"></span>
                                </div>
                            </div>
                        </div>

                        <div class="text-center d-grid">
                            <button class="btn btn-primary" type="submit">Autenticarme</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3 text-white">FullStack Reto</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i>
                    Construya una aplicación web con estructura monolítica con Laravel que permita la gestión de
                    cursos, estudiantes y la asignación entre estos, teniendo en cuenta que un estudiante puede estar
                    asociado a varios cursos.
                    <i class="mdi mdi-format-quote-close"></i>
                </p>
                <h5 class="text-white">

                </h5>
            </div>
        </div>

    </div>

@endsection
