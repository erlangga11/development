    <script src="<?php echo base_url(); ?>/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/lib/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url(); ?>/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>/lib/chart.js/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/lib/jquery.flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>/lib/jquery.flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>/lib/jquery.flot/jquery.flot.resize.js"></script>

    <script src="<?= base_url() ?>/lib/prismjs/prism.js"></script>
	<script src="<?= base_url() ?>/lib/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
	<script src="<?= base_url() ?>/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url() ?>/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
	<script src="<?= base_url() ?>/lib/select2/js/select2.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/js/dashforge.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/dashforge.aside.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/dashforge.sampledata.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/dashboard-two.js"></script>

    <!-- append theme customizer -->
    <script src="<?php echo base_url(); ?>/lib/js-cookie/js.cookie.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/dashforge.settings.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>

    <script src="<?php echo base_url(); ?>/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/bostrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/bostrap/loader.js"></script>
    
    <script>
		$(document).ready(function() {
			$('#dtable').DataTable({
				language: {
					searchPlaceholder: 'Search...',
					sSearch: '',
					lengthMenu: 'MENU Data',
				}
			});

			$('.dataTables_length select').select2({
				minimumResultsForSearch: Infinity
			});
		});
	</script>
  </body>
</html>