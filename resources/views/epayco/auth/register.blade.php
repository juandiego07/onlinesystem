@extends('epayco.layout.app')

@section('title', 'Registro')

@section('main')
    <div class="position-absolute top-50 start-50 translate-middle">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3><strong>Resgistro en el sistema</strong></h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="mb-2">
                                <label for="name" class="form-label">Nombre completo</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Jon Doe" required>
                            </div>

                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="mb-2">
                                <label for="email" class="form-label">Dirección de correo</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="mb-2">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="mb-2">
                                <label for="password_confirmation" class="form-label">Confirmar</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-dark">Registrase</button>
                </div>
            </div>
        </form>
    </div>
@endsection
