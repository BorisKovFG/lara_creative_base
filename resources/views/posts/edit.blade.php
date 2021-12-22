@extends('layouts.main')
@include('posts.main_content')
@section('inner_content')
    <form action="{{ route('posts.update', $post) }}" method="post">
        @include('posts.form')
        @method('patch')
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
