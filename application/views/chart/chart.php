  <div class="col-md-6 col-lg-4 col-xl-3 mg-t-10 mg-lg-t-0">
      <div class="card">
        <div class="card-header">
        <div class="form-group">
        <select class="custom-select" name="siteid" id="siteid">
                <option value="">Select Site</option>
                <?php foreach($site as $item): ?>
                    <option value="<?= $item->siteid ?>"><?= $item->diskripsi ?></option>
                <?php endforeach ?>
            </select>
        </div>
        
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
          <div class="form-group">
          <select class="custom-select" name="unitid" id="unitid">
            <option></option>
            </select>
          </div>
          
        </div><!-- card-header -->
        <div class="card-body pd-lg-25">
          <div class="row align-items-sm-end">
            <div class="col-lg-7 col-xl-8">
            <canvas id="pkuChart"></canvas>
            </div>          
          </div>
        </div><!-- card-body -->
      </div><!-- card -->
    </div>
  </div><!-- row -->

          





