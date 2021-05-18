<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-sm">
							<thead>
								<tr>
									<th>Empresa</th>
									<th>Correo</th>
									<th>Contacto</th>
									<th>Dirección</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if (!empty($empresas)) {
									foreach ($empresas as $emp) { ?>
										<tr>
											<td><?php echo $emp->RazonSocial; ?>
												<br>
												<small><?php echo $emp->Identificacion ?></small>
											</td>
											<td><?php echo $emp->Correo; ?>
											<td><?php echo $emp->Telefono.' - '.$emp->Celular; ?>
											<td><?php echo $emp->Direccion; ?>
										</td>
										<td>
											<div class="action-buttons" align="center">
												<a class="blue" onclick="ver('<?php echo $emp->Id; ?>')" href="#">
													<i class="ace-icon fas fa-eye bigger-130" style="color:#6E6E6E"></i>
												</a>
												<a class="green" onclick="editar('<?php echo $emp->Id; ?>')" href="#">
													<i class="ace-icon fas fa-edit bigger-130" style="color:#6E6E6E"></i>
												</a>
												<a class="red" onclick="eliminar('<?php echo $emp->Id; ?>', '<?php echo $emp->RazonSocial; ?>')" href="#">
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