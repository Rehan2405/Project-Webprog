@extends ('template')
@section('content', 'login')

@section('body')
<img src="https://wallpaperaccess.com/full/1124103.jpg" style="height:100vh; width:2000px" alt="">
    <div class="d-flex align-items-center justify-content-center p-2">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="text-white">
                <div class="row justify-content-center">
                        <div class="card" style="background-color: rgba(255, 160, 122, 1)">
                            <div class="card-header text-center" style="font-size: 30px; font-weight: bold">Login to Edit your Blog!</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label">Email</label>

                                        <div class="row-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label">Password</label>

                                        <div class="row-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="5-20 characters">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid mb-4 mt-3">
                                        <button type="submit" class="btn btn-danger block">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
