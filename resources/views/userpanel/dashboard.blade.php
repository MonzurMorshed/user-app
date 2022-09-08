@extends('layouts.index')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header  content-1">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 row">
            <div class="col-md-1"></div>
            <div class="col-sm-6">
                <h3 class="m-0">Welcome, Caherine Pike</h3>
                <p>Today is a good day, start with BongoPay.</p>
            </div>
            <div class="col-sm-5">
                <li class="badge badge-success"><i class="fa fa-circle-ok mr-2"></i>Verified</li><br>
                <li class="badge badge-warning"><i class="fa fa-circle-ok mr-2"></i>Unverified</li> Submit your verification
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row content-2">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h3 class="m-0">Account Balance</h3>
                <h1>123456789</h1>
                <p>Available Balance</p>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>

          <div class="col-md-12 row">
              <div class="col-md-6">Affliate Earnings</div>
              <div class="col-md-6" style="float:right;">Create Affliate Account</div>
          
          <!-- /.col-md-2-->
          <div class="col-lg-2">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Recent Earnings</a>
              </div>
            </div>
         </div>
         <div class="col-lg-2">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Successful Refer</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Pending Refer</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Earning Withdraw</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-2 -->
        </div>
</div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection