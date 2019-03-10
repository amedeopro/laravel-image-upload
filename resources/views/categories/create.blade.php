@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <form class="form-group" action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('POST')

          <div class="form-group">
            <label for="title">Nome della categoria</label>
            <input class="form-control" type="text" name="title" placeholder="inserisci il nome della categoria">
          </div>
          <div class="form-group">
            <label for="image">Inserisci Immagine</label>
            <input type="file" name="image" placeholder="scegli immagine">
          </div>
          <div class="form-group">

            <input class="form-control" type="submit" value="Inserisci nuova categoria">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
