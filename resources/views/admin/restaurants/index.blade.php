@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
  <p>ここはサイドバー領域</p>
  <li>
    <a href="{{ url('/logout') }}"
       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
      Logout
    </a>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
    </form>
  </li>
@endsection

@section('content')
  @if (Auth::check())
    <div>
      <a href="/admin/restaurants/create">
        <button class="btn btn-primary">新規作成</button>
      </a>
    </div>
    <div>
      <h2>
        店舗一覧
      </h2>
      <table class="table">
        <thead>
          <tr class="row m-0">
            <th class="col-2">店舗名（ID）</th>
            <th class="col-2">画像</th>
            <th class="col-2">住所</th>
            <th class="col-2">作成日</th>
            <th class="col-2">編集</th>
            <th class="col-2">削除</th>
          </tr>
        </thead>
        @foreach ($restaurants as $restaurant)
          <tr class="row m-0">
            <td class="col-2">{{ $restaurant->name }}（ID：{{ $restaurant->id }}）</td>
            <td class="col-2">
              @component('restaurants.components.restaurant_picture', ['restaurant' => $restaurant])
              @endcomponent
            </td>
            <td class="col-2">{{ $restaurant->address }}</td>
            <td class="col-2">{{ $restaurant->created_at }}</td>
            <td class="col-2">
              <a href="/admin/restaurants/{{ $restaurant->id }}/edit">
                <button class="btn btn-info">編集する</button>
              </a>
            </td>
            <td class="col-2">
              <form action="/admin/restaurants/{{ $restaurant->id }}" method="POST">
                {{ csrf_field() }}
                @method('DELETE')
                <button class="btn btn-danger">削除</button>
              </form>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  @else
    <h3>
      ※ログインしてません
    </h3>
    <p>
      <a href="/admin/login">
      ログインページに移動
      </a>
    </p>
  @endif
@endsection
