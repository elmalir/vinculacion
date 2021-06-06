<div>
	<div class="profile-info-name">
		Persona
	</div>
	<div class="media-right">
		<h3 class="blue media-heading">
			<?php echo $asistencia[0]->persona; ?>
		</h3>
	</div>
</div>

<div class="media-body">
	<div class="profile-user-info profile-user-info-striped">
		<div class="profile-info-row">
			<div class="profile-info-name">Área General</div>
			<div class="profile-info-value">
				<span class=" blue"><?php echo $asistencia[0]->areageneral; ?></span>
			</div>
		</div>
        <div class="profile-info-row">
			<div class="profile-info-name">Área Específica</div>
			<div class="profile-info-value">
				<span class=" blue"><?php echo $asistencia[0]->areaespecifica; ?></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name">Problema</div>
			<div class="profile-info-value">
				<span class=" blue"><?php echo $asistencia[0]->problema; ?></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name">Solución</div>
			<div class="profile-info-value">
				<span class=" blue"><?php echo $asistencia[0]->solucion; ?></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name">Observación</div>
			<div class="profile-info-value">
				<span class=" blue"><?php echo $asistencia[0]->observacion; ?></span>
			</div>
		</div>
	</div>
</div>