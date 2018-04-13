@extends('layouts.app')
@section('title', 'Page Title')
@section('sidebar')
@endsection
@section('content')
  <div class="container">
    <h1>店舗編集</h1>
    <form action="{{ url('/admin/restaurants/'.$restaurant->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      @component('admin.components.form', ['restaurant' => $restaurant])
      @slot('submit')
      更新する
      @endslot
      @endcomponent
    </form>
  </div>
@endsection
