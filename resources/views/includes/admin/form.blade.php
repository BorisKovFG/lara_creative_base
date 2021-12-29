@csrf
{{--@if ($errors->any())--}}
{{--    <div>--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}
<div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title"
           value="{{ $post->title ?? old('title') }}">
    @error('title')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="content">Content:</label>
    <textarea name="content" class="form-control" id="content"
              rows="3">{{ $post->content ?? old('content') }}</textarea>
    @error('content')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="tags">Tags:</label>
    <select multiple class="form-control" id="tags" name="tags[] ">
        @foreach($tags as $tag)
            <option
                @if(isset($post))
                @foreach($post->tags as $postTag)
                {{ ($tag->id  === $postTag->id) ? 'selected' : '' }}
                @endforeach
                @else
                {{ (is_array(old('tags')) && in_array($tag->id, old('tags'))) ? ' selected' : '' }}
                @endif
                value="{{ $tag->id }}">
                {{ $tag->title }}
            </option>
        @endforeach
    </select>
    @error('tags')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="image">Image:</label>
    <input name="image" type="file" class="form-control-file" id="image">
    @error('image')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="category">Category:</label>
    <select class="form-control" id="category_id" name="category_id">
        @foreach($categories as $category)
            <option
                {{ (old('category_id') == $category->id) ? 'selected' : '' }}
                {{ (isset($post) && ($category->id  === $post->category->id)) ? 'selected' : '' }}
                value="{{ $category->id }}">
                {{ $category->title }}
            </option>
        @endforeach
    </select>
</div>
