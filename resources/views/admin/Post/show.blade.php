@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Image</th>
            <th scope="col">likes</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->image }}</td>
            <td>{{ $post->likes }}</td>
        </tr>
        </tbody>
    </table>
@endsection
