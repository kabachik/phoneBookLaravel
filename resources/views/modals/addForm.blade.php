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
                    <select name="category" class="form-select form-select-lg" aria-label="Default select example">
                        <option selected>Category</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                        <option value="4">Category 4</option>
                        <option value="5">Category 5</option>
                    </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                    <button type="submit" id="add-form-submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
