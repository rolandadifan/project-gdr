<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Admin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('admin.store') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" required>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" required>
                  <small id="emailHelp" class="form-text text-muted">email tidak boleh sama</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" required>
                </div>
                {{-- <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" required>
                  </div> --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">No Hp</label>
                    <div class="d-flex">
                      <div class="form-control enam-dua">+62</div>
                      <input type="number" name="telephone" class="form-control" max="11" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Role</label>
                    <select class="form-control" name="role">
                      <option value="admin">Admin</option>
                      <option value="sadmin">Super Admin</option>
                    </select>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="sumbit" class="btn btn-primary">Create</button>
                  </div>
              </form>
        </div>
        
      </div>
    </div>
  </div>