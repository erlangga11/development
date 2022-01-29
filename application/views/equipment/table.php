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
          <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="save" class="wd-10 mg-r-5"></i> Export Excel</button>
          <button onclick="location.href='Equipment/pdf'" class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="upload" class="wd-10 mg-r-5"></i> Export PDF</button>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5">
          <form action="<?php echo base_url('Equipment') ?>" method="POST">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search keyword.." name="keyword" autocomplete="off" autofocus>
              <div class="input-group-append">
                <input class="btn btn-primary" type="submit" name="submit">
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="row row-xs">
        <div class="col-lg-12 col-xl-12">
          <h5>Result Search : <?php echo $equipment[1] ?></h5>
          <div class="card shadow">
            <div class="card-header bd-b-0 pd-t-20 pd-lg-t-25 pd-l-20 pd-lg-l-25 d-flex flex-column flex-sm-row align-items-sm-start justify-content-sm-between">
              <!-- <div class="card card-dashboard-table"> -->
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead class="thead-dark">
                    <tr>
                      <th>No</th>
                      <th>Equipno</th>
                      <th>Deskripsi</th>
                      <th>Nilai_WO</th>
                      <th>Nilai_PDM</th>
                      <th>Nilai_Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (empty($equipment)) { ?>
                      <tr>
                        <td colspan="6">
                          <div class="alert alert-danger" role="alert">
                           Data Tidak Ditemukan !
                          </div>
                        </td>
                      </tr>
                    <?php  } ?>


                    <?php
                    //  $count =1;
                    foreach ($equipment[0] as $eq) { ?>
                      <tr>
                        <td><?php echo ++$start ?></td>
                        <td><a href=""><?php echo $eq->equipno ?></a></td>
                        <td><?php echo $eq->diskripsi ?></td>
                        <td><?php echo $eq->nilai_wo ?></td>
                        <td><?php echo $eq->nilai_pdm ?></td>
                        <td><?php echo $eq->nilai ?></td>
                      </tr>
                    <?php } ?>

                  </tbody>
                </table>

                <!--Tampilkan pagination-->
                <?php echo $this->pagination->create_links(); ?>

              </div><!-- table-responsive -->
              <!-- </div>card -->
            </div>
          </div>
        </div>
      </div>

    </div><!-- container -->
  </div>
</div>