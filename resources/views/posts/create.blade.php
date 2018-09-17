@extends('master')
@section('content')
<h2 class="my-3">Add an article</h2>
@if($errors->all())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </div>
@endif
<form action="{{route('posts.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control">
  </div>
  <div class="form-group">
    <label for="description">Content</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-outline-info">SUBMIT</button>
  </div>
</form>
@endsection

