@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">

    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      <div class="text-center">
      <img class="mb-3 center-block" src="assets/img/logoin.png" alt="" width="72" height="72">
      </div>
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
       @endif
      <form>
    
        <div class="form-floating">
          <input type="email" class="form-control rounded-top" id="floatingInput" placeholder="Email Address">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>

      <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Here!</a></small>
    </main>
    
  </div>
</div>

  
    
@endsection