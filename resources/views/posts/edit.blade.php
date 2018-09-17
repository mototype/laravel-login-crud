@extends('master')
@section('content')
<h2 class="my-3">Update the post</h2>
@if($errors->all())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </div>
@endif

@if (session()->has('message'))
  <div class="alert alert-success">
    {{session()->get('message')}}
  </div>
@endif

<form action="{{route('posts.update', $post->id)}}" method="post">
  @csrf
  @method('put')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" value='{{$post->title}}'>
  </div>
  <div class="form-group">
    <label for="description">Content</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-outline-info">update this article</button>
  </div>
</form>
@endsection

