<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <h4>Register page.</h4>

                <form action="/users/register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="name">
                      </div>
  
                    <div class="form-group">
                      <label for="email">Email: </label>
                      <input type="text" name="email" id="email" class="form-control" placeholder="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="password">
                    </div>
                    <button class="btn btn-primary" type="submit">register</button>
                </form>

            </div>
        </div>
    </div>

</body>
</html>