<form action="/edit/{{$el->id}}" method="POST">
    @csrf
    <div class="modal fade edit-modal" id="editModal{{$el->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input required type="text" id="edit-name" class="form-control" name="name" placeholder="Name" value="{{$el->name}}">
                        <small id="edit-warn" class="d-none text-danger">Field is empty</small>
                        <label for="Name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input required type="text" id="edit-surname" class="form-control" name="surname" placeholder="Surname" value="{{$el->surname}}">
                        <label for="Surname">Surname</label>
                    </div><br>
                    <div class="form-floating">
                        <input required type="text" id="edit-phone" class="form-control" name="phone" placeholder="Phone number" value="{{$el->phone}}">
                        <label for="Phone">Phone number</label>
                    </div><br>
                    <div class="form-floating">
                        <input required type="email" id="edit-email" class="form-control" name="email" placeholder="Email" value="{{$el->email}}">
                        <label for="Email">Email</label>
                    </div><br>
                    <select name="category" class="form-select form-select-lg" aria-label="Default select example">
                        <option {{$el->category == 1 ? 'selected':""}} value="1">Category 1</option>
                        <option {{$el->category == 2 ? 'selected':""}} value="2">Category 2</option>
                        <option {{$el->category == 3 ? 'selected':""}} value="3">Category 3</option>
                        <option {{$el->category == 4 ? 'selected':""}} value="4">Category 4</option>
                        <option {{$el->category == 5 ? 'selected':""}} value="5">Category 5</option>
                    </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                    <button type="submit" id="edit-form-submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
