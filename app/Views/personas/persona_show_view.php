<div>
	<div class="profile-info-name">
		Persona
	</div>
	<div class="media-right">
		<h3 class="blue media-heading">
			<?php echo $persona[0]->identificacion.' '.$persona[0]->nombre; ?>
		</h3>
	</div>
</div>

<div class="media-body">
	<div class="profile-user-info profile-user-info-striped">
		<div class="profile-info-row">
			<div class="profile-info-name">Correo</div>
			<div class="profile-info-value">
				<span class=" blue"><?php echo $persona[0]->correo; ?></span>
			</div>
		</div>
        <div class="profile-info-row">
			<div class="profile-info-name">Dirección</div>
			<div class="profile-info-value">
				<span class=" blue"><?php echo $persona[0]->direccion; ?></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name">Teléfono</div>
			<div class="profile-info-value">
				<span class=" blue"><?php echo $persona[0]->telefono; ?></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name">Celular</div>
			<div class="profile-info-value">
				<span class=" blue"><?php echo $persona[0]->celular; ?></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name">Observación</div>
			<div class="profile-info-value">
				<span class=" blue"><?php echo $persona[0]->observacion; ?></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name">Gremio</div>
			<div class="profile-info-value">
				<span class=" blue"><?php echo $persona[0]->gremio; ?></span>
			</div>
		</div>
	</div>
</div>