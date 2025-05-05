@extends('layouts.app')

@section('contend')


<div class="fixed-container">
    <h2 class="text-center fw-bold mb-4">Registro</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form method="POST" action="{{ route('register.post') }}" novalidate>
        @csrf
        <div class="mb-4">
            <label for="name" class="form-label fw-semibold">Nombre Completo</label>
            <input type="text" name="name" class="form-control rounded-pill @error('name') is-invalid @enderror" id="name" placeholder="Tu nombre completo" value="{{ old('name') }}" required />
            @error('name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
            <input type="email" name="email" class="form-control rounded-pill @error('email') is-invalid @enderror" id="email" placeholder="nombre@ejemplo.com" value="{{ old('email') }}" required />
            @error('email')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="form-label fw-semibold">Contraseña</label>
            <input type="password" name="password" class="form-control rounded-pill @error('password') is-invalid @enderror" id="password" placeholder="Contraseña" required minlength="6" />
            @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="form-label fw-semibold">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" class="form-control rounded-pill" id="password_confirmation" placeholder="Confirmar Contraseña" required minlength="6" />
        </div>
        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-success rounded-pill fw-bold shadow-sm">
                <i class="fas fa-user-plus me-2"></i> Registrarse
            </button>
        </div>
    </form>
    <div class="text-center">
        <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a></p>
    </div>
</div>
@endsection
