@extends('layouts.app')

@section('title', 'Team')

@section('content')
<div>
        <h1>{{$first_name}}</h1>
        <h1>{{$last_name}}</h1>

        <p>{{$email}}</p>
        <a href="{{route('singleTeam', ['id' => $team->id])}}"><p>{{$team->name}}</p></a>
        <hr />
    </div>
@endsection