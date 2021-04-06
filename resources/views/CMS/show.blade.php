@extends('CMS.layout.app')

@section('content')
    <h2>{{ $post->titulo }}</h2>
    <a href="{{ route('cms.index') }}" class="btn btn-primary">voltar</a>
    @if ($post->photo)
        <img src="{{ Storage::url("{$post->photo}") }}" alt="{{ $post->titulo }}" width="400px">
    @endif
    {!! $post->artigo !!}
@endsection
