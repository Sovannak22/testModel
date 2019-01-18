<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {!! Form::open(['url' => 'foo/bar', 'method' => 'POST']) !!}

        {!! Form::label(['email', 'E-Mail Address','class'=>'form-label']) !!}
        {!! Form::text(['email', 'example@gmail.com','class'=>'form-control']) !!}

    {!! Form::close() !!}
</body>
</html>