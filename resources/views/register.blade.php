@extends('layouts.app')

@section('title', 'Teams')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="alert alert-secondary"> 

<form method="POST" action="/register">
@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email"  name="email" class="form-control" id="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password"  name="password" class="form-control" id="password">
  </div>
  <div class="form-group">
    <label for="confirm_password">Confirm Password</label>
    <input type="password"  name="confirm_password" class="form-control" id="confirm_password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection