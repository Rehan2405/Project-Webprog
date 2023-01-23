@extends('template')
@section('body')
<style>
    body {
        background-image: url('/img/editform-background.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-blend-mode: darken;
    }
    .edit {
        background-color: blue;
        height: 100%;
        width: 100%;
    }
</style>
<div class="container vh-100">
    <div class="row justify-content-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('/destination/update/'.$destination->id.'') }}" method="post" enctype="multipart/form-data" class="text-white col-8">
            @csrf
            @method('PUT')
    
            <h1 class="mt-5">Update Destination</h1>
    
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
                <label for="location">Location</label>
                <input type="link" class="form-control" name="location" id="location" value="{{ isset($destination->location) ? $destination->location : '' }}">
            </div>

            <div class="form-group">
                <label for="thumbnail">Image</label>
                <input type="file" class="form-control" name="thumbnail" id="thumbnail">
            </div>
    
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Save</button>
            </div>
        </form>
    </div>   
</div>
@endsection