<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
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
                    <td><a href="{{ route('categories.edit', $tag->id) }}">Modifier</a></td>
                    <td>
                        {!! Form::open(['route'=> ['categories.destroy', $tag->id], 'method'=> 'delete']) !!}
                        {!! Form::submit('Supprimer') !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ route('tag.create') }}">Nouvelle article</a>
    </body>
</html>
