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
    <table class="table">
      <thead>
        <tr class="row m-0">
          <th class="col-2">画像</th>
          <th class="col-4">店舗名</th>
          <th class="col-4">住所</th>
          <th class="col-2">詳細</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($restaurants as $restaurant)
          <tr class="row m-0">
            <td class="col-2">
              @component('restaurants.components.restaurant_picture', ['restaurant' => $restaurant])
              @endcomponent
            </td>
            <td class="col-4">
              {{ $restaurant->name }}
            </td>
            <td class="col-4">
              {{ $restaurant->address }}
            </td>
            <td class="col-2">
              <button class="btn btn-info">詳細</button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $restaurants->links() }}
  </div>
@endsection
