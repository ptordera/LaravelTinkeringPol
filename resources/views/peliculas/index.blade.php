@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Pel·lícules</h1>
                <div class="d-flex justify-content-between align-items-center container-btn">
                    <a href="{{ route('peliculas.create') }}" class="btn btn-primary btn-afegir">Afegir Pel·licula</a>
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
                            <th>Titol</th>
                            <th>Genere</th>
                            <th>Director</th>
                            <th>Any de Publicació</th>
                            <th>Duració</th>
                            <th width="280px">Action</th>
                        </tr>
                        @forelse ($pelicules as $pelicula)
                            <tr>
                                <td>{{ $pelicula->id }}</td>
                                <td>{{ $pelicula->titol }}</td>
                                <td>{{ $pelicula->genere }}</td>
                                <td>{{ $pelicula->director }}</td>
                                <td>{{ $pelicula->year }}</td>
                                <td>{{ $pelicula->duracio }}</td>
                                <td>
                                    <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST">
                                        <a class="btn btn-mostrar" href="{{ route('peliculas.show', $pelicula->id) }}">Mostrar</a>
                                        <a class="btn btn-editar" href="{{ route('peliculas.edit', $pelicula->id) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-eliminar">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No hi ha pel·lícules disponibles</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
