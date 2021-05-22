<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('key-date.createInfo') }}">
                @csrf
                <input type="hidden" name="key_date_id" value="{{ $keyId }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" required>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="text" name="date" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Activities</label>
                  <input type="text" name="activities" class="form-control" required>
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