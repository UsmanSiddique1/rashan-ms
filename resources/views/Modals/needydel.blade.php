<!-- Button trigger modal -->
<i style="cursor: pointer;" class="fas fa-trash" data-toggle="modal" data-target="#exampleModal-{{$needy->id}}"></i>

    


<!-- Modal -->
<div class="modal fade" id="exampleModal-{{$needy->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
        Do you agree to delete this Needy <strong>{{$needy->name}}</strong>?
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{ url('/needy_del/'. $needy->id)}}"><button type="button" class="btn btn-primary">DELETE</button></a>
       
      </div>
    </div>
  </div>
</div>
