@extends('layouts.app')

@section('content')

<h1>Создание статьи</h1>
{{ Form::model($article, ['route' => 'articles.store']) }}
	@include('article.form')
    {{ Form::submit('Создать') }}
{{ Form::close() }}
@endsection