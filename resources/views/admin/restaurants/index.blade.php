@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
  <p>ここはサイドバー領域</p>
@endsection

@section('content')
  @if (Auth::check())
    <div>
      <h2>
        店舗一覧
      </h2>
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
