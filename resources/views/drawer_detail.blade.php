@extends('layouts.base') 

@section('title', 'Dessinateur ' . $drawer->name)

@section('content')
    <div>
        <h1>{{$drawer->name}}</h1>
        <p>Né en {{ $drawer->birthyear }}</p>
        <p>Nationalité : {{ $drawer->nationality }}</p>
        <table>
            <tr>
                <td>
                    <form action="/dessinateurs/{{ $drawer->id }}/modifier" method="get">
                    <button type="submit">Modifier</button>
                    </form>
                </td>
                <td>
                    <form action="/dessinateurs/{{ $drawer->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <h2>A dessiné :</h2>
        <table>
        <tr>
                <th>Nom</th>
                <th>Apparaît dans</th>
                <th>Créé en</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            @foreach($drawer->characters as $character)
                <tr>
                    <td><a href="/personnages/{{ $character->id }}">{{ $character->name }}</a></td>
                    <td>{{ $character->comic }}</td>
                    <td>{{ $character->creation }}</td>
                    <td>
                        <form action="/personnages/{{ $character->id }}/modifier" method="get">
                        <button type="submit">Modifier</button>
                        </form>
                    </td>
                    <td>
                        <form action="/personnages/{{ $character->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection