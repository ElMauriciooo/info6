@extends('layouts.master')

@section('content') 
@include('fragments.validation-errors')
  <form method="POST" action="{{ route("post.store") }}">
    @csrf
    <div class="mb-3">
        <label for="tittle">Titulo</label>
        <input type="text" class="form-control" name="tittle" id="tittle">
    </div>

    <div class="form-group">
        <label for="url_clean">Url Limpia</label>
        <input type="text" class="form-control" name="url_clean">
    </div>

    <div class="form-group">
        <label for="content">Contenido</label>
        <h3><textarea name="form-control" id="content" name="content" rows="3"></textarea></h3>
        
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
   



@endsection