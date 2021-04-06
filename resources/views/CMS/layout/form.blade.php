@csrf
<div class="form-group">
    <label>Título</label>
    <input type="text" class="form-control" name="titulo" value="{{ $post->titulo ?? old('titulo') }}">
</div>
<div class="form-group">
    <label>Imagem</label>
    <input type="file" class="form-control" name="photo">
</div>
<div class="form-group">
    <label>Post</label>
    <textarea id="artigo" name="artigo" class="form-control" cols="30" rows="10">{{ $post->artigo ?? '' }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">
        @if (isset($post))
            Atualizar
        @else
            Cadastrar
        @endif
    </button>
</div>
