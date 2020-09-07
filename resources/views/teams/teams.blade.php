@extends('layouts.app')

@section('title', 'Teams')

@section('content')
<a href="/register">Register</a>
@foreach ($teams as $team)
    <div class="alert alert-primary">
        <a href="{{route('singleTeam', ['id' => $team->id])}}">{{$team->name}}</a>
        <p>{{$team->address}}</p>
        <p>{{$team->city}}</p>
    </div>
    @endforeach
@endsection