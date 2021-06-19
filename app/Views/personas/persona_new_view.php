<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Agregar Persona
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
											<input class="form-control" type="text" name="identificacion" value="<?= set_value('identificacion') ?>" maxlength="13">
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
										<div class="col-xs-12 col-lg-12">Correo
											<input class="form-control" type="text" name="correo" value="<?= set_value('correo') ?>" maxlength="60">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Provincia
										<select class="form-control" name="selectProvincia" id="idSelectProvincia" onchange="cargarCiudad()">
												<?php 
												if (!empty($provincias)) {
													foreach ($provincias as $prov) {
														echo '<option value="'.$prov->Id.'">'.$prov->Nombre.'</option>';
													}
												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Ciudad
											<select class="form-control" name="selectCiudad" id="idSelectCiudad" name="selectCiudad">
												
											</select>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Parroquia
											<input class="form-control" type="text" name="parroquia" value="<?= set_value('parroquia') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Dirección
											<input class="form-control" type="text" name="direccion" value="<?= set_value('direccion') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Teléfono
											<input class="form-control" type="text" name="telefono" value="<?= set_value('telefono') ?>" maxlength="40">
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
											<input class="form-control" type="text" name="celular" value="<?= set_value('celular') ?>" maxlength="40">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Sexo
										<select class="form-control" name="selectSexo" id="idSelectSexo">
												<option selected value="M">Masculino</option>
                                                <option value="F">Femenino</option>
											</select>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Fecha de Nacimiento
											<input class="form-control" type="date" name="f_nacimiento" value="<?= set_value('f_nacimiento') ?>" maxlength="40">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Discapacidad
											<input class="form-control" type="text" name="dicapacidad" value="<?= set_value('dicapacidad') ?>" maxlength="40">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Pueblo y Nacionalidad
										<input class="form-control" type="text" name="nacionalidad" value="<?= set_value('nacionalidad') ?>" maxlength="40">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Movilidad
											<input class="form-control" type="text" name="movilidad" value="<?= set_value('movilidad') ?>" maxlength="40">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Observación
											<input class="form-control" type="text" name="observacion" value="<?= set_value('observacion') ?>" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Estado
										<select class="form-control" name="selectActivo" id="idSelectActivo">
												<option selected value="1">Activo</option>
                                                <option value="0">Inactivo</option>
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
														echo '<option value="'.$g->id.'">'.$g->razonSocial.'</option>';
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
 window.onload = cargarCiudad;
 var base_url = '<?php echo base_url(); ?>/';
 function cargarCiudad() {
    var idPrv = $('#idSelectProvincia').val();
    $.ajax({
        type: "GET",
        url: base_url+'personas/ciudades/'+idPrv,
        data: {"idProvincia": idPrv },
        success:function(resp){
                //console.log('resp', resp);
                $("#idSelectCiudad").html(resp);
            }
        });
}
	function cancelar(){
    	window.location="<?php echo base_url()?>/personas";
  	}
</script>
