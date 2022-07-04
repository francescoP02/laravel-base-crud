@extends('layout.app')
						
@section('main_content')
<div class="container text-center">
    <h3>Dettagli del fumetto</h3>
    <ul>
        <li>
            <h3>{{ $selected_comic->title }}</h3>
            <p>{{ $selected_comic->description }}</p>
            <p>Serie: {{ $selected_comic->series }}</p>
            <p>Tipologia: {{ $selected_comic->type }}</p>
            <img src="{{ $selected_comic->thumb }}" alt="{{ $selected_comic->series }}">
            <p>Prezzo: {{ $selected_comic->price }} €</p>
            <p>Disponibile dal: {{ $selected_comic->sale_date }}</p>
        </li>
    </ul>

    <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $selected_comic->id]) }}">Modifica</a>
</div>
@endsection