<nav class="navbar fixed-top navbar-light bg-white border-bottom">
    <div class="container-fluid" style="width: 900px; max-width: 100%;">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('dashboard') }}"><img width="100" src="{{ asset('images/logo-capital.png') }}" alt="instact"></a>
        </div>
        <div class="navbar-nav flex-row">
            <a class="nav-link active me-3" aria-current="page" href="{{ route('posts.create') }}"><i class="bi bi-plus-square fs-3"></i></a>
            <a class="nav-link me-3" href="#"><i class="bi bi-heart fs-3"></i></a>
            <a class="nav-link me-3" href="#"><i class="bi bi-person-circle fs-3"></i></a>
        </div>
    </div>
</nav>