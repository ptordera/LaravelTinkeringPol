@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Editar Moto</h1>
                <form action="{{ route('motos.update', $moto->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="number" name="id" class="form-control" value="{{ $moto->id }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" name="marca" class="form-control" value="{{ $moto->marca }}" required>
                    </div>
                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" name="model" class="form-control" value="{{ $moto->model }}" required>
                    </div>
                    <div class="form-group">
                        <label for="cilindrada">Cilindrada (cc)</label>
                        <input type="number" name="cilindrada" class="form-control"  value="{{ $moto->cilindrada }}" required></input>
                    </div>
                    <div class="form-group">
                        <label for="potencia">Potència (kW)</label>
                        <input type="number" name="potencia" class="form-control"  value="{{ $moto->potencia }}" required></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualitzar Moto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
