@extends('layouts.mastertable')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rashan Area</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title float-left">All Rashan</h3>
              <h3 class="card-title float-right">@include('Modals.addrashan')</h3>
              <div class="clearfix"></div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr#</th>
                  <th>Name</th>
                  <th>Qty for needies</th>
                  <th>View Area</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  @foreach($rashan as $key => $rashan)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$rashan->name}}</td>
                    <td>{{$rashan->qty}} <strong class="badge badge-secondary">Remaining : {{$rashan->remaining}} </strong> </td>
                    <td><div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        View Area
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <a class="dropdown-item" href="{{url('/rashan_list/'.$rashan->id)}}">Rashan Item List</a>
        <a class="dropdown-item" href="{{url('/needies_rashan/'.$rashan->id)}}">Given Needy List</a>
      </div>
    </div>
  </td>
                    <td>
                        <div class="btn-group" role="group">
                          <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                         </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                       <a class="dropdown-item" href="#">Edit</a>
                       <a class="dropdown-item" href="#">Delete</a>
                         </div>
                       </div>
                     </td>
                    
                  </tr>
                @endforeach
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection