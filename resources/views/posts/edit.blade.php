@extends('layout.app')

@section('content')
    {!! Form::open(['route'=> ['posts.update', $post->id], 'method' => 'put']) !!}

    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title', $post->title) !!}

    {!! Form::label('content', 'Contenu') !!}
    {!! Form::textarea('content', $post->content) !!}

    {!! Form::label('content', 'Contenu') !!}
    {!! Form::textarea('content', $post->category->title) !!}

    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection
