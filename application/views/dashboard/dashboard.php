<div class="col-12">
    <div class="card">
        <div class="card-header">
            <select name="dashboardSelect" id="dashboardSelect">
                <option value="">Select Data</option>
                <?php foreach($siteid as $item): ?>
                    <option value="<?= $item->siteid ?>"><?= $item->siteid ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="card-body">
            <!-- <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Conversion Rate</h6> -->
            <canvas id="dashboardChart"></canvas>
        </div>
        
    </div>
</div><!-- col -->


        <!-- <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">google.charts.load('current', {'packages':['corechart', 'bar']});</script>
        <script>
    // google.charts.load('current', {
    //     packages: ['corechart', 'bar']
    // });
    google.charts.setOnLoadCallback();

    function load_monthwise_data(siteid, title) {
        var temp_title = title + ' ' + siteid;
        $.ajax({
            site: "<?= site_url() ?>Dashboard/fetch_data",
            method: "POST",
            data: {
                "siteid": siteid
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
                title: "Diskripsi"
            },
            vAxis: {
                title: 'Nilai_wo'
            },
            chartArea: {
                width: '80%',
                height: '100%'
            }
        }

        var chart = new google.visualization.ColumnChart(document.getElementById('chartarea'));

        chart.draw(data, options);
    }
</script>  -->