@extends('layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- Small boxes (Stat box) -->
        <div class="card p-2">
          <div class="card-header mb-2">Rashan Area</div>
          <div class="row">
            
            @foreach($all_rashan as $key=>$rashan)
            <div class="col-lg-3 col-6">
              <!-- small box -->

              <div class="small-box bg-info">
               <center> <h4 class="badge badge-light">{{++$key}}</h4></center>
                <div class="inner">
                  <h3>{{$rashan->remaining}} / {{$rashan->qty}}</h3>

                  <p>{{$rashan->name}}</p>
                  <p class="badge badge-dark">For {{$rashan->days}} Days</p>
                   <p class="badge badge-dark">Items {{$rashan->rashanitems->count()}} </p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('/rashan/'.$rashan->id)}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            @endforeach
           
           
            <!-- ./col -->
            
            <!-- ./col -->
          </div>

        </div>
         
         <div class="card p-2">
           <div class="card-header mb-2">Needy Area</div>
                      <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->

              <div class="small-box bg-info">
               
                <div class="inner">
                  <h3>{{$all_needy}}</h3>

                  <p>All Needies</p>
                 
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('/rashan/')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->

              <div class="small-box bg-info">
               
                <div class="inner">
                  <h3>{{ $pending_rashan_needy}}</h3>

                  <p>Pending Needies</p>
                 
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('/rashan/')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->

              <div class="small-box bg-info">
               
                <div class="inner">
                  <h3>{{$given_rashan_needy}}</h3>

                  <p>Rashan Given</p>
                 
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('/rashan/')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->

              <div class="small-box bg-info">
               
                <div class="inner">
                  <h3>{{$all_needy}}</h3>

                  <p>All Needys</p>
                 
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('/rashan/')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
         </div>

        <!-- /.row -->

        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
@endsection
