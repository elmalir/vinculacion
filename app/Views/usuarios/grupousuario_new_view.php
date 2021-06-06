<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Agregar Grupo de Usuarios
					<small class="orange">
					<?php 
					if (!empty($errores)) {
						echo '<section class="current alert-danger">';
						echo '<ul>';
						foreach ($errores as $e => $v) {
							echo '<li>'.$v.'</li>';
						}
						echo '</ul>';
        				echo '</section>';
					}
					?>
					</small>
				</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main no-padding">
					<form class="form-horizontal" method="post" action=" <?= site_url('/gruposusuarios/guardar') ?>" >
						<div class="row">
							<div class="col-xs-12 col-lg-6">
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">Nombre
											<input type="hidden" name="id" value="">
											<input class="form-control" type="text" name="nombre" value="<?= set_value('nombre') ?>" maxlength="20">
										</div>
									</div>
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Observacaión
											<input class="form-control" type="text" name="observacion" value="<?= set_value('observacion') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Proyecto
											<select class="form-control" name="selectProyecto" id="idSelectProyecto">
												<?php 
												if (!empty($proyectos)) {
													foreach ($proyectos as $p) {
														echo '<option value="'.$p->id.'">'.$p->nombre.'</option>';
													}
												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
							</div><!--fin de columna izquierda -->
							<div class="col-xs-12 col-lg-6">

							</div><!--fin de columna derecha -->


						</div><!--fin del contenedor -->

						<div class="hr hr-12 dotted hr-double"></div>

						<div class="form-actions center">
							<button class="btn btn-sm" onclick="cancelar()" type="reset">
								<i class="ace-icon fa fa-times"></i>
								Cancelar
							</button>
							<button type="submit" class="btn btn-sm btn-success" id="idBtnGuardarGrupo">
								<i class="ace-icon fa fa-check"></i>
								Guardar
							</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div><!-- /.col -->
</div><!-- /.row -->

<script type="text/javascript">
	function cancelar(){
    	window.location="<?php echo base_url()?>/gruposusuarios";
  	}
</script>
