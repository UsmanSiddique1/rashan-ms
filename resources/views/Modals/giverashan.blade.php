<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#give-rashan">Give</button>

<div class="modal fade" id="give-rashan">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Give Rashan To <strong>{{$needy->name}}</strong></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('give_rashan')}}" method="POST">
                @csrf
                 <div class="form-group">
                  <input type="text" name="id" value="{{$needy->id}}" hidden="">
                  <label>Select Your Stored Rashan</label>
                  <select class="form-control" name="rashan_id">
                    <option selected="" disabled="">Select Rashan</option>
                    @foreach($all_rashan as $key=> $rashan)
                    <option value="{{$rashan->id}}">{{$rashan->name}}--Remain({{$rashan->remaining}})--Total({{$rashan->qty}})
                    </option>
                    @endforeach
                  </select>
                    
                  
                </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Give Rashan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>