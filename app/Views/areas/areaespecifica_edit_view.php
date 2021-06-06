<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Editar Área General
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
					<form class="form-horizontal" method="post" action=" <?= site_url('/areasespecificas/guardar') ?>" >
						<div class="row">
							<div class="col-xs-12 col-lg-6">
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">Nombre
											<input type="hidden" name="id" value="<?= $id ?>">
											<input class="form-control" type="text" name="nombre" value="<?= set_value('nombre', $area->nombre) ?>" maxlength="100">
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
										<div class="col-xs-12 col-lg-12">Descripción
											<input class="form-control" type="text" name="descripcion" value="<?= set_value('descripcion', $area->descripcion) ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Estado
											<select class="form-control" name="selectActivo" id="idSelectActivo">
												<?php 
                                                if ($area->activo == 1) {
                                                    echo '<option selected value="1">Activo</option>';
                                                    echo '<option value="0">Inactivo</option>';
                                                }else{
                                                    echo '<option value="1">Activo</option>';
                                                    echo '<option selected value="0">Inactivo</option>';
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
						</div><!--fin del row -->
						<div class="hr hr-12 dotted hr-double"></div>

						<div class="form-actions center">
							<button class="btn btn-sm" onclick="cancelar()" type="reset">
								<i class="ace-icon fa fa-times"></i>
								Cancelar
							</button>
							<button type="submit" class="btn btn-sm btn-success" id="idBtnGuardarAreaGeneral">
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
    	window.location="<?php echo base_url()?>/areasgenerales";
  	}
</script>