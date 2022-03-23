@extends('layouts.master')

@section('content') 
@include('fragments.validation-errors')
@include('fragments.sesion')
<h1>Post</h1>
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
        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
   



@endsection