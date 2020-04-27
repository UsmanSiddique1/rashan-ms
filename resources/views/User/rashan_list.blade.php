@extends('layouts.mastertable')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rashan List</h1>
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
              <h3 class="card-title float-left"><button onclick="goBack()" class="btn btn-primary">Go Back</button></h3>
              <h3 class="card-title float-right">@include('Modals.addrashanitem')</h3>
              
              <div class="clearfix"></div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr#</th>
                  <th>Name</th>
                  <th>Qty</th>
                  <th>Edit</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                  @foreach($rashan_list as $key => $items)
                  <tr>
                    <td>{{++$key}}</td>                    
                    <td>{{$items->name}}</td>
                    <td>{{$items->qty}} {{$items->unit}} </td>
                    <td>@include('Modals.editrashanitem') | @include('Modals.rashanitemdel')</td>   
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