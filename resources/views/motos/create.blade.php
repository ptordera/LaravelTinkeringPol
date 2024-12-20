@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Afegir Moto</h1>
                <form action="{{ route('motos.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" name="marca" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" name="model" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cilindrada">Cilindrada (cc)</label>
                        <input type="number" name="cilindrada" class="form-control" required></input>
                    </div>
                    <div class="form-group">
                        <label for="potencia">Potència (kW)</label>
                        <input type="number" name="potencia" class="form-control" required></input>
                    </div>

                    <button type="submit" class="btn btn-primary">Afegir Moto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
