@extends('layout.app')

@section('content')
    {!! Form::open(['route' => 'categories.store', 'method' => 'post']) !!}

    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title') !!}

    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection
