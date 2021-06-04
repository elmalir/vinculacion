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
											<input type="text" name="id" value="<?= $id ?>">
											<input class="form-control" type="text" name="codigo" value="<?= $proyecto->codigo ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Nombre
											<input class="form-control" type="text" name="nombre" value="<?= $proyecto->nombre ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Periodo
											<input class="form-control" type="text" name="periodo" value="<?= $proyecto->periodo ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Área
											<input class="form-control" type="text" name="area" value="<?= $proyecto->area ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Línea
											<input class="form-control" type="text" name="linea" value="<?= $proyecto->linea ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Dominio
											<input class="form-control" type="text" name="dominio" value="<?= $proyecto->dominio ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Proyecto
											<input class="form-control" type="text" name="proyecto" value="<?= $proyecto->proyecto ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Facultad
											<input class="form-control" type="text" name="facultad" value="<?= $proyecto->facultad ?>" maxlength="255">
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
											<input class="form-control" type="text" name="carrera" value="<?= $proyecto->carrera ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Coordinador
											<input class="form-control" type="text" name="coordinador" value="<?= $proyecto->coordinador ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Tutor
											<input class="form-control" type="text" name="tutor" value="<?= $proyecto->tutor ?>" maxlength="60">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Cooperantes
											<input class="form-control" type="text" name="cooperantes" value="<?= $proyecto->cooperantes ?>" maxlength="60">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Encargado
											<input class="form-control" type="text" name="encargado" value="<?= $proyecto->encargado ?>" maxlength="60">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Ciudad
											<input class="form-control" type="text" name="ciudad" value="<?= $proyecto->ciudad ?>" maxlength="60">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">Tiempo de duración en horas
											<input class="form-control" type="text" name="tiempo" value="<?= $proyecto->tiempo ?>" maxlength="20">
										</div>
									</div>
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">No. Participantes
											<input class="form-control" type="text" name="numeroParticipantes" value="<?= $proyecto->numeroParticipantes ?>" maxlength="20">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">No. Veneficiarios
											<input class="form-control" type="text" name="numeroVeneficiarios" value="<?= $proyecto->numeroVeneficiarios ?>" maxlength="20">
										</div>
									</div>
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">No. Veneficiarios
											<input class="form-control" type="text" name="numeroTutores" value="<?= $proyecto->numeroTutores ?>" maxlength="20">
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
