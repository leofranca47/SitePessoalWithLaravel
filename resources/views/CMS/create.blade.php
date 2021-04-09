@extends('CMS.layout.app')

@section('content')
    <h2>Criação de Posts para o blog</h2>
    <a href="{{ route('cms.index') }}" class="btn btn-primary">voltar</a>
    <hr>

    @include('CMS.layout.alert')

    <form action="{{ route('cms.store') }}" method="POST" enctype="multipart/form-data">
        @include('CMS.layout.form')
    </form>
    </div>
@endsection
