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
									<td><?php echo $paciente->Identificacion.' '.$paciente->Nombre; ?></td>
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
										<div class="action-buttons">
											<a class="blue" onclick="ver('<?php echo $paciente->Id; ?>')" href="#">
												<i class="ace-icon fa fa-eye bigger-120"></i>
											</a>
											<a class="green" onclick="editar('<?php echo $paciente->Id; ?>')" href="#">
												<i class="ace-icon fa fa-eye bigger-130"></i>
											</a>
											<a class="red" onclick="eliminar('<?php echo $paciente->Id; ?>', '<?php echo $paciente->Nombre; ?>')" href="#">
												<i class="ace-icon fa fa-eye bigger-130"></i>
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


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Contextual Classes</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <table class="table" id="dynamic-table1" >
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
      </tr>      
      <tr class="success">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="warning">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="active">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>