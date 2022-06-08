@extends('layouts.guest')
@section('content')

    <div class="auth-fluid">
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- title-->
                    <h4 class="mt-0">Iniciar</h4>
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
                <h2 class="mb-3 text-white">I love the color!</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> I've been using your theme from the previous
                    developer for our web app, once I knew new version is out, I immediately bought with no hesitation.
                    Great themes, good documentation with lots of customization available and sample app that really fit
                    our need.
                    <i class="mdi mdi-format-quote-close"></i>
                </p>
                <h5 class="text-white">

                </h5>
            </div>
        </div>

    </div>

@endsection
