@extends('layout.app')

@section('main_content')

<div class="container text-center">

    <h3>Lista dei fumetti:</h3>
    <ul>
    @foreach ($comics_list as $comic)
        <li>
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}"> <h4> {{ $comic->title }} </h4> </a>
            <p> {{$comic->description}}</p>
            <p>Serie: {{ $comic->series }}</p>
            <p>Tipologia: {{ $comic->type }}</p>
            <p>Prezzo: {{$comic->price}} €</p>
            <img src="{{$comic->thumb}}" alt="{{ $comic->series }}">
        </li>
    @endforeach
    </ul>

</div>

    
@endsection
