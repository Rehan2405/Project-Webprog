@extends ('template')

@section('body')

<div class=" mt-5 justify-content-center text-center w-100 m-auto">
    <div class="card-header bg-transparent">
        <h3 class="fw-normal text-white mt-2 text-align-center"><h1>Insert Destination</h1></h3>
    </div>
    <div class="card-body">
        <main class="form-product w-75 m-auto">
            <form action="/insert" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="floatingInput" placeholder="Name">
                    <label for="exampleFormControlTextarea1" class="form-label float-start">Title</label>
                    @error('title')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
               
                <div class="form-floating">
                    <input type="text" name="Todolist" class="form-control @error('Todolist') is-invalid @enderror" id="floatingInput" placeholder="Name">
                    <label for="exampleFormControlTextarea1" class="form-label float-start">To Do List</label>
                    @error('todolist')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label float-start">Description</label>
                    <textarea class="form-control @error('Description') is-invalid @enderror" name="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('Description')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3 text-white">
                    <span class="input-group-text" id="price">LINK</span>
                    <input type="link" name="price" class="form-control"  aria-describedby="price">
                    @error('link')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="input-group">
                    <input type="file" name="photo_url" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    @error('photo_url')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-secondary" type="submit">Insert Destination</button>
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
