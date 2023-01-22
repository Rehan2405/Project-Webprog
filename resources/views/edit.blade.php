@extends('template')
@section('body')
<style>
    .edit {
        background-color: blue;
        height: 100%;
        width: 100%;
    }
</style>
<div class="container">   
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('/destination/update/'.$destination->id.'') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h1>Update Destination</h1>

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title" value="{{ isset($destination->title) ? $destination->title : ''}}">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" name="description" id="description" value="{{ isset($destination->desc) ? $destination->desc : ''}}">
        </div>

        <div class="form-group">
            <label for="todolist">To do list</label>
            <input type="text" class="form-control" name="todolist" id="todolist" value="{{ isset($todolist->list) ? $todolist->list : '' }}">
        </div>

        <div class="form-group">
          <label for="youtubelink">Youtube link</label>
          <input type="text" class="form-control" name="youtubelink" id="youtubelink" value="{{ isset($destination->video) ? $destination->video : '' }}">
        </div>

        <div class="form-group">
            <label for="thumbnail">Youtube link</label>
            <input type="file" class="form-control" name="thumbnail" id="thumbnail">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Save</button>
        </div>
    </form>
</div>
@endsection