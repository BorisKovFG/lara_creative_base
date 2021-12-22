@extends('layouts.main')
@include('posts.main_content')
@section('inner_content')
    <form action="{{ route('posts.store') }}" method="post">
        @include('posts.form')
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
