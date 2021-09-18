<nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
            <li>
                <a href="{{route('home')}}" class="nav-link pointer" type="submit">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pointer" id="dropdown0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">File</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item pointer" href="{{route('export')}}">Export phone book</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pointer" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Record</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item pointer" data-bs-toggle="modal" data-bs-target="#addModal">Add</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pointer" id="categories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    @foreach($categories as $category)
                        <a class="dropdown-item pointer category-sorting" href="#" data-order="{{$category->id}}">{{$category->c_name}}</a>
                    @endforeach
                </div>
            </li>
            <form method="GET" action="/search" class="form-inline">
                <div class="input-group mb-0">
                    <input type="search" id="s" name="s" class="form-control" placeholder="Search row" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </ul>
    </div>
</nav>


