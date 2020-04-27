<button type="button" id="additem" class="btn btn-primary" data-toggle="modal" data-target="#modal-adefault">Add New Rashan Item</button>

<div class="modal fade" id="modal-adefault">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Item</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="append" action="{{route('add_rashan_item')}}" method="post">
                @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="rashan_id" value="{{$rashan_id}}" hidden="">
                  <input name="name" value="" class="form-control" placeholder="Enter Item Name" required="">
                </div>

                <div class="form-group">
                  <label>Select Unit/Type</label>
                  <select required="" id="unit" name="unit" class="form-control">
                    <option selected="" disabled="">Select</option>
                    <option value="kg">Kilogram</option>
                    <option value="ltr">Litrs</option>
                    <option value="pc">Peaice</option>                    
                  </select>
                </div>

                
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Item</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>