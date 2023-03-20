@extends('Dashboard.layout')

@section('content')

<h1>Crear Post</h1>

    @include('fragment._errors-form')

    <form action="{{ route('post.store') }}" method="post">
        @include('Dashboard.post._form')
    </form>
    
@endsection