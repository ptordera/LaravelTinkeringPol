@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Detalls de la Moto</h1>
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $moto->model }}</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>ID:</strong> {{ $moto->id }}</p>
                        <p><strong>Marca:</strong> {{ $moto->marca }}</p>
                        <p><strong>Cilindrada (cc):</strong> {{ $moto->cilindrada }}</p>
                        <p><strong>Potència (kW):</strong> {{ $moto->potencia }}</p>
                        <a href="{{ route('motos.index') }}" class="btn btn-secondary">Enrere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
