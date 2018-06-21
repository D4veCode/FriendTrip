@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Posts <a href="{{ route('blog.create') }}" class="btn btn-primary">Create</a></div>

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
                            <th>Imagen</th>
                            <th>Titulo</th>
                            <th>Body</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><img src="{{ asset('gallery/' . $post->image) }}" alt="{{ $post->image }}" width="150"></td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td><a href="{{ route('blog.edit', $post->id) }}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{ route('blog.destroy', $post->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection