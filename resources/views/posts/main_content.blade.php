@section('content')
    Posts Page
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route("posts.create") }}">Create a post</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
@endsection
