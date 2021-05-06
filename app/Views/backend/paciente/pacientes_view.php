<div class="container-fluid">
	<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dynamic-table" class="table table-striped table-bordered">
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
									<td><?php echo $paciente->Nombre; ?>
										<br>
										<small><?php echo $paciente->Identificacion; ?></small>
									</td>
									<td><?php echo $paciente->Correo; ?>
									<td><?php echo $paciente->Telefono.' '.$paciente->Celular; ?>
									<td><?php echo $paciente->Direccion; ?>
									</td>
									<td>
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
									</td>
									<td>
										<div class="hidden-sm hidden-xs action-buttons">
											<a class="blue" onclick="ver('<?php echo $paciente->Id; ?>')" href="#">
												<i class="ace-icon fa fa-eye bigger-120"></i>
											</a>
											<a class="green" onclick="editar('<?php echo $paciente->Id; ?>')" href="#">
												<i class="ace-icon fa fa-pencil bigger-130"></i>
											</a>
											<a class="red" onclick="eliminar('<?php echo $paciente->Id; ?>', '<?php echo $paciente->Nombre; ?>')" href="#">
												<i class="ace-icon fa fa-trash-o bigger-130"></i>
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