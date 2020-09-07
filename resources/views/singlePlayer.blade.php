<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Player</title>
</head>
<body>
<div>
        <h1>{{$first_name}}</h1>
        <h1>{{$last_name}}</h1>

        <p>{{$email}}</p>
        <a href="{{route('singleTeam', ['id' => $team->id])}}"><p>{{$team->name}}</p></a>
        <hr />
    </div>
</body>
</html>