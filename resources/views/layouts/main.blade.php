<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Posts</title>
</head>
<body>
<div class="container" class="row">
    <div>
        <nav>
            <ul>
                <li><a href="{{ route('main.index') }}">Main</a></li>
                <li><a href="{{ route('posts.index') }}">List of Posts</a></li>
                <li><a href="{{ route("contacts.index") }}">List of contacts</a></li>
                <li><a href="{{ route("about.index") }}">About</a></li>
                @can('view', auth()->user())
                <li><a href="{{ route("admin.post.index") }}">Admin</a></li>
                @endcan

            </ul>
        </nav>
    </div>
@yield('content')

@yield('inner_content')
</div>

</body>
</html>
