@extends('layouts.base') 

@section('title', 'Liste des personnages')
    
@section('content')
    <h1>Liste des personnages de bandes dessinées</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        <br>
    @endif
    <div>
        <table>
            <tr>
                <th>Nom</th>
                <th>Dessinateur</th>
                <th>Apparaît dans</th>
                <th>Créé en</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            @foreach($characters as $character)
                <tr>
                    <td><a href="/personnages/{{ $character->id }}">{{ $character->name }}</a></td>
                    <td><a href="/dessinateurs/{{ $character->drawer->id }}">{{ $character->drawer->name }}</a></td>
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