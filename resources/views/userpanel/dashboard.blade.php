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

        <div class="content-header  content-2 card">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-12 row">
                  <div class="col-md-5 content-2-block1">            
                    <div class="card-body">
                      <h3 class="m-0">Account Balance</h3>
                      <h1>123456789</h1>
                      <p>Available Balance</p>
                      <p class="card-text">
                        <i class=""></i>
                        +12300<br>this month
                      </p>

                      <a href="#" class="btn btn-sm btn-outline-primary">Send</a>
                      <a href="#" class="btn btn-sm btn-primary">Withdraw</a>
                      <a href="#" class="btn btn-sm btn-warning">Deposit</a>
                    </div>
                  </div>
                  <div class="col-md-7 content-2-block2">            
                    <div class="card-body">
                      <div class="row mb-2">
                        <div class="col-md-12 row">
                          <div class="col-md-6 d-flex justify-content-between align-items-center">
                            <div>
                              <i class=""></i>
                              <span>Diposited</span><br>
                              <span class="account-status">All time</span><br>
                              <small class="badge badge-secondary">View All</small>
                            </div>
                            <div>
                              <div class="amount-stat" style="background-color:#FFCE33;"><small>BDT</small><br>100</div>
                            </div>
                          </div>
                          <div class="col-md-6 d-flex justify-content-between align-items-center">
                            <div>
                              <i class=""></i>
                              <span>Total Escrow</span><br>
                              <span class="account-status">Completed</span><br>
                              <small class="badge badge-secondary">View All</small>
                            </div>
                            <div>
                              <div class="amount-stat" style="background-color:#FF5733;">100</div>
                            </div>
                          </div>
                          <div class="col-md-6 d-flex justify-content-between align-items-center">
                            <div>
                              <i class=""></i>
                              <span>Pending Deposite</span><br>
                              <span class="account-status">In progress</span><br>
                              <small class="badge badge-secondary">View All</small>
                            </div>
                            <div>
                              <div class="amount-stat" style="background-color:cyan;"><small>BDT</small><br>100</div>
                            </div>
                          </div>
                          <div class="col-md-6 d-flex justify-content-between align-items-center">
                            <div>
                              <i class=""></i>
                              <span>Running Escrow</span><br>
                              <span class="account-status">In progress</span><br>
                              <small class="badge badge-secondary">View All</small>
                            </div>
                            <div>
                              <div class="amount-stat" style="background-color:cyan;">100</div>
                            </div>
                          </div>
                          <div class="col-md-6 d-flex justify-content-between align-items-center">
                            <div>
                              <i class=""></i>
                              <span>Withdrawn</span><br>
                              <span class="account-status">Total Withdrawn</span><br>
                              <small class="badge badge-secondary">View All</small>
                            </div>
                            <div>
                              <div class="amount-stat" style="background-color:#FFCE33;"><small>BDT</small><br>100</div>
                            </div>
                          </div>
                          <div class="col-md-6 d-flex justify-content-between align-items-center">
                            <div>
                              <i class=""></i>
                              <span>Waiting For Accept</span><br>
                              <span class="account-status">In Waiting</span><br>
                              <small class="badge badge-secondary">View All</small>
                            </div>
                            <div>
                              <div class="amount-stat" style="background-color:#FF5733;">100</div>
                            </div>
                          </div>
                          <div class="col-md-6 d-flex justify-content-between align-items-center">
                            <div>
                              <i class=""></i>
                              <span>Pending Withdrawn</span><br>
                              <span class="account-status">Processing</span><br>
                              <small class="badge badge-secondary">View All</small>
                            </div>
                            <div>
                              <div class="amount-stat" style="background-color:cyan;"><small>BDT</small><br>100</div>
                            </div>
                          </div>
                          <div class="col-md-6 d-flex justify-content-between align-items-center">
                            <div>
                              <i class=""></i>
                              <span>Completed Escrow</span><br>
                              <span class="account-status">Payout Added</span><br>
                              <small class="badge badge-secondary">View All</small>
                            </div>
                            <div>
                              <div class="amount-stat" style="background-color:cyan;">100</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
          
        <div class="content-2">
          <div class="col-md-12 row">
            <div class="col-md-8">
              <div class="col-md-12" style="float:left;">
                <span>Affliate Earnings</span>
                <button class="btn btn-sm btn-outline-primary" style="float:right;margin-bottom:20px;"><i class="fa fa-plus"></i> Create Affliate Account</button>
              </div> 
              <div class="row">
                <div class="col-lg-3">
                  <div class="card">
                    <div class="card-body text-bold dashboard-container3">
                      <i class=""></i>
                      <h6 class="card-title text-warning heading">Recent Earnings</h6>
                      <div class="card-text small-text">
                        Balance after withdrawn<br>
                      </div>
                    </div>
                    <div class="amount-area1"><sup>TK</sup>100</div>
                    <div class="card-body text-bold dashboard-container3">
                      <a href="#" class="btn btn-primary">Withdraw</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card card-outline">
                    <div class="card-body text-bold dashboard-container3">
                      <i class=""></i>
                      <h6 class="card-title text-success heading">Successful Refer</h6>
                      <div class="card-text small-text">
                        Sign-up completed<br>
                        Escrow completed<br>
                      </div>
                    </div>
                    <div class="amount-area2">100</div>
                    <div class="card-body text-bold dashboard-container3">
                      <a href="#" class="btn btn-primary">View All</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card card-outline">
                    <div class="card-body text-bold dashboard-container3">
                      <i class=""></i>
                      <h6 class="card-title text-warning heading">Pending Refer</h6>
                      <div class="card-text small-text">
                        Sign-up completed<br>
                        Waiting for excrow<br>
                      </div>
                    </div>
                    <div class="amount-area3">100</div>
                    <div class="card-body text-bold dashboard-container3">
                      <a href="#" class="btn btn-primary">View All</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card card-outline">
                    
                    <div class="card-body text-bold dashboard-container3">
                      <i class=""></i>
                      <h6 class="card-title text-warning heading">Earnings Withdraw</h6>
                      <div class="card-text small-text">
                        Finalized commission<br>
                        Payout approved<br>
                      </div>
                    </div>
                    <div class="amount-area4"><sup>TK</sup>100</div>
                    <div class="card-body text-bold dashboard-container3">
                      <a href="#" class="btn btn-primary">View All</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-outline">
                <div class="card-header">
                  <h5 class="m-0">Account Security</h5><br>
                  <div class="col-md-12 d-flex justify-content-between align-items-center"> 
                      <span>
                        2FA Authentication<br>
                        <small class="text-danger">Disable</small>
                      </span>
                      <div class="custom-control custom-switch pull-right">
                          <input type="checkbox" class="custom-control-input" id="2faAuthentication">
                          <label class="custom-control-label" for="2faAuthentication"></label>
                      </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="col-md-12 d-flex justify-content-between align-items-center">                      
                      <span>
                        Phone Verification<br>
                        <small class="text-success">Active</small>
                      </span>
                      <div class="custom-control custom-switch pull-right">
                          <input type="checkbox" class="custom-control-input" id="phoneVerification">
                          <label class="custom-control-label" for="phoneVerification"></label>
                      </div>                  
                  </div>
                  <div class="col-md-12 d-flex justify-content-between align-items-center">                      
                      <span>
                        Affliate Programm<br>
                        <small class="text-warning">Referal Earnings</small>
                      </span>
                      <div class="custom-control custom-switch pull-right">
                          <input type="checkbox" class="custom-control-input" id="affliateProgramm">
                          <label class="custom-control-label" for="affliateProgramm"></label>
                      </div>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection