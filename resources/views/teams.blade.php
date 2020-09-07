<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams</title>
</head>
<body>
@foreach ($teams as $team)
    <div class="alert alert-primary">
        <a href="{{route('singleTeam', ['id' => $team->id])}}">{{$team->name}}</a>
        <p>{{$team->address}}</p>
        <p>{{$team->city}}</p>
    </div>
    @endforeach
</body>
</html>