@extends('Dashboard.layout')

@section('content')

<h1>Actualizar Post: {{ $post->title }}</h1>

    @include('fragment._errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @method("PATCH")
        @include('Dashboard.post._form', ['task'=> 'edit'])
    </form>
    
@endsection