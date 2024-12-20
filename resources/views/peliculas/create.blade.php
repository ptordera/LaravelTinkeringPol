@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Afegir Pel·licula</h1>
                <form action="{{ route('peliculas.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="titol">Titol</label>
                        <input type="text" name="titol" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="genere">Genere</label>
                        <input type="text" name="genere" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="director">Director</label>
                        <input type="text" name="director" class="form-control" required></input>
                    </div>
                    <div class="form-group">
                        <label for="year">Any de Publicació (YYYY)</label>
                        <input type="number" name="year" id="year" class="form-control" min="1000" required>
                    </div>

                    <script>
                        document.getElementById('year').max = new Date().getFullYear();
                    </script>

                    <div class="form-group">
                        <label for="duracio">Duració (hh:mm)</label>
                        <input type="time" name="duracio" class="form-control" value="00:00" required></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Afegir Pel·licula</button>
                </form>
            </div>
        </div>
    </div>
@endsection
