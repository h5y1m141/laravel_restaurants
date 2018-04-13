<div class="container">
  <h1>店舗作成</h1>
  <form action="{{ url('/admin/restaurants') }}" method="post">
    @csrf
    @method('POST')
    @component('admin.components.form', ['restaurant' => $restaurant])
    @slot('submit')
    登録する
    @endslot
    @endcomponent
  </form>
</div>
