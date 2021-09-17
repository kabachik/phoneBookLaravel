<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
            <li>
                <a href="{{route('home')}}" class="nav-link" type="submit">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">File</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item" href="#">Import phone book</a>
                    <a class="dropdown-item" href="#">Export phone book</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Record</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addModal">Add</a>
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


                {{--Add modal--}}

<form action="/send" method="POST">
    @csrf
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" id="add-name" class="form-control" name="name" placeholder="Name">
                        <small id="name-warn" class="d-none text-danger">Field is empty</small>
                        <label for="Name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" id="add-surname" class="form-control" name="surname" placeholder="Surname">
                        <small id="surname-warn" class="d-none text-danger">Field is empty</small>
                        <label for="Surname">Surname</label>
                    </div><br>
                    <div class="form-floating">
                        <input type="text" id="add-phone" class="form-control"  name="phone" placeholder="Phone number">
                        <small id="phone-warn" class="d-none text-danger">Field is empty</small>
                        <label for="Phone">Phone number</label>
                    </div><br>
                    <div class="form-floating">
                        <input type="email" id="add-email" class="form-control" name="email" placeholder="Email">
                        <small id="email-warn" class="d-none text-danger">Field is empty</small>
                        <label for="Email">Email</label>
                    </div><br>
                    <div class="form-floating">
                        <input type="text" id="add-gender" class="form-control" name="gender" placeholder="Male/Female">
                        <small id="gender-warn" class="d-none text-danger">Field is empty</small>
                        <label for="Gender">Gender</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                    <button type="submit" id="add-form-submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>




@yield('content')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="{{asset("js/main.js")}}"></script>
<script src="{{asset("css/style.css")}}"></script>
</body>
</html>
