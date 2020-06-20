<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index chat page</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="/assets/css/bootstrap.min.css"> --}}
</head>
<body>
    <div class="container">
        <h1>well come my chat app.</h1>
        <button class="btn btn-secondary">connect successfull</button>

        <div class="row">
            <div class="col-xs-12 col-md-6">

                <form action="/chat/enter" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="username">Username: </label>
                      <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" class="text-muted" />
                    </div>
                    <button class="btn btn-primary" type="submit">enter</button>
                </form>

            </div>
        </div>

    </div>
</body>
</html>