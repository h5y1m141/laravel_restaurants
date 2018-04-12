<div class="container">
  <h1>店舗編集</h1>
  <form action="{{ url('/admin/restaurants/'.$restaurant->id) }}" method="POST">
    @csrf
    @method('PUT')
    @component('admin.components.form', ['restaurant' => $restaurant])
    @slot('submit')
    更新する
    @endslot
    @endcomponent
  </form>
</div>
