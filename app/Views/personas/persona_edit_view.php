<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Editar Persona
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
					<form class="form-horizontal" method="post" action="<?= site_url('/personas/guardar') ?>">
						<div class="row">
							<div class="col-xs-12 col-lg-6">
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Identificación
                                            <input type="hidden" name="id" value="<?= $id ?>">
											<input class="form-control" type="text" name="identificacion" value="<?= set_value('identificacion', $persona->identificacion) ?>" maxlength="13">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Nombre
											<input class="form-control" type="text" name="nombre" value="<?= set_value('nombre', $persona->nombre) ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Correo
											<input class="form-control" type="text" name="correo" value="<?= set_value('correo', $persona->correo) ?>" maxlength="60">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Dirección
											<input class="form-control" type="text" name="direccion" value="<?= set_value('direccion', $persona->direccion) ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Teléfono
											<input class="form-control" type="text" name="telefono" value="<?= set_value('telefono', $persona->telefono) ?>" maxlength="40">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								
							</div><!--fin de columna izquierda -->
							<div class="col-xs-12 col-lg-6">
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Celular
											<input class="form-control" type="text" name="celular" value="<?= set_value('celular', $persona->celular) ?>" maxlength="40">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Observación
											<input class="form-control" type="text" name="observacion" value="<?= set_value('observacion', $persona->observacion) ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Estado
                                            <select class="form-control" name="selectActivo" id="idSelectActivo">
                                            <?php 
                                                if ($persona->activo == 1) {
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
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Gremio
										<select class="form-control" name="selectGremio" id="idSelectGremio">
												<?php 
												if (!empty($gremios)) {
													foreach ($gremios as $g) {
                                                        if ($g->id == $persona->gremio_id) {
                                                            echo '<option selected value="'.$g->id.'">'.$g->razonSocial.'</option>';
                                                        }else{
                                                            echo '<option value="'.$g->id.'">'.$g->razonSocial.'</option>';
                                                        }
													}
												}
												?>
											</select>
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
    	window.location="<?php echo base_url()?>/personas";
  	}
</script>