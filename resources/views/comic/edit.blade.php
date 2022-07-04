@extends('layout.app')

@section('main_content')

<div class="container">
    <form action="{{ route('comics.update', ['comic' => $comic_to_update->id]) }}" method="post">
        @csrf

        @method('PUT')

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="row mb-3">

            <h4 class="text-center my-3">
                Modify Comic
            </h4>
          <label for="title" class="col-sm-2 col-form-label">Titolo:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="title" value="{{ old('title') ? old('title') : $comic_to_update->title }}">
          </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Descrizione:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="description" value="{{ old('description') ? old('description') : $comic_to_update->description }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="thumb" class="col-sm-2 col-form-label">Immagine:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="thumb" value="{{ old('thumb') ? old('thumb') : $comic_to_update->thumb }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="price" class="col-sm-2 col-form-label">Prezzo:</label>
            <div class="col-sm-10">
              <input type="decimal" class="form-control" name="price" value="{{ old('price') ? old('price') : $comic_to_update->price }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="series" class="col-sm-2 col-form-label">Serie:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="series" value="{{ old('series') ? old('series') : $comic_to_update->series }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="sale_date" class="col-sm-2 col-form-label">Disponibilità dal:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="sale_date" value="{{ old('sale_date') ? old('sale_date') : $comic_to_update->sale_date }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="type" class="col-sm-2 col-form-label">Tipo:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="type" value="{{ old('type') ? old('type') : $comic_to_update->type }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
</div>

@endsection