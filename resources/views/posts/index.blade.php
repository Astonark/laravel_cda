@extends('layout.app')

@section('content')
    <table class="crud-table">
        <thead class="crud-table__header">
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Category</th>
                <th>Tags</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody class="crud-table__body">
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    </td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->category->title ?? 'jajaj' }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}">Modifier</a>
                    </td>
                    <td>
                        {!! Form::open(['route'=> ['posts.destroy', $post->id], 'method'=> 'delete']) !!}
                        {!! Form::submit('Supprimer') !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('posts.create') }}">Nouvelle article</a>
@endsection
