@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="alert alert-success">
    <h1>{{$title}}</h1>
    <p>{{$content}}</p>
</div>

@endsection
