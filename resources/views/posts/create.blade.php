@extends('layout.app')

@section('content')
    {!! Form::open(['route' => 'posts.store', 'method' => 'post', 'class' => 'crud-form']) !!}

    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title') !!}

    {!! Form::label('content', 'Contenu') !!}
    {!! Form::textarea('content') !!}

    {!! Form::label('category', 'la category') !!}
    {!! Form::select('category_id', $categories) !!}

    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection
