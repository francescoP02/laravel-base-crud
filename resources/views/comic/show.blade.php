@extends('layout.app')
						
@section('main_content')
<div class="container text-center">
    <h3>Comic's details:</h3>
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

    <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $selected_comic->id]) }}">Modify</a>

    <form action="{{ route('comics.destroy', [ 'comic' => $selected_comic->id ]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onClick="return confirm('Confirm delete');">Delete</button>
    </form>
</div>
@endsection