@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creando Post</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{route('blog.store')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Imagen</label>
                            <input type="file" name="image" id="image" class="form-control">
			            </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="{{ $post->title or old('title') }}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                        <input type="text" name="body" id="body" value="{{ $post->body or old('body') }}" class="form-control">
                        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection