<header>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  {{Route::currentRouteName() == 'books.index' ? 'active' : ''}}" href="{{route('books.index')}}">Books</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Route::currentRouteName() == 'movies.index' ? 'active' : ''}}" href="{{route('movies.index')}}">Movies</a>
                </li>

              </ul>
            </div>
          </div>
      </nav>
</header>
