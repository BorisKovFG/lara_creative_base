<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">ADMIN PANEL</li>
        <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Post
                    <span class="badge badge-info right">{{ isset($posts) ? $posts->total() : ''}}</span>
                </p>

            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.post.create') }}" class="nav-link">
                <i class="far fa-plus-square"></i>
                <p>
                    Add Post
                </p>
            </a>
        </li>
    </ul>
</nav>
