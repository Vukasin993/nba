<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <h2>Welcome {{$user->name}},  to NBA</h2>
    <p>You are just one step away of enjoying our nba website.</p>
    <p>Please click the link below to verify your account:
    <a href="{{url('/account-verification/' . $user->id)}}">Verifiy account</a>
    </p>
</body>
</html>