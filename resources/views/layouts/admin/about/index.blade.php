@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Imagenes <a href="{{ route('gallery.create') }}" class="btn btn-primary">Create</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                        @foreach($galleries as $img)
                        <tr>
                            <td>{{ $img->id }}</td>
                            <td><img src="{{ asset('gallery/' . $img->image) }}" alt="{{ $img->image }}" width="150"></td>
                            <td>{{ $img->title }}</td>
                            <td>{{ $img->description }}</td>
                            <td><a href="{{ route('gallery.edit', $img->id) }}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{ route('gallery.destroy', $img->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection