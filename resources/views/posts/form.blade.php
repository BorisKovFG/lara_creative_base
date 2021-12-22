@csrf
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title ?? '' }}">
</div>
<div class="form-group">
    <label for="content">Content:</label>
    <textarea name="content" class="form-control" id="content" rows="3">{{ $post->content ?? '' }}</textarea>
</div>
<div class="form-group">
    <label for="image">Image:</label>
    <input name="image" type="file" class="form-control-file" id="image">
</div>
