@extends('layout.app')

@section('content')
    {!! Form::open(['route'=> ['categories.update', $category->id], 'method' => 'put']) !!}

    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title', $category->title) !!}

    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection
