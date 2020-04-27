@extends('layouts.mastertable')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Needy Person</h1>
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
              <h3 class="card-title float-right"><a href="{{url('/needies')}}"><button class="btn btn-primary">Give Rashan To Needy</button></a></h3>
              <div class="clearfix"></div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr#</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>CNIC</th>
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($needy_rashan as $key => $needy)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$needy->name}}</td>
                    <td>{{$needy->phone}}</td>
                    <td>{{$needy->cnic}}</td>
                    <td><a href="{{url('/del_needy_rashan/'. $needy->id)}}"><button class="btn btn-warning">DELETE</button></a></td>
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