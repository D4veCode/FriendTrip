@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editando Post</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('hotels.update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
			            <input name="_method" type="hidden" value="PUT">
                        <div class="form-group">
                            <label for="image">Imagen</label>
                            <input type="file" name="fileimage" id="fileimage" class="form-control">
			            </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="{{ $post->title or old('title') }}" class="form-control" placeholder="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                        <input type="text" name="body" id="body" value="{{ $post->body or old('body') }}" class="form-control" placeholder="{{$post->body}}">
                        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection