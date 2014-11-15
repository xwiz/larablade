@extends('layouts.default')
@section('title', 'Login | Larablade')
@section('content')

@include('includes.messages')
<h1>Login to Larablade</h1>
<hr />
<div class="col-md-8">

<form class="form-horizontal" action="authenticate" method="POST">
  <fieldset>
    <legend>User Login</legend>
    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="password" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember"> Remember me
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </fieldset>
  <p>
  {{ link_to('/register', 'New To Larablade? Register here.') }}
  </p>
</form>

</div>
<div class="col-md-4">
@include('includes.sidebar')
</div>

@stop
