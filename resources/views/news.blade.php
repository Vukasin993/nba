@extends('layouts.app')

@section('title', 'News')

@section('content')



    @foreach ($news as $one)
    <div class="alert alert-primary">
        <a href="{{route('singleNews', ['id' => $one->id])}}"><p>{{$one->title}}</p></a>
        <p>Written by {{$one->user->name}}</p>
        </div>
    @endforeach

    {{ $news->links() }};
@endsection