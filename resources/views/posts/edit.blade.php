<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body class="antialiased">
    {!! Form::open(['route'=> ['posts.update', $post->id], 'method' => 'put']) !!}

    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title', $post->title) !!}

    {!! Form::label('content', 'Contenu') !!}
    {!! Form::textarea('content', $post->content) !!}

    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
</body>
</html>
