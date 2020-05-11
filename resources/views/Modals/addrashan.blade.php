<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-adefault">Add New Rashan</button>

<div class="modal fade" id="modal-adefault">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Rashan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('add_rashan')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label>Rashan Title</label>
                  <input name="name" value="" class="form-control" placeholder="Enter Item Name">
                </div>
                <div class="form-group">
                 <label>Total Rashan (For Needies)</label>
                 <input name="qty" value="" class="form-control" placeholder="Enter Rashan Quantity">
                </div>

                <div class="form-group">
                 <label>Add Days (For Rashan)</label>
                 <input name="days" value="" class="form-control" placeholder="Enter Number of Days">
                </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Rashan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>