@extends('Dashboard.layout')

@section('content')

    <a href="{{ route('post.create') }}">Crear</a>
    
    <table>
        <thead>
            <tr>
                <td>Título</td>
                <td>Categoría</td>
                <td>Posted</td>
                <td>Acciones</td>

            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category_id }}</td>
                    <td>{{ $post->posted }}</td>
                    <td>
                        <a href="{{ route('post.edit', $post) }}">Editar</a>
                        <a href="{{ route('post.show', $post) }}">Mostrar</a>
                        
                        <form action="{{ route('post.destroy', $post) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}

@endsection
