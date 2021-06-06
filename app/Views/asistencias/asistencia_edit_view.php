<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Editar Asistencia
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
					<form class="form-horizontal" method="post" action=" <?= site_url('/asistencias/guardar') ?>" >
						<div class="row">
							<div class="col-xs-12 col-lg-6">
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Área General
											<input type="hidden" name="id" value="<?= $id ?>">
											<select class="form-control" name="selectAreaGeneral" id="idSelectGrupo">
												<?php 
													echo '<option value="">'.$asistencia[0]->areageneral.'</option>';
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Área Especifica
                                        	<select class="form-control" name="selectAreaEspecifica" id="idSelectAreaEspecifica">
												<?php 
												echo '<option value="">'.$asistencia[0]->areaespecifica.'</option>';
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Persona
                                        	<select class="form-control" name="selectPersona" id="idSelectPersona">
												<?php 
												echo '<option value="">'.$asistencia[0]->persona.'</option>';
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Fecha
											<input class="form-control" type="date" name="fecha" value="<?= set_value('fecha', $asistencia[0]->fecha) ?>" readonly>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
							</div><!--fin de columna izquierda -->
							<div class="col-xs-12 col-lg-6">
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Ploblema
											<textarea style="resize:none" class="form-control" name="problema" rows="2"><?= set_value('problema', $asistencia[0]->problema) ?></textarea>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Solución
										<textarea style="resize:none" class="form-control" name="solucion" rows="2"><?= set_value('solucion', $asistencia[0]->solucion) ?></textarea>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Observación
										<textarea style="resize:none" class="form-control" name="observacion" rows="2"><?= set_value('observacion', $asistencia[0]->observacion) ?></textarea>
										</div>
									</div>
								</div>
							</div><!--fin de columna derecha -->
						</div>

						<div class="hr hr-12 dotted hr-double"></div>

						<div class="form-actions center">
							<button class="btn btn-sm" onclick="cancelar()" type="reset">
								<i class="ace-icon fa fa-times"></i>
								Cancelar
							</button>
							<button type="submit" class="btn btn-sm btn-success" id="idBtnGuardarUsuario">
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
    	window.location="<?php echo base_url()?>/asistencias";
  	}
</script>
