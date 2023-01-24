@extends('template')

@section('body')

<div class=" mt-2 justify-content-center text-center w-100 m-auto">
    <div class="card-header bg-transparent">
        <h3 class="fw-normal text-white mt-2 text-align-center">Insert Destination</h3>
    </div>
    <div class="card-body">
        <main class="form-product w-75 m-auto">
            <form action="/insert" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Name">
                    <label for="floatingInput text-white">Destination Name</label>
                    @error('name')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="todolist" class="form-control @error('todolist') is-invalid @enderror" id="floatingInput" placeholder="todolist">
                    <label for="floatingInput text-white">To Do List</label>
                    @error('todolist')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label float-start text-white">Description</label>
                    <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('desc')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" id="floatingInput" placeholder="location">
                    <label for="floatingInput text-white">Link</label>
                    @error('location')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="image" class="form-label float-start text-white">Image Destination</label>
                <div class="input-group">
                    <input type="file" name="image" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    @error('image')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Add Destination</button>
            </form>
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
