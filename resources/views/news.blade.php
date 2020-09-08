@extends('layouts.app')

@section('title', 'News')

@section('content')

@foreach ($news as $one)
    <div class="alert alert-primary">
        
        <p>{{$one->title}}</p>
        <p>{{$one->content}}</p>
        by 
        <p>{{$one->name}}</p>
    </div>
    @endforeach
@endsection