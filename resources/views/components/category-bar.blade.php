<nav class="nav nav-underline justify-content-between">
    @foreach ($categories as $category)
        <a class="nav-item nav-link link-body-emphasis active" href="#">{{ $category->name }}</a>
    @endforeach
</nav>
