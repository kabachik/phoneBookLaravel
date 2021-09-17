@extends('layout')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            New record has not been added because of
            {!! implode('', $errors->all('<div>:message</div>')) !!}
            <span data-dismiss="alert" aria-label="Close" aria-hidden="true" data-dismiss="alert" aria-label="Close">X</span>
        </div>
    @endif



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
                        <div class="form-group">
                            <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal{{$el->id}}">Edit</a>
                        </div>
                    <form action="/edit/{{$el->id}}" method="POST">
                        @csrf
                        <div class="modal fade" id="editModal{{$el->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit contact</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-floating mb-3">
                                            <input type="text" id="edit-name" class="form-control" name="name" placeholder="Name" value="{{$el->name}}">
                                            <small id="edit-warn" class="d-none text-danger">Field is empty</small>
                                            <label for="Name">Name</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="text" id="edit-surname" class="form-control" name="surname" placeholder="Surname" value="{{$el->surname}}">
                                            <label for="Surname">Surname</label>
                                        </div><br>
                                        <div class="form-floating">
                                            <input type="text" id="edit-phone" class="form-control" name="phone" placeholder="Phone number" value="{{$el->phone}}">
                                            <label for="Phone">Phone number</label>
                                        </div><br>
                                        <div class="form-floating">
                                            <input type="email" id="edit-email" class="form-control" name="email" placeholder="Email" value="{{$el->email}}">
                                            <label for="Email">Email</label>
                                        </div><br>
                                        <div class="form-floating">
                                            <input type="text" id="edit-gender" class="form-control" name="gender" placeholder="Male/Female" value="{{$el->gender}}">
                                            <label for="Gender">Gender</label>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                                        <button type="submit" id="edit-form-submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form  method="POST" action="/delete/{{$el->id}}">
                        @csrf
                        @method('DELETE')

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
    {{$contacts->links()}}
@endsection
