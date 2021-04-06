@extends('CMS.layout.app')

@section('content')
    <h2>Lista de posts</h2>

    <a href="{{ url('cms/create') }}" class="btn btn-primary">Criar Novo Post</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Imagem</th>
                <th scope="col">Titulo</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        @if ($post->photo)
                            <img src="{{ Storage::url("{$post->photo}") }}" alt="{{ $post->titulo }}" width="40px">
                        @endif
                    </td>
                    <td>{{ $post->titulo }}</td>
                    <td>
                        <a href="{{ route('cms.show', $post->id) }}">Visualizar</a> <br>
                        <a href="{{ route('cms.edit', $post->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
