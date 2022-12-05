<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>

    <body>
        {!! Form::open(['route' => 'posts.store', 'method' => 'post']) !!}

        {!! Form::label('title', 'Titre') !!}
        {!! Form::text('title') !!}

        {!! Form::label('content', 'Contenu') !!}
        {!! Form::textarea('content') !!}

        {!! Form::submit('Envoyer') !!}
        {!! Form::close() !!}
    </body>
</html>
