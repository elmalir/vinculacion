<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Agregar Asistencia
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
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Área General
                                        <select class="form-control" name="selectAreaGeneral" id="idSelectAreaGeneral" onchange="select()">
												<?php 
												if (!empty($areasgenerales)) {
													foreach ($areasgenerales as $ag) {
														echo '<option value="'.$ag->id.'">'.$ag->nombre.'</option>';
													}
												}
												?>
											</select>
											<input type="hidden" name="areageneral" id="areageneral" value="">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Área Especifica
                                        	<select class="form-control" name="selectAreaEspecifica" id="idSelectAreaEspecifica" onchange="selectE()">

											</select>
											<input type="hidden" name="areaespecifica" id="areaespecifica" value="">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Persona
                                        <select class="form-control" name="selectPersona" id="idSelectPersona">
												<?php 
												if (!empty($personas)) {
													foreach ($personas as $p) {
														echo '<option value="'.$p->id.'">'.$p->nombre.'</option>';
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
										<div class="col-xs-12 col-lg-12">Fecha
											<input class="form-control" type="date" name="fecha" value="<?= set_value('fecha', $fechaHoy) ?>">
											<input type="hidden" name="fechaInicio" value="<?= $fechaInicio ?>">
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
											<textarea style="resize:none" class="form-control" name="problema" rows="2"><?= set_value('problema') ?></textarea>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Solución
										<textarea style="resize:none" class="form-control" name="solucion" rows="2"><?= set_value('solucion') ?></textarea>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Observación
										<textarea style="resize:none" class="form-control" name="observacion" rows="2"><?= set_value('observacion') ?></textarea>
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
var base_url = '<?php echo base_url() ?>';
window.onload = select;
	function select(){
		var comboG = document.getElementById("idSelectAreaGeneral");
		var selectedG = comboG.options[comboG.selectedIndex].text;
		$('#areageneral').val(selectedG);
		//var comboE = document.getElementById("idSelectAreaEspecifica");
		//var selectedE = comboE.options[comboE.selectedIndex].text;
		//$('#areaespecifica').val(selectedE);
		cargarSubArea();
	}
	function cargarSubArea() {
		var comboG = document.getElementById("idSelectAreaGeneral");
		var idArea = comboG.options[comboG.selectedIndex].value;
		//console.log('idArea', idArea);
		$.ajax({
			type: "GET",
			url: base_url+'/asistencias/subAreas/'+idArea,
			//data: {"areageneral_id": idArea },
			success:function(resp){
					console.log('resp', resp);
					$("#idSelectAreaEspecifica").html(resp);
					selectE();
				}
		});
	}
	function selectE(){
		//console.log('selectE');
		var comboE = document.getElementById("idSelectAreaEspecifica");
		var selectedE = comboE.options[comboE.selectedIndex].text;
		$('#areaespecifica').val(selectedE);
	}
	function cancelar(){
    	window.location="<?php echo base_url()?>/asistencias";
  	}
</script>
