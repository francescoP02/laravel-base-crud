@extends('layout.app')

@section('main_content')

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="container">
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div class="row mb-3">
          <label for="title" class="col-sm-2 col-form-label">Titolo:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
          </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Descrizione:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="description" value="{{ old('description') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="thumb" class="col-sm-2 col-form-label">Immagine:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="thumb" value="{{ old('thumb') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="price" class="col-sm-2 col-form-label">Prezzo:</label>
            <div class="col-sm-10">
              <input type="decimal" class="form-control" name="price" value="{{ old('price') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="series" class="col-sm-2 col-form-label">Serie:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="series" value="{{ old('series') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="sale_date" class="col-sm-2 col-form-label">Disponibilità dal:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="sale_date" value="{{ old('sale_date') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="type" class="col-sm-2 col-form-label">Tipo:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="type" value="{{ old('type') }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
</div>

@endsection