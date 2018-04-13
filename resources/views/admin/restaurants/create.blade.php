@extends('layouts.app')
@section('title', 'Page Title')
@section('sidebar')
@endsection
@section('content')
  <div class="container">
    <h1>店舗作成</h1>
    <form class="form" action="{{ url('/admin/restaurants') }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('POST')
      @component('admin.components.form', ['restaurant' => $restaurant])
      @slot('submit')
      登録する
      @endslot
      @endcomponent
    </form>
  </div>
@endsection
