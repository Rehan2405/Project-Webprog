@extends ('template')
@section ('content','home')

@section('body')
<style>
  body {
  background-image: url('https://wallpaperaccess.com/full/1124103.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-blend-mode: darken;
  
}
.text{
  margin-left: 7em;
  margin-top: 10em;
  margin-right: 60em;
}
</style>
<body>
  <!-- Hero Area -->
  <div class="hero-area">
    <div class="text">
      <div class="text-white">
        <h1>Hello Welcome To Our Journey!</h1>
        <h5>Here you can see our journey and use it as your references to start traveling the world.</h5>
        <div class="input-group rounded">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          </span>
        </div>
      </div>
        
    </div>
    
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="container">
  <div class="text-white">
    <h1>Latest Post</h1>
    </div>
    <<div class="row">
            @foreach ($destinations as $dest)
            <div class="col-4 mb-4 order-1 mt-3">
              <div class="card">
              <img src="{{ url('/Images/' . $dest->image) }}" style="object-fit: :cover; width:100%; height:180px"  class="card-img-top" alt="image">
                  <div class="card-body">
                      <h5 class="card-title"><strong>{{ Str::limit($dest->title, 30) }}</strong></h5>
                      <i class="card-text w-full bi bi-geo-alt">{{ Str::limit($dest->desc, 120)}}</i><br>
                      <a href="{{url('detail/'. $dest->id)}}" class="btn btn-outline-info"> More Detail</a>
                  </div>
                  
              </div>
            </div>
            @endforeach
  </div>
    
        
</body>

@endsection 