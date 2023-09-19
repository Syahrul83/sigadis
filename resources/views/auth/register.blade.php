<x-app-layout>
    <x-slot name="header">
        <h5 class="m-0">{{ __('Home') }}</h5>
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Home Page</li>
    </x-slot>

    <div class="container-fluid">
    <div class="login-box">
        <div class="card card-outline card-primary">

          <div class="card-body">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-3" :errors="$errors" />

            <p class="login-box-msg"><h5> Daftar User Baru </h5></p>

            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="input-group mb-3">
                <input type="text" class="form-control" name="name" placeholder="Name" :value="old('name')" required autofocus />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>

              <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" :value="old('email')" required />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Level</label>
                </div>
                <select name="level" class="custom-select" id="inputGroupSelect01" required>
                  <option value="">pilih...</option>
                  <option value="0">User</option>
                  <option value="1">Admin</option>
                  <option value="2">Manager</option>

                </select>
              </div>




              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="new-password" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>

              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="password_confirmation" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                  <br>
                </div>
                <div class="col-12">
                <a href="{{ URL::previous() }}" type="submit" class="btn btn-warning btn-block">back</a>
            </div>
              </div>
            </form>


          </div>
          <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</div>
<!-- /.container-fluid -->
<br><br>

</x-app-layout>
