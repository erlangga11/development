<div class="content ht-100v pd-0">
      <div class="content-header">
        <div class="content-search">
          <i data-feather="search"></i>
          <input type="search" class="form-control" placeholder="Search...">
        </div>
        <nav class="nav">
          <a href="" class="nav-link"><i data-feather="help-circle"></i></a>
          <a href="" class="nav-link"><i data-feather="grid"></i></a>
          <a href="" class="nav-link"><i data-feather="align-left"></i></a>
        </nav>
      </div><!-- content-header -->

      <div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">PKU Chart</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="save" class="wd-10 mg-r-5"></i> Save</button>
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="upload" class="wd-10 mg-r-5"></i> Export</button>
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="share-2" class="wd-10 mg-r-5"></i> Share</button>
              <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="sliders" class="wd-10 mg-r-5"></i> Settings</button>
            </div>
          </div>
          <div class="row row-xs">
  <div class="col-md-6 col-lg-4 col-xl-3 mg-t-10 mg-lg-t-0">
      <div class="card">
        <div class="card-header">
          <h6 class="mg-b-0">Sessions By Channel</h6>
        </div><!-- card-header -->
        <div class="card-body pd-lg-25">
          <div class="chart-seven"><canvas id="chartDonut"></canvas></div>
        </div><!-- card-body -->
        <div class="card-footer pd-20">
          <div class="row">
            <div class="col-6">
              <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 tx-nowrap mg-b-5">Organic Search</p>
              <div class="d-flex align-items-center"> 
                <div class="wd-10 ht-10 rounded-circle bg-pink mg-r-5"></div>
                <h6 class="tx-normal tx-rubik mg-b-0">1,320 <small class="tx-color-04">25%</small></h6>
              </div>
            </div><!-- col -->
            <div class="col-6">
              <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 mg-b-5">Email</p>
              <div class="d-flex align-items-center">
                <div class="wd-10 ht-10 rounded-circle bg-primary mg-r-5"></div>
                <h6 class="tx-normal tx-rubik mg-b-0">987 <small class="tx-color-04">20%</small></h6>
              </div>
            </div><!-- col -->
            <div class="col-6 mg-t-20">
              <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 mg-b-5">Referrral</p>
              <div class="d-flex align-items-center">
                <div class="wd-10 ht-10 rounded-circle bg-teal mg-r-5"></div>
                <h6 class="tx-normal tx-rubik mg-b-0">2,010 <small class="tx-color-04">30%</small></h6>
              </div>
            </div><!-- col -->
            <div class="col-6 mg-t-20">
              <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 mg-b-5">Social Media</p>
              <div class="d-flex align-items-center">
                <div class="wd-10 ht-10 rounded-circle bg-orange mg-r-5"></div>
                <h6 class="tx-normal tx-rubik mg-b-0">1,054 <small class="tx-color-04">25%</small></h6>
              </div>
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card-footer -->
      </div><!-- card -->
    </div>
    <div class="col-lg-8 col-xl-9">
      <div class="card">
        <div class="card-header bd-b-0 pd-t-20 pd-lg-t-25 pd-l-20 pd-lg-l-25 d-flex flex-column flex-sm-row align-items-sm-start justify-content-sm-between">
          <div>
            <h6 class="mg-b-5">Website Audience Metrics</h6>
            <p class="tx-12 tx-color-03 mg-b-0">Audience to which the users belonged while on the current date range.</p>
          </div>
          <div class="btn-group mg-t-20 mg-sm-t-0">
            <button class="btn btn-xs btn-white btn-uppercase">Day</button>
            <button class="btn btn-xs btn-white btn-uppercase">Week</button>
            <button class="btn btn-xs btn-white btn-uppercase active">Month</button>
          </div><!-- btn-group -->
        </div><!-- card-header -->
        <div class="card-body pd-lg-25">
          <div class="row align-items-sm-end">
            <div class="col-lg-7 col-xl-8">
              <div class="chart-six"><canvas id="chartBar1"></canvas></div>
            </div>          
          </div>
        </div><!-- card-body -->
      </div><!-- card -->
    </div>
  </div><!-- row -->
</div><!-- container -->

          </div>
          
        </div>
      </div><!-- card-body -->
    </div><!-- card -->
  </div>
  
  
</div><!-- row -->
         

        </div><!-- container -->
      </div>
    </div>
          








