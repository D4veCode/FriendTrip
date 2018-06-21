@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Hoteles <a href="{{ route('hotels.create') }}" class="btn btn-primary">Create</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Ubicacion</th>
                            <th>Descripcion</th>
                            <th>Tipo Hab</th>
                            <th>Imagen</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                        @foreach($hotels as $hot)
                        <tr>
                            <td>{{ $hot->id }}</td>
                            <td>{{ $hot->name }}</td>
                            <td>{{ $hot->price }}</td>
                            <td>{{ $hot->location }}</td>
                            <td>{{ $hot->description }}</td>
                            <td>{{ $hot->room_type }}</td>
                            <td><img src="{{ asset('gallery/' . $hot->image) }}" alt="{{ $hot->image }}" width="150"></td>
                            <td><a href="{{ route('hotels.edit', $hot->id) }}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{ route('hotels.destroy', $hot->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $hotels->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection