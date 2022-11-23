@extends('layout.app')
@section('content')
<div class="container"  style="width:500px;">
    
    <h2 class="text-center">REGISTER</h2>
    <form action="{{route('registeruser')}}" method="post">
        @csrf
        <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
    @error('name')
    <div class="invalid-feedback">
    username is required
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
    <div class="invalid-feedback">
        email is required
      </div>
    @enderror
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label ">Password</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
    @error('password')
    <div class="invalid-feedback">
        password is required
      </div>
    @enderror
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="form-control btn btn-primary">Submit</button>
  </div>
</form>
@endsection
