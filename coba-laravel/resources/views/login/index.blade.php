@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">FORM LOGIN</h1>
            <form>
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              {{-- <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div> --}}

              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
              <p class="mt-3 mb-3 fs-100 text-muted text-center">Copyright&copy; Faisal.MVC</p>
            </form>
          </main>
    </div>
</div>

@endsection
