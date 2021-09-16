@extends('layout')
@section('content')



{{--    <a href="#form" class="popup">Add</a>--}}

{{--    <div class="d-none">--}}
{{--        <form id="form">--}}
{{--            <input type="text" name="name" placeholder="Name">--}}
{{--            <input type="text" name="surname" placeholder="Surname">--}}
{{--            <input type="text" name="gender" placeholder="Male/Female">--}}
{{--            <input type="text" name="phone" placeholder="Phone number">--}}
{{--            <input type="text" name="email" placeholder="Email">--}}
{{--            <button>Add</button>--}}
{{--        </form>--}}
{{--    </div>--}}


<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
{{--            <th scope="col"><input type="checkbox" id="chkCheckAll"></th>--}}
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
    @foreach($contacts as $el)
        <tr id="sid{{$el->id}}">
            <td>{{$el->id}}</td>
            <td>{{$el->name}}</td>
            <td>{{$el->surname}}</td>
            <td>{{$el->phone}}</td>
            <td>{{$el->email}}</td>
            <td>{{$el->gender}}</td>
            <td>
{{--                <form method="POST" action="/edit/{{$el->id}}">--}}
{{--                    {{ csrf_field() }}--}}
{{--                    {{ method_field('EDIT') }}--}}

{{--                    <div class="form-group">--}}
{{--                        <input type="submit" class="btn btn-secondary edit-user" value="Edit">--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                <form  method="POST" action="/delete/{{$el->id}}">--}}
{{--                    {{ csrf_field() }}--}}
{{--                    {{ method_field('DELETE') }}--}}

{{--                    <div class="form-group">--}}
{{--                        <input type="submit" class="btn btn-dark delete-user" value="Delete">--}}
{{--                    </div>--}}
{{--                </form>--}}
                <div class="btn-group">
                    <form method="POST" action="/edit/{{$el->id}}">
                        <div class="form-group">
                            <a class="btn btn-secondary edit-user" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                        </div>
                    </form>
                    <form  method="POST" action="/delete/{{$el->id}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <div class="form-group">
                            <input type="submit" class="btn btn-dark delete-user" value="Delete">
                        </div>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>
</div>

@endsection
