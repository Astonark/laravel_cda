@extends('layout.app')

@section('content')
    <table class="crud-table">
        <thead class="crud-table__header">
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Modifier</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody class="crud-table__body">
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}">Modifier</a>
                    </td>
                    <td>
                        {!! Form::open(['route'=> ['categories.destroy', $category->id], 'method'=> 'delete']) !!}
                        {!! Form::submit('Supprimer') !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('categories.create') }}">Nouvelle article</a>
@endsection
