@extends('layouts.admin')

@section('content')
    @include('includes.admin.index_filter_category')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Edit</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Image</th>
            <th scope="col">likes</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)

            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td><a href="{{ route('admin.post.edit', $post) }}">Edit</a></td>
                <td><a href="{{ route('admin.post.show', $post) }}">{{ Str::limit($post->title, 25) }}</a></td>
                <td>{{ Str::limit($post->content, 60 )}}</td>
                <td>{{ Str::limit($post->image, 20)}}</td>
                <td>{{ $post->likes }}</td>
                <td>
                    <form action="{{ route('admin.post.destroy', $post) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--    <div>{{ (!$categoryId) ? $posts->links() : "Total: " . $posts->count() }}</div>--}}
    <div class="mt-3">{{ $posts->links() }}</div>
@endsection
