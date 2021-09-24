@extends('layouts.base') 

@section('title', 'Modifier ' . $drawer->name)

@section('content')
    <h2>C'est ici pour modifier {{ $drawer->name }}</h2>
    <form action="/dessinateurs/{{ $drawer->id }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nom :</label>
            <input value="{{ $drawer->name }}" name="name" type="text">
        </div>
        <br>
        <div>
            <label for="nationality">Nationalité :</label>
            <input value="{{ $drawer->nationality }}" name="nationality" type="text">
        </div>
        <br>
        <div>
            <label for="birthyear">Date de naissance :</label>
            <select name="birthyear">
                @for ($i = date('Y'); $i >= 1900; $i--)
                    @if ($i === $drawer->birthyear)
                        <option value="{{ $i }}" selected>{{ $i }}</option>
                    @else
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endif
                @endfor
            </select>
        </div>
        <br>
        <button type="submit">Validation</button>
    </form>
@endsection