<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('auth/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{ asset('auth/css/owl.carousel.min.css')}}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('auth/css/bootstrap.min.css')}}">

  <!-- Style -->
  <link rel="stylesheet" href="{{ asset('auth/css/style.css')}}">

  <title>Admin Repository Eric Hermawan</title>
</head>

<body>

  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                <div class="mb-4">
                  <h3>Sign In to <strong>Admin</strong></h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="form-group first">
                    <label for="username">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                  </div>

                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                      name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>


                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                  </div>

                  <input style="background-color: #4fc4cf !important;" type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">

                </form>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


  <script src="{{ asset('auth/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('auth/js/popper.min.js')}}"></script>
  <script src="{{ asset('auth/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('auth/js/main.js')}}"></script>
</body>

</html>