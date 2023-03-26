@extends('Dashboard.layout')

@section('content')

<h1>Mostrar Post: {{ $post->title }}</h1>

 <p>{{ $post->description }}</p>
 <p>{{ $post->slug }}</p>
 <p>{{ $post->content }}</p>
 <p>{{ $post->posted }}</p>
 <p>{{ $post->image }}</p>

 <a href="{{ route('post.index') }}">Volver</a>
    
@endsection