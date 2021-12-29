<form action="{{ route('posts.index') }}" method="GET">
    <div class="form-group">
        <label for="category">Category:</label>
        <select class="form-control" id="category" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}: {{ $category->posts->count() }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Filter</button>
</form>
