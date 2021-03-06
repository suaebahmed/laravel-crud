<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <div class="container">

        <ul class="nav justify-content-end">
            @if(session()->get('user_email'))
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">{{ session()->get('user_email') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users/logout">logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link active" href="/users/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users/login">Login</a>
                </li>
            @endif
        </ul>

        <div class="row text-center justify-content-center">
            <div class="col-xs-6">
                <div class="my-4">
                <h2>Wellcome laravel crud product</h2>
                </div>
                <a class="btn btn-outline-primary btn-block" href="{{ route('product.index') }}">Product crud</a>
                <a class="btn btn-outline-primary btn-block" href="/posts">blog Post crud</a>
                <a class="btn btn-outline-primary btn-block" href="/chat">chat app</a>
            </div>
        </div>
    </div>
</body>
</html>