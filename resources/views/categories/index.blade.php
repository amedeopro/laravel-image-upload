@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    @foreach ($categories as $category)
      <div class="col-6">
        <img src="{{ asset('storage/'.$category->image) }}" alt="">
        <p>{{ $category->title}}</p>
        <p>{{ $category->slug}}</p>

      </div>
    @endforeach
  </div>
</div>
@endsection
