@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif (session('delete'))
    <div class="alert alert-danger">
        {{ session('delete') }}
    </div>
@elseif (session('successAdd'))
    <div class="alert alert-success">
        {{ session('successAdd') }}
    </div>
@elseif (session('notfound'))
    <div class="alert alert-secondary">
        {{ session('notfound') }}
    </div>
@elseif (session('loginSuccess'))
    <div class="alert alert-success">
        {{ session('loginSuccess') }}
    </div>
@elseif (session('loginFail'))
    <div class="alert alert-danger">
        {{ session('loginFail') }}
    </div>
@endif
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h1 class="navbar-brand">Users</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link btn btn-outline-info mr-3" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-outline-warning mr-3" href="/admin">Admin</a>
            </li>

            @if (!Auth::user())
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-success mr-3" href="/login">Login</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-success mr-3" href="/logout">Logout</a>
                </li>
            @endif

        </ul>
        <form class="form-inline my-2 my-lg-0" action="/users/findUser" method="GET">
            @csrf
            <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Need some thing?" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
