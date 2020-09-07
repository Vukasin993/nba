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

<form method="POST" action="/login">
@csrf
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email"  name="email" class="form-control" id="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password"  name="password" class="form-control" id="password">
  </div>
  @if($loginFailed ?? '')
            <div class="alert alert-danger">Email or password are incorrect</div>
        @endif

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection