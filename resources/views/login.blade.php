@extends('layouts.noRegister')

@section('contend')
<div class="container h-100 d-flex align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg rounded-4 border-0" style="background: rgba(255, 255, 255, 0.95); min-height: 600px;">
                <div class="card-body p-5 d-flex flex-column justify-content-center h-100">
                    <h2 class="card-title mb-4 text-center fw-bold ">Iniciar Sesión</h2>
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <form method="POST" action="{{ route('login.post') }}" novalidate>
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control form-control-lg rounded-pill @error('email') is-invalid @enderror" id="email" placeholder="nombre@ejemplo.com" value="{{ old('email') }}" required />
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">Contraseña</label>
                            <input type="password" name="password" class="form-control form-control-lg rounded-pill @error('password') is-invalid @enderror" id="password" placeholder="Contraseña" required minlength="6" />
                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-dark btn-lg rounded-pill fw-bold shadow-sm">
                                <i class="fab fa-google me-2"></i> Inicio de Sesión
                            </button>
                        </div>
                    </form>
                    <div class="text-center">
                        <p>¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
