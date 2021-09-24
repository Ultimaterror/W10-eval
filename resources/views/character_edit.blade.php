@extends('layouts.base') 

@section('title', 'Modifier ' . $character->name)

@section('content')
    <h2>C'est ici pour modifier {{ $character->name }}</h2>
    <form action="/personnages/{{ $character->id }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nom :</label>
            <input value="{{ $character->name }}" name="name" type="text">
        </div>
        <br>
        <div>
            <label for="drawer">Dessinateur :</label>
            <select name="drawer_id">
                @foreach ($drawers as $drawer)
                    @if ($drawer->id === $character->drawer->id)
                        <option value="{{ $drawer->id }}" selected>{{ $drawer->name }}</option>
                    @else
                        <option value="{{ $drawer->id }}">{{ $drawer->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <label for="comic">Apparaît dans :</label>
            <input value="{{ $character->comic }}" name="comic" type="text">
        </div>
        <br>
        <div>
            <label for="creation">Date de création :</label>
            <select name="creation">
                @for ($i = date('Y'); $i >= 1900; $i--)
                @if ($i === $character->creation)
                        <option value="{{ $i }}" selected>{{ $i }}</option>
                    @else
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endif
                @endfor
            </select>
        </div>
        <br>
        <!-- Détail si j'ai le temps -->
        <button type="submit">Validation</button>
    </form>
@endsection