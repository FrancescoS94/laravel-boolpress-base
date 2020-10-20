@extends('layouts.app')
@section('content')
<h2>Elenco Post</h2>
@if(session('insert'))
    <div class="alert alert-succes">
        {{ session('insert') }}
    </div>
@endif
@foreach($posts as $post)
    <div>
        <p>Titolo: {{ $post->title }}</p>
        <p>Post: {{ $post->body }}</p>
    </div>
@endforeach
@endsection
