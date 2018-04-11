@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">管理画面ダッシュボード</div>

          @if (Auth::check())
            <ul>
              <li>
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  ログアウトする
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
              <li>
                <a href="/admin/restaurants">
                  レストラン管理機能  
                </a>                
              </li>
            </ul>
          @else
            <h3>
              管理機能を利用するにはログインが必要になります。
            </h3>
            <p>
              <a href="/login">ログインする</a>
            </p>
          @endif
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
