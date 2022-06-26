@extends('dashboard.layouts.header')

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Please</b>Login</a>
    </div>
    <div class="card-body">

      <form action="/login" method="post">
        @csrf

        @error('name')
        <div class="text-warning">
        <span>{{ $message }}</span>
        </div>
        @enderror
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Username" name="name" value="{{ old('name') }}" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        @error('password')
        <div class="text-warning">
        <span>{{ $message }}</span>
        </div>
        @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{ old('password') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
@include('sweetalert::alert')
@extends('dashboard.layouts.footerlogin')