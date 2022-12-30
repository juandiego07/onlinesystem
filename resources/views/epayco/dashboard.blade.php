@extends('epayco.layout.app')

@section('title', 'Dashboard')

@section('main')
    <div class="row mtop">
        <div class="d-flex flex-wrap flex-fill justify-content-center">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-dark" for="btnradio1">Todas</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-dark" for="btnradio2">Anuladas</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-dark" for="btnradio3">Pagadas</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                <label class="btn btn-outline-dark" for="btnradio4">Pendientes</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-flex flex-wrap flex-fill justify-content-center">
            <div class="card card-style m-2 border-success">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">N° de factura 001</h5>
                            <p class="card-text">Descripción: Servicios ePayco Diciembre</p>
                            <p class="card-text">Cliente: Juan Diego Vargas Posada</p>
                            <p class="card-text"><small class="text-muted">27/12/2022</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-style m-2 border-success">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">N° de factura 002</h5>
                            <p class="card-text">Descripción: Servicios ePayco Diciembre</p>
                            <p class="card-text">Cliente: Juan Diego Vargas Posada</p>
                            <p class="card-text"><small class="text-muted">27/12/2022</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-style m-2 border-warning">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">N° de factura 003</h5>
                            <p class="card-text">Descripción: Servicios ePayco Diciembre</p>
                            <p class="card-text">Cliente: Juan Diego Vargas Posada</p>
                            <p class="card-text"><small class="text-muted">27/12/2022</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-style m-2 border-danger">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">N° de factura 004</h5>
                            <p class="card-text">Descripción: Servicios ePayco Diciembre</p>
                            <p class="card-text">Cliente: Juan Diego Vargas Posada</p>
                            <p class="card-text"><small class="text-muted">27/12/2022</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-style m-2 border-danger">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">N° de factura 004</h5>
                            <p class="card-text">Descripción: Servicios ePayco Diciembre</p>
                            <p class="card-text">Cliente: Juan Diego Vargas Posada</p>
                            <p class="card-text"><small class="text-muted">27/12/2022</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-style m-2 border-danger">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">N° de factura 004</h5>
                            <p class="card-text">Descripción: Servicios ePayco Diciembre</p>
                            <p class="card-text">Cliente: Juan Diego Vargas Posada</p>
                            <p class="card-text"><small class="text-muted">27/12/2022</small></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
