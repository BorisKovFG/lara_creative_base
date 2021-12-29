@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.post.update', $post) }}" method="post">
        @include('includes.admin.form')
        @method('patch')
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
