@extends('epayco.layout.app')

@section('title', 'Login')

@section('main')
    <div class="position-absolute top-50 start-50 translate-middle">
        <form action="{{ route('login') }}" method="post" autocomplete="off">
            @csrf
            <div class="card cardLogin">
                <div class="card-header">
                    <div class="card-title">
                        <h3><strong>Inicio de sesión</strong></h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="email" class="form-label">Dirección de correo</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Ingresar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
