@extends('epayco.layout.app')

@section('title', 'Cliente')

@section('main')
    <div class="row mtop">
        <div class="d-flex flex-wrap flex-fill justify-content-end">
            {{-- <button class="btn btn-dark" type="submit">Nuevo cliente</button> --}}

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Nuevo
                cliente</button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Registar nuevo cliente</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-2">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-2">
                                        <label for="last_name" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-2">
                                        <label for="address" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="address" name="address">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-2">
                                        <label for="email" class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="corroe@ejemplo.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-2">
                                    <div class="mb-2">
                                        <label for="document_type" class="form-label">Tipo</label>
                                        <select class="form-select" aria-label="Default select example" id="document_type" name="document_type">
                                            <option selected></option>
                                            <option value="cc">CC</option>
                                            <option value="ce">CE</option>
                                            <option value="nit">NIT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-md-5">
                                    <div class="mb-2">
                                        <label for="document_number" class="form-label">Documento</label>
                                        <input type="number" class="form-control" id="document_number" name="document_number" min="0">
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <div class="mb-2">
                                        <label for="phone_number" class="form-label">Teléfono</label>
                                        <input type="tel" class="form-control" id="phone_number" name="phone_number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-dark">Crear</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="d-flex flex-wrap flex-fill justify-content-center">

            <div class="card card-style m-2">
                <div class="row g-0">
                    <div class="col-4 d-flex justify-content-center align-items-center p-1">
                        <img class="img-fluid rounded-start" src="{{ asset('./img/user.svg') }}"alt="imgUser">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h6 class="card-title"><strong>Juan Diego Vargas Posada</strong></h6>
                            <p class="card-text my-0">CC 1194418306</p>
                            <p class="card-text my-0">3042462218</p>
                            <p class="card-text my-0">diego.vargas@payco.co</p>
                            <p class="card-text my-0"><small class="text-muted">Calle 104 # 74a - 4</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-style m-2">
                <div class="row g-0">
                    <div class="col-4 d-flex justify-content-center align-items-center p-1">
                        <img class="img-fluid rounded-start" src="{{ asset('./img/user.svg') }}"alt="imgUser">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h6 class="card-title"><strong>Juan Diego Vargas Posada</strong></h6>
                            <p class="card-text my-0">CC 1194418306</p>
                            <p class="card-text my-0">3042462218</p>
                            <p class="card-text my-0">diego.vargas@payco.co</p>
                            <p class="card-text my-0"><small class="text-muted">Calle 104 # 74a - 4</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-style m-2">
                <div class="row g-0">
                    <div class="col-4 d-flex justify-content-center align-items-center p-1">
                        <img class="img-fluid rounded-start" src="{{ asset('./img/user.svg') }}"alt="imgUser">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h6 class="card-title"><strong>Juan Diego Vargas Posada</strong></h6>
                            <p class="card-text my-0">CC 1194418306</p>
                            <p class="card-text my-0">3042462218</p>
                            <p class="card-text my-0">diego.vargas@payco.co</p>
                            <p class="card-text my-0"><small class="text-muted">Calle 104 # 74a - 4</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-style m-2">
                <div class="row g-0">
                    <div class="col-4 d-flex justify-content-center align-items-center p-1">
                        <img class="img-fluid rounded-start" src="{{ asset('./img/user.svg') }}"alt="imgUser">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h6 class="card-title"><strong>Juan Diego Vargas Posada</strong></h6>
                            <p class="card-text my-0">CC 1194418306</p>
                            <p class="card-text my-0">3042462218</p>
                            <p class="card-text my-0">diego.vargas@payco.co</p>
                            <p class="card-text my-0"><small class="text-muted">Calle 104 # 74a - 4</small></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- <div class="main d-flex flex-column justify-content-center">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <img class="img-fluid rounded-start" src="{{ asset('./img/user.svg') }}"alt="imgUser">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h6 class="card-title"><strong>Juan Diego Vargas Posada</strong></h6>
                        <p class="card-text my-0">CC 1194418306</p>
                        <p class="card-text my-0">3042462218</p>
                        <p class="card-text my-0">diego.vargas@payco.co</p>
                        <p class="card-text my-0"><small class="text-muted">Calle 104 # 74a - 4</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
