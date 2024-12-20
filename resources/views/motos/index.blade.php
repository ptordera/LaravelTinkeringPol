@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Motos</h1>
                <div class="d-flex justify-content-between align-items-center container-btn">
                    <a href="{{ route('motos.create') }}" class="btn btn-primary btn-afegir">Afegir Moto</a>
                    @if ($message = Session::get('success'))
                        <div class="flex-grow-1 ms-3">
                            <div class="alert alert-success mb-0">
                                <p>{{ $message }}</p>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="table-responsive mt-2">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Model</th>
                            <th>Cilindrada</th>
                            <th>Potència</th>
                            <th width="280px">Action</th>
                        </tr>
                        @forelse ($motos as $moto)
                            <tr>
                                <td>{{ $moto->id }}</td>
                                <td>{{ $moto->marca }}</td>
                                <td>{{ $moto->model }}</td>
                                <td>{{ $moto->cilindrada }}</td>
                                <td>{{ $moto->potencia }}</td>
                                <td>
                                    <form action="{{ route('motos.destroy', $moto->id) }}" method="POST">
                                        <a class="btn btn-mostrar" href="{{ route('motos.show', $moto->id) }}">Mostrar</a>
                                        <a class="btn btn-editar" href="{{ route('motos.edit', $moto->id) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-eliminar">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No hi ha motos disponibles</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
