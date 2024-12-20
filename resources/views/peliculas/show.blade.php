@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Detalls de la Pel·licula</h1>
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $pelicula->titol }}</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>ID:</strong> {{ $pelicula->id }}</p>
                        <p><strong>Gènere:</strong> {{ $pelicula->genere }}</p>
                        <p><strong>Director:</strong> {{ $pelicula->director }}</p>
                        <p><strong>Any de publicació:</strong> {{ $pelicula->year }}</p>
                        <p><strong>Duració:</strong> {{ $pelicula->duracio }}</p>
                        <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">Enrere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
