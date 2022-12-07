@extends('layout.app')

@section('content')
    <table>
        <thead>
            <tr>
                <th colspan="2">The table header</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->title }}</td>
                <td><a href="{{ route('tags.edit', $tag->id) }}">Modifier</a></td>
                <td>
                    {!! Form::open(['route'=> ['tags.destroy', $tag->id], 'method'=> 'delete']) !!}
                    {!! Form::submit('Supprimer') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('tags.create') }}">Nouvelle article</a>
@endsection
