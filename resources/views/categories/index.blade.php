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
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td><a href="{{ route('categories.edit', $category->id) }}">Modifier</a></td>
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
    </body>
</html>
