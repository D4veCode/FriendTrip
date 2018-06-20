<div class="form-group">
    <label for="image">Imagen</label>
    <input type="file" name="fileimage" id="fileimage" class="form-control">
</div>
<div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" name="title" id="title" value="{{ $gallery->title or old('title') }}" class="form-control">
</div>
<div class="form-group">
    <label for="body">Body</label>
    <input type="text" name="body" id="body" value="{{ $gallery->body or old('body') }}" class="form-control">
</div>
