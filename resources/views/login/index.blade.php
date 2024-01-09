@extends('layouts.main')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Login Admin</h1>
                <nav aria-label="breadcrumb">
                    
                </nav>
            </div>
        </div>
    </div>
  </div>
  <!-- Header End -->


<div class="row justify-content-center mt-5 mb-5 pb-5">
  <div class="col-lg-4">


    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show "  role="alert">
      {{ session('success') }}
    </div>
    @endif
    
    

    @if(session()->has('loginError'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
      {{ session('loginError') }}
    </div>
    @endif

    <main class="form-signin w-100 m-auto">
      <form action="{{ route('postlogin') }}" method="post">  
        {{ csrf_field() }}
        {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
        
    
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror" id="email" placeholder="name@example.com">
          <label for="email" autofocus required value="{{ old('email') }}">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
     
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  
      </form>

      {{-- <small class="d-block text-center mt-3">
        Not Registered? <a href="/register">Register Now !</a>
      </small> --}}

    </main>
      
 
  </div>
</div>

@endsection