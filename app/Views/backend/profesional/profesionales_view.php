<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-sm">
							<thead>
								<tr>
									<th>Profecional</th>
									<th>Correo</th>
									<th>Contacto</th>
									<th>Dirección</th>
									<th>Estado</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if (!empty($profesionales)) {
									foreach ($profesionales as $profesional) { ?>
										<tr>
											<td><?php echo $profesional->Identificacion.' '.$profesional->Nombre; ?></td>
											<td><?php echo $profesional->Correo; ?>
											<td><?php echo $profesional->Telefono.' '.$profesional->Celular; ?>
											<td><?php echo $profesional->Direccion; ?>
										</td>
										<td><div align="center">
											
											<?php
											if ($profesional->Activo == 0) {
												echo '<span class="label label-sm label-inverse">Inactivo</span>';
											}else{
												if ($profesional->Activo == 1) {
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
											<a class="blue" onclick="ver('<?php echo $profesional->Id; ?>')" href="#">
												<i class="ace-icon fas fa-eye bigger-130" style="color:#6E6E6E"></i>
											</a>
											<a class="green" onclick="editar('<?php echo $profesional->Id; ?>')" href="#">
												<i class="ace-icon fas fa-edit bigger-130" style="color:#6E6E6E"></i>
											</a>
											<a class="red" onclick="eliminar('<?php echo $profesional->Id; ?>', '<?php echo $profesional->Nombre; ?>')" href="#">
												<i class="ace-icon fas fa-window-close bigger-130" style="color:#6E6E6E"></i>
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