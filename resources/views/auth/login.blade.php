<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PLN TARAKAN</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/login/assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="/login/assets/images/login.jpg"  alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="/login/assets/images/pln1.png"  alt="logo" class="logo">
              </div>
              <p class="login-card-description"><b class="text-uppercase">Aplikasi Si-gadis</b></p>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" :value="old('email')" required autofocus>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </span>
                @endif
                </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********" required autocomplete="current-password">

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                    </span>
                @endif
                </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" >
                </form>
				 <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" name="remember" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>
               <br>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Devlope Abiseka Cahaya Utama</a>
                </nav>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
