@extends('layouts.layout')
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
                <div class="btn-group">
                        <div class="form-group">
                            <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal{{$el->id}}">Edit</a>
                        </div>
                    @include('modals.editForm')
                    <form  method="POST" action="/delete/{{$el->id}}">
                        @csrf
                        @method('DELETE')

                        <div class="form-group">
                            <input type="submit" class="btn btn-dark delete-user ms-1" value="Delete">
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
    @include('modals.addForm')
@endsection
