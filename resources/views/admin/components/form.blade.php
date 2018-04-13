<div class="form-group">
  <label for="name">店舗名</label>
  <input id="name" type="text" class="form-control" name="name" value="{{$restaurant->name}}" required autofocus>
</div>
<div class="form-group">
  <label for="address">所在地</label>
  <input id="address" type="text" class="form-control" name="address" value="{{$restaurant->address}}" required>
</div>
<button type="submit" name="submit" class="btn btn-primary">{{ $submit }}</button>
