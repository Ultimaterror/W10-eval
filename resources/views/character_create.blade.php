@extends('layouts.base') 

@section('title', 'Ajouter un personnage')

@section('content')
    <h2>C'est ici pour ajouter un personnage</h2>
    <form action="/personnages" method="post">
        @csrf
        <div>
            <label for="name">Nom :</label>
            <input name="name" type="text">
        </div>
        <br>
        <div>
            <label for="drawer">Dessinateur :</label>
            <select name="drawer_id">
                @foreach ($drawers as $drawer)
                    <option value="{{ $drawer->id }}">{{ $drawer->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <label for="comic">Apparaît dans :</label>
            <input name="comic" type="text">
        </div>
        <br>
        <div>
            <label for="creation">Date de création :</label>
            <select name="creation">
                @for ($i = date('Y'); $i >= 1900; $i--)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <br>
        <!-- Détail si j'ai le temps -->
        <button type="submit">Validation</button>
    </form>
@endsection