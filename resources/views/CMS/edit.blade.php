@extends('CMS.layout.app')

@section('content')
    <h2>Edição de Posts para o blog</h2>
    <a href="{{ route('cms.index') }}" class="btn btn-primary">voltar</a>
    <hr>

    @include('CMS.layout.alert')

    <form action="{{ route('cms.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('CMS.layout.form')
    </form>
    </div>
@endsection
