@extends('layouts.base') 

@section('title', 'Personnage ' . $character->name)

@section('content')
    <div>
        <h1>{{$character->name}}</h1>
        <h3>Déssiné par<a href="/dessinateurs/{{ $character->drawer->id }}">{{ $character->drawer->name }}</a></h3>
        <p>Créé en {{ $character->creation }}</p>
        <p>Apparaît dans {{ $character->comic }}</p>
        <table>
            <tr>
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
        </table>
    </div>
@endsection