@extends('layout.app')

@section('main_content')

<div class="container">

    <h3>Lista dei fumetti:</h3>
    <ul>
    @foreach ($comics_list as $comic)
        <li>
            <h4> {{ $comic->title }} </h4>
            <p> {{$comic->description}}</p>
            <p>{{ $comic->series }}</p>
            <p>{{ $comic->type }}</p>
            <span>{{$comic->price}}</span>
            <img src="{{$comic->thumb}}" alt="">
        </li>
    @endforeach
    </ul>

</div>

    
@endsection
