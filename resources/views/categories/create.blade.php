@extends('layout.app')

@section('content')
    {!! Form::open(['route' => 'categories.store', 'method' => 'post', 'class' => 'crud-form']) !!}

    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title') !!}

    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection
