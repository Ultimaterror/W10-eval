@extends('layouts.base') 

@section('title', 'Ajouter un dessinateur')

@section('content')
    <h2>C'est ici pour ajouter un dessinateur</h2>
    <form action="/dessinateurs" method="post">
        @csrf
        <div>
            <label for="name">Nom :</label>
            <input name="name" type="text">
        </div>
        <br>
        <div>
            <label for="nationality">Nationalité :</label>
            <input name="nationality" type="text">
        </div>
        <br>
        <div>
            <label for="birthyear">Date de naissance :</label>
            <select name="birthyear">
                @for ($i = date('Y'); $i >= 1800; $i--)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <br>
        <button type="submit">Validation</button>
    </form>
@endsection