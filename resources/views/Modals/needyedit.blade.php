<i style="cursor: pointer;" class="fas fa-user-edit" data-toggle="modal" data-target="#needyedit-{{$needy->id}}"></i>

<div class="modal fade" id="needyedit-{{$needy->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Needy <strong>{{$needy->name}}</strong></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('update_needy')}}" method="POST"> 
                @csrf

                <input type="text" name="id" value="{{$needy->id}}" hidden="">
                <div class="form-group">

                  <label> Name</label>
                  <input type="text" name="name" placeholder="{{$needy->name}}" class="form-control">

                </div>
                <div class="form-group">

                  <label> Phone</label>
                  <input type="text" name="phone" placeholder="{{$needy->phone}}" class="form-control">

                </div>
                <div class="form-group">

                  <label> CNIC</label>
                  <input type="text" name="cnic" placeholder="{{$needy->cnic}}" class="form-control">

                </div>  
             
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update Needy</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>