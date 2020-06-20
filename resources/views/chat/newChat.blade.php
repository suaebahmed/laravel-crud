<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index chat page</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <h1>all users.</h1>
        @if (session('login_success'))
            <div class="alert alert-success">
                {{ session('login_success') }}
            </div>
        @endif
        <ul>
            @if ($users)
                @foreach ($users as $user)
                    <li><a href="/chat/selected?user2={{ $user->user_id }}">{{ $user->username }}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
</body>
</html>