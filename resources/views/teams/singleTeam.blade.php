@extends('layouts.app')

@section('title',$name)

@section('content')
<div>
        <a href="{{route('all')}}"><h1>{{$name}}</h1></a>
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

    <h3> Comments </h3>
    @foreach($comments as $comment)
    <div class="alert alert-primary">
     {{$comment->content}}
    </div>
    @endforeach
    

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

<form method="POST" action="/teams/teams/{{$id}}/comments">
@csrf
  <div class="form-group">
    <label for="content">Comment </label>
    <input type="text"  name="content" class="form-control" id="Comment" placeholder="Enter comment">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection