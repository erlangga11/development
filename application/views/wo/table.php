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
                  <li class="breadcrumb-item active" aria-current="page">PKU WO</li>
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
            <div class="col mg-t-10">
              <!-- <div class="card card-dashboard-table"> -->
                <div class="table-responsive">
                <table class="table table-striped">
                <thead class="thead-dark">
                      <tr>
                        
                        <th>Assetnum</th>
                        <th>Wonum</th>                      
                        <th>Wodesc</th>
                        <th>Wtnum</th>
                        <th>Taskdesc</th>
                        <th>Priority</th>
                        <th>Wtstatus</th>
                        <th>Reportdate</th>
                        <th>Worktype</th>
                      </tr>                     
                    </thead>
                    <tbody>
                    <?php
                        // $count =0;
                        foreach ($data_wo as $wo){?>
                          <tr>
                            <td><a href=""><?php echo $wo->assetnum ?></a></td>
                            <td><?php echo  $wo->wonum ?></td>
                            <td><?php echo  $wo->wodesc  ?></td>
                            <td><?php echo  $wo->wtnum ?></td>
                            <td><?php echo  $wo->taskdesc  ?></td>
                            <td><?php echo  $wo->priority  ?></td>
                            <td><?php echo  $wo->wtstatus  ?></td>
                            <td><?php echo  $wo->reportdate?></td>
                            <td><?php echo  $wo->worktype  ?></td>

                          </tr>
                    <?php } ?>
                      
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              <!-- </div>card -->
            </div><!-- col -->
          </div><!-- row -->
         

        </div><!-- container -->
      </div>
    </div>
          


