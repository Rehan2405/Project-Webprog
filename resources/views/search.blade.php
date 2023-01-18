@extends ('template')
@section('content', 'search')

@section('body')
    <style>
        body {
            /* background-image: url('https://wallpaperaccess.com/full/1124103.jpg'); */
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: darken;

        }
    </style>

    <body>
        <div class="container">
            <div class="text-black">
                <h1>Search Post</h1>
                <div class="input-group rounded mt-4">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    </span>
                </div>
            </div>
            <div class="row mt-3">
                @foreach ($destinations as $dest)
                    <div class="col-4 mb-4 order-1 mt-3">
                        <div class="card">
                            <img src="{{ url('/Images/' . $dest->image) }}"
                                style="object-fit: :cover; width:100%; height:180px" class="card-img-top" alt="image">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ Str::limit($dest->title, 30) }}</strong></h5>
                                <i class="card-text w-full bi bi-geo-alt">{{ Str::limit($dest->desc, 120) }}</i><br>
                                <a href="{{ url('detail/' . $dest->id) }}" class="btn btn-outline-info mt-3"> More
                                    Detail</a>
                            </div>

                        </div>
                    </div>
                @endforeach
        </div>


    </body>

@endsection
