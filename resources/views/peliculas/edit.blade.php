@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Editar Pel·licula</h1>
                <form action="{{ route('peliculas.update', $pelicula->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" class="form-control" value="{{ $pelicula->id }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="titol">Titol</label>
                        <input type="text" name="titol" class="form-control" value="{{ $pelicula->titol }}" required>
                    </div>
                    <div class="form-group">
                        <label for="genere">Genere</label>
                        <input type="text" name="genere" class="form-control" value="{{ $pelicula->genere }}" required>
                    </div>
                    <div class="form-group">
                        <label for="director">Director</label>
                        <input type="text" name="director" class="form-control"  value="{{ $pelicula->director }}" required></input>
                    </div>

                    <div class="form-group">
                        <label for="year">Any de Publicació (YYYY)</label>
                        <input type="number" name="year" id="year" class="form-control" min="1000" value="{{ $pelicula->year }}" required></input>
                    </div>

                    <script>
                        document.getElementById('year').max = new Date().getFullYear();
                    </script>
                    <div class="form-group">
                        <label for="duracio">Duració (hh:mm)</label>
                        <input type="time" name="duracio" class="form-control"  value="{{ $pelicula->duracio }}" required></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualitzar Pel·licula</button>
                </form>
            </div>
        </div>
    </div>
@endsection
