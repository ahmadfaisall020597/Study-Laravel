@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">FORM REGISTRATION</h1>
            <form action="/register" method="post">
                @csrf
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                <label for="name">Name</label>
              </div>

              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                <label for="username">Username</label>
              </div>

              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>

              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>

              {{-- <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div> --}}

              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
              <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
              <p class="mt-3 mb-3 fs-100 text-muted text-center">Copyright&copy; Faisal.MVC</p>
            </form>
          </main>
    </div>
</div>

@endsection
