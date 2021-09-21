@csrf

<div class="md-form">
  <label for=""></label>
  <input type="text" class="form-control" name="title" required value="{{ old('title') }}">
</div>

<div class="md-form">
  <label for=""></label>
  <textarea name="body" id="body" rows="16" class="form-control" placeholder="本文">{{ old('body') }}</textarea>
</div>
