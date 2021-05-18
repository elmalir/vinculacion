<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-sm">
							<thead>
								<tr>
									<th>Paciente</th>
									<th>Correo</th>
									<th>Contacto</th>
									<th>Dirección</th>
									<th>Estado</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if (!empty($pacientes)) {
									foreach ($pacientes as $paciente) { ?>
										<tr>
											<td><?php echo $paciente->Identificacion.' '.$paciente->Nombre; ?></td>
											<td><?php echo $paciente->Correo; ?>
											<td><?php echo $paciente->Telefono.' '.$paciente->Celular; ?>
											<td><?php echo $paciente->Direccion; ?>
										</td>
										<td><div align="center">

											<?php
											if ($paciente->Activo == 0) {
												echo '<span class="label label-sm label-inverse">Inactivo</span>';
											}else{
												if ($paciente->Activo == 1) {
													echo '<span class="label label-sm label-success">Activo</span>';
												}else{
													echo '<span class="label label-sm label-info">Otro</span>';
												}
											}
											?>
										</div>
									</td>
									<td>
										<div class="action-buttons" align="center">
											<a class="" onclick="ver('<?php echo $paciente->Id; ?>')" href="#">
												<i class="ace-icon fas fa-eye bigger-130" style="color:#52a5f3 "></i>
											</a>
											<a class="" href="<?php echo base_url().'/admin/editarPaciente/'.$paciente->Id; ?>">
												<i class="ace-icon fas fa-edit bigger-130" style="color:#06bd3d"></i>
											</a>
											<a class="" onclick="eliminar('<?php echo $paciente->Id; ?>', '<?php echo $paciente->Nombre; ?>')" href="#">
												<i class="ace-icon fas fa-window-close bigger-130" style="color:#f64d55"></i>
											</a>
										</div>
									</td>
								</tr>
									<?php }
								}?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function eliminar(id, nombre){
		var baseurl = "<?php echo base_url(); ?>/";
		console.log(id, nombre, baseurl);
		Swal.fire({
			title: '¿Desea elimiar el registro?',
			text: nombre,
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonText: 'Cancelar',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, eliminar!'
		}).then((result) => {
			if (result.value) {
			// Agregar ajax
			$.ajax({
				type: "POST",
				url: baseurl+"admin/eliminarPaciente",
				data: {"id": id},
				success: function(){
					Swal.fire(
						'Eliminado!',
						'Registro eliminado.',
						'success'
						).then((result) =>{
							if (result.value) {
								window.location.href = "listPacientes";
							}
						} )
					}
					,statusCode: {
						400: function(data){
							var json = JSON.parse(data.responseText);
							Swal.fire(
								'Error!',
								json.sms,
								'error'
								)
						},
						500: function(data){
							console.log("el 500 ");
							var json = JSON.parse(data.responseText);
							Swal.fire(
								'Error!',
								json.sms,
								'error'
								)
						}
					}
				});
			}
			})
	};
</script>