@extends('layouts.base') 

@section('title', 'Liste des dessinateurs')
    
@section('content')
    <h1>Liste des dessinateurs</h1>
    @if (session('status'))
        <div class="alert alert-success border">
            {{ session('status') }}
        </div>
        <br>
    @endif
    <div>
        <table>
            <tr>
                <th>Nom</th>
                <th>Nationalité</th>
                <th>Né en</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            @foreach($drawers as $drawer)
                <tr>
                    <td><a href="/dessinateurs/{{ $drawer->id }}">{{ $drawer->name }}</a></td>
                    <td>{{ $drawer->nationality }}</td>
                    <td>{{ $drawer->birthyear }}</td>
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
            @endforeach
        </table>
    </div>
@endsection