@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
  <p>ここはメインのサイドバーに追加される</p>
@endsection

@section('content')
  <div id="app">
    <h2>
      店舗一覧
    </h2>
    <p>
      <example-component />
    </p>
    <table class="table">
      @foreach ($restaurants as $restaurant)
        <tr>
          <td>{{ $restaurant->id }}</td>
          <td>{{ $restaurant->name }}</td>
          <td>{{ $restaurant->created_at }}</td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection
