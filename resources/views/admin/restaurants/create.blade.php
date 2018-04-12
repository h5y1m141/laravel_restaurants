<div class="container">
  <h1>店舗作成</h1>
  <form action="{{ url('/admin/restaurants') }}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="name">店舗名</label>
      <input id="name" type="text" class="form-control" name="name" required autofocus>
    </div>
    <div class="form-group">
      <label for="address">所在地</label>
      <input id="address" type="text" class="form-control" name="address" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">登録する</button>
  </form>
</div>
