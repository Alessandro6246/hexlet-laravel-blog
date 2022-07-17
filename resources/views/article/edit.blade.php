@extends('layouts.app')

@section('content')

<h1>Изменение статьи</h1>
{{ Form::model($article, ['route' => ['articles.update', $article], 'method' => 'PATCH']) }}
    @include('article.form')
    {{ Form::submit('Обновить') }}
{{ Form::close() }}
@endsection