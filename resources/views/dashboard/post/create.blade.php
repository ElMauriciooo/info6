@extends('layouts.master')

@section('content') 
@include('fragments.validation-errors')
@include('fragments.sesion')

<h1>Post</h1>

<form method="POST" action="{{ route("post.store") }}">
    @csrf 
    @include('dashboard.post._form') 
</form>


@endsection