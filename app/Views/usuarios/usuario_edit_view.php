<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Editar Usuario
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
					<form class="form-horizontal" method="post" action=" <?= site_url('/usuarios/guardar') ?>" >
						<div class="row">
							<div class="col-xs-12 col-lg-6">
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Identificación
											<input type="text" name="id" value="<?= $id ?>">
											<input class="form-control" type="text" name="identificacion" value="<?= $usuario->identificacion ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Nombre
											<input class="form-control" type="text" name="nombre" value="<?= $usuario->nombre ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Correo
											<input class="form-control" type="text" name="correo" value="<?= $usuario->correo ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Contraseña
											<input class="form-control" type="password" name="contrasenia" value="" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Dirección
											<input class="form-control" type="text" name="direccion" value="<?= $usuario->direccion ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
							</div><!--fin de columna izquierda -->
							<div class="col-xs-12 col-lg-6">
                                <div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Teléfono
											<input class="form-control" type="text" name="telefono" value="<?= $usuario->telefono ?>" maxlength="40">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Celular
											<input class="form-control" type="text" name="celular" value="<?= $usuario->celular ?>" maxlength="40">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Observación
											<input class="form-control" type="text" name="observacion" value="<?= $usuario->observacion ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Grupo de Usuario
                                        	<select class="form-control" name="selectGrupo" id="idSelectGrupo">
												<?php 
												if (!empty($grupos)) {
													foreach ($grupos as $gu) {
														if ($gu->id == $usuario->grupousuario_id) {
															echo '<option selected value="'.$gu->id.'">'.$gu->nombre.'</option>';
														}else{
															echo '<option value="'.$gu->id.'">'.$gu->nombre.'</option>';
														}
													}
												}
												?>
											</select>
										</div>
									</div>
								</div>
								
							</div>
							<div class="space-4"></div>	
						</div><!--fin de columna derecha -->

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
    	window.location="<?php echo base_url()?>/usuarios";
  	}
</script>
