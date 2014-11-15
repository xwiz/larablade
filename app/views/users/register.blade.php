@extends('layouts.default')
@section('title', 'Register | Larablade')
@section('content')

@include('includes.messages')
<h1>Register</h1>
<hr />
<div class="col-md-8">

<form class="form-horizontal" action="register" method="POST">
  <fieldset>
    <legend>User Login</legend>
    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
    <div class="col-md-6">
      <label for="password" class="col-lg-4 control-label">Password</label>
      <div class="col-lg-8">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
    </div>
    <div class="col-md-6">
      <label for="re-password" class="col-lg-4 control-label">Again</label>
      <div class="col-lg-8">
        <input type="password" class="form-control" id="re-password" name="re-password" placeholder="Re-enter password">
      </div>
    </div>      
    </div>
    <div class="form-group">
      <label for="first_name" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
      </div>
    </div>
    <div class="form-group">
      <label for="last_name" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-8 col-lg-offset-4">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </div>
  </fieldset>
  <p>
  {{ link_to('/login', 'Already registered? Login here.') }}
  </p>
</form>

</div>
<div class="col-md-4">
@include('includes.sidebar')
</div>

@stop