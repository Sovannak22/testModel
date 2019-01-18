<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{asset('css/app.css')}}>
</head>
<body>
    {!! Form::open(['action' => 'booksController@store', 'method' => 'POST']) !!}
    
        <div class="form-group">
        {{-- TITLE --}}
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title') !!}
        </div>
        {{-- AUTHOR --}}
        <div class="form-group">
        {!! Form::label('author', 'author') !!}
        {!! Form::text('author') !!}
        </div>
        {{-- DESCRIPTION --}}
        <div class="form-group">
        {!! Form::label('description', 'Title') !!}
        {!! Form::textarea('description') !!}
        </div>
        {{-- SUBMIT BUTTON --}}
        {!! Form::submit('Click Me!') !!}
    {!! Form::close() !!}
    {{-- hello --}}
</body>
</html>