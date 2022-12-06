<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.scss'])
        <title>Laravel</title>
    </head>
    <body>
        <table>
            <thead>
            <tr>
                <th colspan="2">The table header</th>
            </tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Category</th>
            <th>Tags</th>
            <th>Supprimer</th>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->category->title ?? 'jajaj' }}</td>
                    <td><a href="{{ route('posts.edit', $post->id) }}">Modifier</a></td>
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
    </body>
</html>
