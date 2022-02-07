<script src="<?= base_url() ?>/lib/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/lib/feather-icons/feather.min.js"></script>
<script src="<?= base_url() ?>/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>/lib/chart.js/Chart.bundle.min.js"></script>
<script src="<?= base_url() ?>/lib/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>/lib/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="<?= base_url() ?>/lib/prismjs/prism.js"></script>
<script src="<?= base_url() ?>/lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
<script src="<?= base_url() ?>/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
<script src="<?= base_url() ?>/lib/select2/js/select2.min.js"></script>

<script src="<?= base_url() ?>/assets/js/dashforge.js"></script>
<script src="<?= base_url() ?>/assets/js/dashforge.aside.js"></script>
<script src="<?= base_url() ?>/assets/js/dashforge.sampledata.js"></script>
<!-- <script src="<?= base_url() ?>/assets/js/dashboard-one.js"></script> -->

<!-- append theme customizer -->
<script src="<?= base_url() ?>/lib/js-cookie/js.cookie.js"></script>
<script src="<?= base_url() ?>/assets/js/dashforge.settings.js"></script>

<!-- Custom Scripts -->
<script>
    var site;
    let myChart;
    const cLabels = <?= json_encode($site) ?>;
    const cData = <?= json_encode($equipment) ?>;
    console.log("Labels : "+cLabels);
    console.log("Data : "+cData);
    let callAjax = function() {
        // myChart.clear();
        $('#dashboardSelect').change(function() {
            site = $(this).val();
            // console.log("Site: " + site);
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>Dashboard/ajaxGetValue',
                data: {
                    'site': site
                },
                success: function(data) {
                    let result = $.parseJSON(data);
                    let chartLabels = result.site;
                    let chartData = result.equipment;
                    // console.log(chartLabels);
                    // console.log(chartData);
                    if (site === "") {
                        // console.log("a");
                        chartLabels = cLabels;
                        chartData = cData;
                    }
                    myChart.data.labels = chartLabels;
                    myChart.data.datasets.data = chartData;
                    myChart.update();
                },
                error: function() {
                    console.log('test error');
                }
            });
            // createChart(chartLabel, chartData);
        });
    }

    function createChart(cLabels, cData) {
        const ctx = document.getElementById('dashboardChart');
        let ctxLabel = cLabels;
        let ctxData = cData;
        myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ctxLabel,
                datasets: [{
                    label: 'Nilai WO',
                    data: ctxData
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }
    $(document).ready(function() {
        $('#dtable').DataTable({
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ Data',
            }
        });

        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity
        });
        
        createChart(cLabels, cData);
        callAjax();
    });
</script>

<!-- Chart -->
<script>
    function updateUnit() {
        $('#unitid').find('option').remove();
        var siteid = $('#siteid').val();
        // alert(siteid);
        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>chart/ajaxGetSiteValue',
            data: {
                'siteid': siteid
            },
            
            // dataType: 'JSON',
            success: function(data) {
                let result = JSON.parse(data);
                // console.log(result.siteid);
                let value = result.value;
                let desc = result.desc;
                $("#unitid").append("<option value = 'All'>Select Site</option>");
                for (i in result.value)
                    $("#unitid").append("<option value = '" + value[i] + "'>" + desc[i] + "</option>");

                // console.log(siteid)
            },
            error: function(){
                console.log("eror gan") ;
                
            }
        })
    }

    function updateGraph() {
			var siteid = $("#siteid").val();
            // alert(siteid);
			var unitid = $("#unitid").val();
            // alert(unitid);
			$.ajax({
				dataType: 'json',
				url: "<?= base_url() ?>chart/ajaxGetChartValue",
				data: {
					'siteid': siteid,
					'unitid': unitid,
				},
				type: 'POST',
				success: function(data) {
                // let result = JSON.parse(data);
                console.log(data);
                // let value = result.value;
                // console.log(value);
                // let label = result.label;
					// chart.updateSeries([{
					// 	name: 'PKU WO',
					// 	data: data

					// }])
				}
			});

		}

    $(document).ready(function() {
        $('#siteid').on('change', function() {
            updateUnit();
            $('#unitid').trigger('change');
        });
        updateUnit();
        
    });
</script>


<script>
    function updateGraph() {
			var siteid = $("#siteid").val();
            // alert(siteid);
			var unitid = $("#unitid").val();
            // alert(unitid);
			$.ajax({
				dataType: 'json',
				url: "<?= base_url() ?>chart/ajaxGetChartValue",
				data: {
					'siteid': siteid,
					'unitid': unitid,
				},
				type: 'POST',
				success: function(data) {
                // let result = JSON.parse(data);
                console.log(data);
                // let value = result.value;
                // console.log(value);
                // let label = result.label;
					// chart.updateSeries([{
					// 	name: 'PKU WO',
					// 	data: data

					// }])
				}
			});

		}
        $('#unitid').on('change', function() {
				updateGraph();
				
		});
</script>