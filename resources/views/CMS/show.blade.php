@extends('CMS.layout.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div>
            <h2 class="mb-3">{{ $post->titulo }}</h2>
            <div class="voltar mb-3">
                <a href="{{ route('cms.index') }}" class="btn btn-primary">voltar</a>
            </div>


            <h6>Postado em : {{ $post->created_at->format('d/m/Y') }}</h6>


            @if ($post->photo)
                <img src="{{ Storage::url("{$post->photo}") }}" alt="{{ $post->titulo }}" width="400px" class="mb-3">
            @endif
            {!! $post->artigo !!}

            <form action="{{ route('cms.delete', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Apagar Post</button>
            </form>
        </div>
    </div>

@endsection
