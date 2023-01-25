@extends('template')

@section('body')
    <div class=" mt-2 justify-content-center text-center w-100 m-auto">
        <div class="card-header bg-transparent">
            <h3 class="fw-normal text-white mt-2 text-align-center">Insert Destination</h3>
        </div>
        <div class="card-body">
            <main class="form-product d-flex justify-content-center">
                <form action="/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                            id="floatingInput" placeholder="title">
                        <label for="floatingInput text-white">Destination Title</label>
                        @error('title')
                            <div class="invalid-feedback text-start mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="todolist">To do list</label>
                        <input type="text" class="form-control" name="todolist" id="todolist" value="{{ isset($todolist->list) ? $todolist->list : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1"
                            class="form-label float-start text-white">Description</label>
                        <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                        @error('desc')
                            <div class="invalid-feedback text-start mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="video" class="form-control @error('video') is-invalid @enderror"
                            id="floatingInput" placeholder="video">
                        <label for="floatingInput text-white">Video</label>
                        @error('video')
                            <div class="invalid-feedback text-start mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="location" class="form-control @error('location') is-invalid @enderror"
                            id="floatingInput" placeholder="location">
                        <label for="floatingInput text-white">Location</label>
                        @error('location')
                            <div class="invalid-feedback text-start mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <label for="image" class="form-label float-start text-white">Image Destination</label>
                    <div class="input-group">
                        <input type="file" name="image" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        @error('image')
                            <div class="invalid-feedback text-start mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Add Destination</button>
                </form>
        </div>
        </main>
    </div>
    </div>
@endsection



<style>
    .form-product input {
        margin-bottom: 10px;
    }

    body {
        background-image: url('https://thumbs.dreamstime.com/b/world-landmarks-photo-collage-vintage-tes-sepia-textured-background-travel-tourism-study-around-world-concept-vintag-94756410.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }
</style>
