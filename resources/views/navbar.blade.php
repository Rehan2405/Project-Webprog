@section('navbar')
    <!doctype html>
    <html lang="en">

    <head>
        <title>@yield('navbar')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <title>Bootstrap Example</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        a.nav-link {
            color: white;
            margin: 1rem;
        }
    </style>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <nav class="navbar">
                <div class="container w-50 ml-5">
                    <img src="{{ asset('images/Logo.png') }}" alt="" style="height:45px; width:70px">
                </div>
            </nav>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav h5">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/favourite">Favorite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/search">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-end mr-4">
                <li class="nav h5">
                    <a class="btn btn-outline-secondary" href="{{ route('loginpage') }}">Login</a>
                </li>

                @auth
                    @if (!is_null(Auth::user()->is_admin))
                        <li class="nav h5 ml-3">
                            <form action="{{ route('logout') }}" method="POST" class="btn btn-outline-danger">
                                @csrf
                                <button class="dropdown-item">Log Out</button>
                            </form>
                        </li>
                    @endif
                @endauth
            </div>
        </nav>
        </ul>
    </body>

    </html>
