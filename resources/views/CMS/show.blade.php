@extends('CMS.layout.app')

@section('content')
    <h2 class="mb-3">{{ $post->titulo }}</h2>
    <div class="voltar mb-3">
        <a href="{{ route('cms.index') }}" class="btn btn-primary">voltar</a>
    </div>

    @if ($post->photo)
        <img src="{{ Storage::url("{$post->photo}") }}" alt="{{ $post->titulo }}" width="400px" class="mb-3">
    @endif
    {!! $post->artigo !!}
@endsection
