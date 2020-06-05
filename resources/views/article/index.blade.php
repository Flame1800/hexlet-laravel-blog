@extends('layouts.app')


@section('title', 'Посты')
@section('content')
<h1>Список статей</h1>
@foreach ($articles as $article)
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{$article->name}}</h5>
        <p class="card-text">{{Str::limit($article->body, 200)}}</p>
    </div>
</div>
@endforeach
@endsection