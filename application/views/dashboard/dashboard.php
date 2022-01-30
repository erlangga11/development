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
              <div>
                <h6 class="mg-b-5">Peta Kesehatan Unit PT PJB</h6>
                <p class="tx-12 tx-color-03 mg-b-0"></p>
              </div>
              <div class="col-md-3">
                <select name="siteid" id="siteid" class="form-control">
                  <option value="">Select Site</option>
                  <?php
                  foreach ($site_list->result_array() as $row) {
                    echo '<option value="' . $row["siteid"] . '">' . $row["siteid"] . '</option>';
                  }
                  ?>

                </select>
              </div>
            </div><!-- card-header -->
            <div class="card-body pd-lg-25">
              <div class="row align-items-sm-end">
                <div class="col-lg-7 col-xl-8">
                  <div id="chart_area" style="width: 1000px; height: 620px;"></div>
                </div>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {
    packages: ['corechart', 'bar']
  });
  google.charts.setOnLoadCallback();

  function load_monthwise_data(site, title) {
    var temp_title = title + ' ' + site;
    $.ajax({
      url: "<?php echo base_url(); ?>Dashboard/fetch_data",
      method: "POST",
      data: {
        siteid: siteid
      },
      dataType: "JSON",
      success: function(data) {
        drawMonthwiseChart(data, temp_title);
      }
    })
  }

  function drawMonthwiseChart(equipment, chart_main_title) {
    var jsonData = equipment;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'diskripsi');
    data.addColumn('number', 'nilai_wo');

    $.each(jsonData, function(i, jsonData) {
      var diskripsi = jsonData.diskripsi;
      var nilai_wo = parseFloat($.trim(jsonData.nilai_wo));
      data.addRows([
        [diskripsi, nilai_wo]
      ]);
    });

    var options = {
      title: chart_main_title,
      hAxis: {
        title: "diskripsi"
      },
      vAxis: {
        title: 'nilai_wo'
      },
      chartArea: {
        width: '80%',
        height: '85%'
      }
    }

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));

    chart.draw(data, options);
  }
</script>

<script>
  $(document).ready(function() {
    $('#siteid').change(function() {
      var siteid = $(this).val();
      if (siteid != '') {
        load_monthwise_data(siteid, 'Month Wise Profit Data For');
      }
    });
  });
</script>