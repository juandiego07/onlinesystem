@extends('epayco.layout.app')

@section('title', 'Factura')

@section('main')
    <div class="row mtop">
        <div class="d-flex flex-wrap flex-fill justify-content-end">
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Nueva
                factura</button>
            <form action="{{ route('invoice.create') }}" method="post">
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <form action="{{ route('customer.create') }}" method="post">
                        @csrf
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Registar factura</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <label for="customer" class="form-label">Cliente</label>
                                            <select class="form-select" aria-label="Default select example" id="customer"
                                                name="customer" required>
                                                <option selected></option>
                                                @foreach ($customers as $customer)
                                                    <option value={{ $customer->id }}>{{ $customer->name }}
                                                        {{ $customer->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="mb-2">
                                                <label for="date" class="form-label">Fecha</label>
                                                <input type="date" class="form-control" id="date" name="date"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <div class="mb-2">
                                                <label for="expiration_date" class="form-label">Fecha de vencimiento</label>
                                                <input type="date" class="form-control" id="expiration_date"
                                                    name="expiration_date">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="mb-2">
                                                <label for="currency" class="form-label">Moneda</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    id="currency" name="currency">
                                                    <option selected></option>
                                                    <option value="cop">COP</option>
                                                    <option value="usd">USD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="description" class="form-label">Descripción</label>
                                            <textarea type="number" class="form-control" id="description" name="description" rows="3"
                                                placeholder="Descripción de producto o servicio" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mb-2">
                                                <label for="tax_base" class="form-label">Valor base</label>
                                                <input type="number" class="form-control" id="tax_base" name="tax_base"
                                                    value="0">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-2">
                                                <label for="tax" class="form-label">Impuesto</label>
                                                <input type="number" class="form-control" id="tax" name="tax"
                                                    value="0">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-2">
                                                <label for="amount" class="form-label">Total</label>
                                                <input type="number" class="form-control" id="amount" name="amount"
                                                    value="0" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-dark">Crear</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="d-flex flex-wrap flex-fill justify-content-center">
            @foreach ($bills as $bill)
                <div class="card card-style m-2 border" id="{{ $bill->status }}">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">N° de factura {{ $bill->id }}</h5>
                                <p class="card-text">Descripción: {{ $bill->description }}</p>
                                <p class="card-text">Cliente: {{ $bill->name." ".$bill->last_name }}</p>
                                <p class="card-text"><small class="text-muted">Fecha de vencimiento {{ $bill->expiration_date }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <script>border()</script>
        </div>
    </div>

@endsection
