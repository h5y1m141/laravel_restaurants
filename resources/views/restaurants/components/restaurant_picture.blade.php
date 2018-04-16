@if ($restaurant->picture_filename)
  <div class="col-md-12 py-0 px-0 mx-0 my-0">
    <img class="img-fluid img-thumbnail" alt="店舗画像" src="{{ asset('storage/' . $restaurant->picture_filename) }}"/>
  </div>
@endif
