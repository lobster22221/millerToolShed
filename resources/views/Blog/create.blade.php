@extends('app')


@section('content')

<h1>Create a post</h1>

<form>
  <div class="form-group">
    <label for="postTitle">Title</label>
    <input type="text" class="form-control" id="postTitleInput" placeholder="">
  </div>
  <div class="form-group">
    <label for="textBody">Content</label>
    <textarea class="form-control" id="postBodyInput" placeholder=""></textarea>
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection