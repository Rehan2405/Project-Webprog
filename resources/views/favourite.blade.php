@extends('template')

@section('body')
<style>
    body {
        background-image: url('/img/Background-Favorite.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-blend-mode: darken;
    }

</style>
<div class="favorite-container vh-100">
    <div id="favorite" class="container justify-content-center d-flex flex-column mt-5">
        <h1 class="text-white">Favorite destinations</h1>
        <div class="row">
            @foreach ($destinations as $dest)
                <div class="col-4 mb-4 order-1 mt-3">
                    <div class="card">
                        <img src="{{ url('/Images/' . $dest->image) }}"
                            style="object-fit: cover; width:100%; height:180px" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ Str::limit($dest->title, 30) }}</strong></h5>
                            <i class="card-text w-full bi bi-geo-alt">{{ Str::limit($dest->desc, 120) }}</i><br>
                            <a href="{{ url('detail/' . $dest->id) }}" class="btn btn-outline-info mt-3"> More Detail</a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection