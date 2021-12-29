@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.post.store') }}" method="post">
        @include('includes.admin.form')
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
