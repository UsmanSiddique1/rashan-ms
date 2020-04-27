<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add Needy Person</button>

<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Person</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('add_needy')}}" method="POST"> 
                @csrf
                <div class="form-group">

                  <label> Name</label>
                  <input type="text" name="name" class="form-control">

                </div>
                <div class="form-group">

                  <label> Phone</label>
                  <input type="text" name="phone" class="form-control">

                </div>
                <div class="form-group">

                  <label> CNIC</label>
                  <input type="text" name="cnic" class="form-control">

                </div>  
             
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Needy</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>