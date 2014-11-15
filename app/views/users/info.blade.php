@extends('layouts.default')
@section('title', 'Profile Info | Larablade')
@section('content')

@include('includes.messages')
<h1>Profile Info</h1>
<hr />
<div class="col-md-8 well">
<ul>
<li>First Name: {{ $data->first_name }}</li>
<li>Last Name: {{ $data->last_name }}</li>
<li>Email: {{ $data->email }}</li>
<li>Created At: {{ $data->created_at }}  </li>
<li>Updated At: {{ $data->updated_at }}  </li>
</ul>
<p>
{{ link_to('/logout', 'Click here to logout') }}
</p>
</div>
<div class="col-md-4">
@include('includes.sidebar')
</div>

@stop