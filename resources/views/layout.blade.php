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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
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
                    <a class="dropdown-item disabled" href="#">Edit</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Search</a>
            </li>
            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link" href="#">Link</a>--}}
            {{--            </li>--}}
            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link disabled" href="#">Disabled</a>--}}
            {{--            </li>--}}
            {{--            <li class="nav-item dropdown">--}}
            {{--                <a class="nav-link dropdown-toggle" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>--}}
            {{--                <div class="dropdown-menu" aria-labelledby="dropdown08">--}}
            {{--                    <a class="dropdown-item" href="#">Action</a>--}}
            {{--                    <a class="dropdown-item" href="#">Another action</a>--}}
            {{--                    <a class="dropdown-item" href="#">Something else here</a>--}}
            {{--                </div>--}}
            {{--            </li>--}}
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
                    <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                        <label for="Name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="surname" placeholder="Surname">
                        <label for="Surname">Surname</label>
                    </div><br>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="phone" placeholder="Phone number">
                        <label for="Phone">Phone number</label>
                    </div><br>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <label for="Email">Email</label>
                    </div><br>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="gender" placeholder="Male/Female">
                        <label for="Gender">Gender</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form action="/edit/{{$el->id}}" method="POST">
    @csrf
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{$el->name}}">
                        <label for="Name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="surname" placeholder="Surname" value="{{$el->surname}}">
                        <label for="Surname">Surname</label>
                    </div><br>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="phone" placeholder="Phone number" value="{{$el->phone}}">
                        <label for="Phone">Phone number</label>
                    </div><br>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{$el->email}}">
                        <label for="Email">Email</label>
                    </div><br>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="gender" placeholder="Male/Female" value="{{$el->gender}}">
                        <label for="Gender">Gender</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>


@yield('content')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script>
    $('.delete-user').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>
</body>
</html>
