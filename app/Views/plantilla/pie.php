								<!-- PAGE CONTENT ENDS -->
								</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->

				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->


		<!--[if !IE]> -->
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->
		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/buttons.flash.min.js"></script>
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/buttons.colVis.min.js"></script>
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/dataTables.select.min.js"></script>


		<!-- ace scripts -->
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url() ?>/public/plantilla/css/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
	<script>
		$('#dynamic-table').DataTable({
			"order": [ [0, 'desc'] ],
			//"pageLength": 3,
			"language": {
				"emptyTable": "No existen datos",
				"lengthMenu": "Ver _MENU_ registros por página",
				"zeroRecords": "No encontrado",
				"info": "Mostrando _PAGE_ página de _PAGES_",
				"infoEmpty": "Ningún registro disponible",
				"infoFiltered": "(filtrado de _MAX_ registros)",
				"search":         "Buscar:",
				"paginate": {
					"first":      "Primero",
					"last":       "Último",
					"next":       "Sig.",
					"previous":   "Ant."
				}
			}
		});
	</script>
</html>
