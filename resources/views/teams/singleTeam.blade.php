@extends('layouts.app')

@section('title', 'Team')

@section('content')
<div>
        <h1>{{$name}}</h1>
        <p>{{$city}}</p>
        <p>{{$address}}</p>


        <h3> Players </h3>
        <ul>
        @foreach($players as $player)
            <a href="{{route('singlePlayer', ['id' => $player->id])}}"><li>
                {{$player->first_name}} {{$player->last_name}}
            </li>
            </a>
            @endforeach
        </ul>
        <hr />
    </div>
    @endsection