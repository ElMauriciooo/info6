
    <div class="mb-3">
        <label for="tittle">Titulo</label>
        <input type="text" class="form-control" name="tittle" id="tittle" value="{{ old('tittle', $post->tittle) }}">
    </div>

    <div class="form-group">
        <label for="url_clean">Url Limpia</label>
        <input type="text" class="form-control" name="url_clean" value="{{ old('url_clean', $post->url_clean) }}">
    </div>

    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea class="form-control" id="content" name="content" rows="3">{{ old('content', $post->content) }}</textarea>
        
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

