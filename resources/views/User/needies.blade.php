@extends('layouts.mastertable')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Needies</h1>
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
              <h3 class="card-title float-left"><button class="btn btn-primary" onclick="goBack()">Go Back</button></h3>
              <h3 class="card-title float-right">@include('Modals.addneedy')</h3>
              <div class="clearfix"></div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>

                  <th>Give Rashan</th>
                  <th>Action</th>
                  <th>Sr#</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>CNIC</th>
                  <th>Status</th>
                
                  
                </tr>
                </thead>
                <tbody>

                  @foreach($all_needies as $key => $needy)

                  <tr>
                    @if($needy->status == 'Pending')
                    <td class="bg bg-warning">@include('Modals.giverashan')</td>
                    @else
                    <td><span class="badge badge-primary">RASHAN GIVEN</span></td>
                    @endif
                    <td>@include('Modals.needydel') | @include('Modals.needyedit')</td>
                    <td>{{++$key}}</td>
                    <td>{{$needy->name}}</td>
                    <td>{{$needy->phone}}</td>
                    <td>{{$needy->cnic}}</td>
                    <td>{{$needy->status}}</td>                   
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