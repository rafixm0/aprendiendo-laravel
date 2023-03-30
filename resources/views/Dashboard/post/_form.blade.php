@csrf
        
        <label for="">Título:</label>
        <input type="text" name="title" id="" value="{{ old('title', $post->title)}}"><br>

        <label for="">Slug</label>
        <input type="text" name="slug" id="" value="{{ old('slug', $post->slug)}}"><br>

        <label for="">Contenido</label>
        <input type="text" name="content" id="" value="{{ old('content', $post->slug)}}"><br>

        <label for="">Descripción:</label>
        <textarea name="description" id="" cols="30" rows="10" >{{ old('description', $post->description)}}</textarea>
        <br>
        <label for="">Categoría:</label>
        <select name="category_id">
            @foreach ($categories as $category)
                <option {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
        <label for="">Posteado:</label> 
        <select name="posted">
            <option {{ old('posted', $post->posted) == "yes" ? 'selected' : '' }} value="yes">Si</option>
            <option {{ old('posted', $post->posted) == "not" ? 'selected' : '' }} value="not">No</option>
        </select> 

        {{-- OJO BORRAR ESTO: --}}
        {{-- <br><input type="text" name="image" id="" value="{{ old('image', $post->image)}}"><br>   --}}
        @if (isset($task) && $task == 'edit')
            <label for="">Imagen: </label>
            <input type="file" name="image" id="">
        @endif

        <br><button type="submit">Enviar</button>