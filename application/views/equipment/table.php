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
                  <li class="breadcrumb-item active" aria-current="page">PKU Equipment</li>
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
            <div class="col-lg-12 col-xl-12">
              <div class="card shadow">
                <div class="card-header bd-b-0 pd-t-20 pd-lg-t-25 pd-l-20 pd-lg-l-25 d-flex flex-column flex-sm-row align-items-sm-start justify-content-sm-between">
                     <!-- <div class="card card-dashboard-table"> -->
                <div class="table-responsive">
                <table class="table table-striped">
                <thead class="thead-dark">
                      <tr>                     
                        <th>Equipno</th>
                        <th>Deskripsi</th>
                        <th>Nilai_WO</th>
                        <th>Nilai_PDM</th>
                        <th>Nilai_Total</th>
                      </tr>                     
                    </thead>
                    <tbody>
                    <?php
                        // $count =0;
                        foreach ($data_equipment as $eq){?>
                          <tr>
                            <td><a href=""><?php echo $eq->equipno ?></a></td>
                            <td><?php echo $eq->diskripsi ?></td>
                            <td><?php echo $eq->nilai_wo ?></td>
                            <td><?php echo $eq->nilai_pdm ?></td>
                            <td><?php echo $eq->nilai ?></td>
                          </tr>
                    <?php } ?>
                      
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              <!-- </div>card --> 
              </div>
              </div>
            </div>
          </div>

        </div><!-- container -->
      </div>
    </div>
          