<div class="form-group">
  <label for="name">店舗名</label>
  <input id="name" type="text" class="form-control" name="name" value="{{$restaurant->name}}" required autofocus>
</div>
<div class="form-group">
  <label for="address">所在地</label>
  <input id="address" type="text" class="form-control" name="address" value="{{$restaurant->address}}" required>
</div>
<div class="form-group">
  <div>
    @if ($restaurant->picture_filename)
      <img width="100" height="50" alt="店舗画像" src="{{ asset('storage/' . $restaurant->picture_filename) }}"/>
    @endif
  </div>
  <label for="address">店舗画像</label>
  <input name="picture_filename" type="file" />
</div>
<button type="submit" name="submit" class="btn btn-primary">{{ $submit }}</button>
