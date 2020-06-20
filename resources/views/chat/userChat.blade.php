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
        <h1>chat page.</h1>


        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                <label for="msg">chat with {{ $x->username }} </label>
                <textarea type="text" name="msg" value="" id="msg" placeholder="Hello friend..." class="form-control" class="text-muted"></textarea>
                </div>
                <button class="btn btn-primary" id="submit">send</button>
            </div>
        </div>

        
        <div class="row justify-content-between mt-4">
            <div class="col-xs-6">
                <b>receiver messages</b>
                @isset($receiver)
                    <ul>
                        @foreach ($receiver as $msg)
                            <li>{{ $msg->msg }}</li>
                        @endforeach
                    </ul>
                @endisset
            </div>
            <div class="col-xs-6">
                <b>Sender messages</b>
                @if($sender)
                    <ul>
                        @foreach($sender as $msg)
                            <li>{{ $msg->msg }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>

	<script type="text/javascript">
        var user2 = <?php echo json_encode($x->user_id) ?>;
    </script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
</body>
</html>