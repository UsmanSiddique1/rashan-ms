
@extends('layouts.master')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Needy Person</h1>
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
      <div class="row justify-content-center">
        <div class="col-6">
        	<div class="card">	
        		<div class="card-header">Add Needy Person</div>
        		<div class="card-body">	
        			<form action="{{ route('add_needy')}}" method="POST">	
                @csrf
        				<div class="form-group">

        					<label>	Name</label>
        					<input type="text" name="name" class="form-control">

        				</div>
        				<div class="form-group">

        					<label>	Phone</label>
        					<input type="text" name="phone" class="form-control">

        				</div>
        				<div class="form-group">

        					<label>	CNIC</label>
        					<input type="text" name="cnic" class="form-control">

        				</div>	
        			</div>

        				<div class="card-footer">
        					<button type="submit" class="btn btn-primary float-right">Add Person</button>	
        				</div>

        				
        			</form>

        		

        	</div>	
        </div>
      </div>

    </section>

</div>



@endsection