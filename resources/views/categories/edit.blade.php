@extends('layout.app')

@section('content')
    {!! Form::open(['route'=> ['categories.update', $category->id], 'class' => 'crud-form', 'method' => 'put']) !!}

    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title', $category->title, ['class' => 'crud-form__label']) !!}

    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection
