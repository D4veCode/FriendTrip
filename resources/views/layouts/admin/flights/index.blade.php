@extends('layouts.admin.app')

@section('content')
<h1>Flights</h1>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Flight Num</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
</table>
@endsection
@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Vuelos <a href="{{ route('gallery.create') }}" class="btn btn-primary">Create</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th colspan="2">Acciones</th>
                        </thead>
                        <tbody>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection