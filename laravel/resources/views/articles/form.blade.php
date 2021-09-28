@csrf

<div class="md-form">
  <label for="">タイトル</label>
  <input type="text" class="form-control" name="title" required value="{{ $article->title ?? old('title') }}">
</div>

<div class="form-group">
  <article-tags-input
    :initial-tags='@json($tagNames ?? [])'
  >
  </article-tags-input>
</div>

<div class="md-form">
  <label for=""></label>
  <textarea name="body" id="body" rows="16" class="form-control" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
</div>
