@extends('epayco.layout.app')

@section('title', 'Dashboard')

@section('main')
    <div class="row mtop">
        <div class="d-flex flex-wrap flex-fill justify-content-center">
            <div class="btn-group">
                <a href={{ route('dashboard') }} class="btn btn-outline-dark active filter" aria-current="page">Todas</a>
                <a href={{ route('dashboard.show', ['status' => 'Anulada']) }}
                    class="btn btn-outline-danger filter">Anulada</a>
                <a href={{ route('dashboard.show', ['status' => 'Pagada']) }}
                    class="btn btn-outline-success filter">Pagada</a>
                <a href={{ route('dashboard.show', ['status' => 'Pendiente']) }}
                    class="btn btn-outline-warning filter">Pendiente</a>
            </div>
        </div>
    </div>

    @isset($Anulada)
        <script>
            filter('Anulada')
        </script>
    @endisset
    @isset($Pagada)
        <script>
            filter('Pagada')
        </script>
    @endisset
    @isset($Pendiente)
        <script>
            filter('Pendiente')
        </script>
    @endisset

    <div class="row">
        <div class="d-flex flex-wrap flex-fill justify-content-center">
            @foreach ($bills as $bill)
                <div class="card card-style m-2 border" id="{{ $bill->status }}">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">N° de factura {{ $bill->id }}</h5>
                                <p class="card-text">Descripción: {{ $bill->description }}</p>
                                <p class="card-text">Cliente: {{ $bill->name . ' ' . $bill->last_name }}</p>
                                <p class="card-text"><small class="text-muted">Fecha de vencimiento
                                        {{ $bill->expiration_date }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <script>border()</script>
        </div>
    </div>

@endsection
