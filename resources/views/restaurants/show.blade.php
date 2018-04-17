@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
  <div id="app">
    <h2>
      {{ $restaurant->name }}      
    </h2>
    <div class="card">
      <img class="card-img-top" alt="店舗画像" src="{{ asset('storage/' . $restaurant->picture_filename) }}"/>
      <div class="card-body">
        <h4 class="card-title"></h4>
        <p class="card-text">
          {{ $restaurant->address }}
        </p>
      </div>
    </div>
    <div>
      <a href="/restaurants">
        <button class="btn btn-info">戻る</button>
      </a>
    </div>
  </div>
@endsection
