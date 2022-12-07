@extends('layout.app')

@section('content')
    {!! Form::open(['route'=> ['tags.update', $tag->id], 'method' => 'put']) !!}

    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title', $tag->title) !!}

    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection
