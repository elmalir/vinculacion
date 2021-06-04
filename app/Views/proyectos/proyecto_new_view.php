<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Agregar Proyecto
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
					<form class="form-horizontal" method="post" action=" <?= site_url('/proyectos/guardar') ?>" >
						<div class="row">
							<div class="col-xs-12 col-lg-6">
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Código
											<input class="form-control" type="text" name="codigo" value="<?= set_value('codigo') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Nombre
											<input class="form-control" type="text" name="nombre" value="<?= set_value('nombre') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Periodo
											<input class="form-control" type="text" name="periodo" value="<?= set_value('periodo') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Área
											<input class="form-control" type="text" name="area" value="<?= set_value('area') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Línea
											<input class="form-control" type="text" name="linea" value="<?= set_value('linea') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Dominio
											<input class="form-control" type="text" name="dominio" value="<?= set_value('dominio') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Proyecto
											<input class="form-control" type="text" name="proyecto" value="<?= set_value('proyecto') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Facultad
											<input class="form-control" type="text" name="facultad" value="<?= set_value('facultad') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
							</div><!--fin de columna izquierda -->
							<div class="col-xs-12 col-lg-6">
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Carrera
											<input class="form-control" type="text" name="carrera" value="<?= set_value('carrera') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Coordinador
											<input class="form-control" type="text" name="coordinador" value="<?= set_value('coordinador') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Tutor
											<input class="form-control" type="text" name="tutor" value="<?= set_value('tutor') ?>" maxlength="60">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Cooperantes
											<input class="form-control" type="text" name="cooperantes" value="<?= set_value('cooperantes') ?>" maxlength="60">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Encargado
											<input class="form-control" type="text" name="encargado" value="<?= set_value('encargado') ?>" maxlength="60">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Ciudad
											<input class="form-control" type="text" name="ciudad" value="<?= set_value('ciudad') ?>" maxlength="60">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">Tiempo de duración en horas
											<input class="form-control" type="text" name="tiempo" value="<?= set_value('tiempo') ?>" maxlength="20">
										</div>
									</div>
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">No. Participantes
											<input class="form-control" type="text" name="numeroParticipantes" value="<?= set_value('numeroParticipantes') ?>" maxlength="20">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">No. Veneficiarios
											<input class="form-control" type="text" name="numeroVeneficiarios" value="<?= set_value('numeroVeneficiarios') ?>" maxlength="20">
										</div>
									</div>
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">No. Veneficiarios
											<input class="form-control" type="text" name="numeroTutores" value="<?= set_value('numeroTutores') ?>" maxlength="20">
										</div>
									</div>
								</div>
								<div class="space-4"></div>	
							</div><!--fin de columna derecha -->


						</div><!--fin del contenedor -->

						<div class="hr hr-12 dotted hr-double"></div>

						<div class="form-actions center">
							<button class="btn btn-sm" onclick="cancelar()" type="reset">
								<i class="ace-icon fa fa-times"></i>
								Cancelar
							</button>
							<button type="submit" class="btn btn-sm btn-success" id="idBtnGuardarPersona">
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
    	window.location="<?php echo base_url()?>/proyectos";
  	}
</script>
