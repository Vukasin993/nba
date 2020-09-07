<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team</title>
</head>
<body>
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
</body>
</html>