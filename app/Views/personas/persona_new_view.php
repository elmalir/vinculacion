
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Agregar Persona
					<small class="orange">
					
					<label id="idLblErroresJs" class="has-error"></label>
				</small>
				</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main no-padding">
					<form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/guardarPersona">
						<div class="row">
							<div class="col-xs-12 col-lg-6">
								<div class="space-4"></div>
								<div class="row">

									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">Identificación
											<input class="form-control" type="text" name="txtIdentificacion" id="idTxtIdentificacion" value="" required maxlength="13" value="<?php set_value('txtIdentificacion', '0') ?>" >
										</div>
									</div>
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">Tipo Identificación
											<select class="form-control" name="selectTipoIdentificacion" id="idSelectTipoIdentificacion">

											</select>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Razón Social
											<input class="form-control" type="text" name="txtRazonSocial" id="idTxtRazonSocial" required value="" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Nombre Comercial
											<input class="form-control" type="text" name="txtNombreComercial" id="idTxtNombreComercial" value="" maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">Tipo de Contribuyente

										</div>
									</div>
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">Rol
											<select class="form-control" name="selectRol" id="idSelectRol">
												<option value="-1">-- Seleccionar --</option>
												<option value="Cliente">Cliente</option>
												<option value="Proveedor">Proveedor</option>
											</select>
										</div>
									</div>
								</div>
								<div class="space-6"></div>
								<div class="row">
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">
											<div class="checkbox">
												<label>
													<input type="checkbox" class="ace" name="chkAgenteRetencion" id="idChkAgenteRetencion" value="1">
													<span class="lbl"> Agente de Retención</span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">
											<div class="checkbox">
												<label>
													<input type="checkbox" class="ace" name="chkMicroempresa" id="idChkMicroempresa" value="1">
													<span class="lbl"> Microempresa</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								
							</div><!--fin de columna izquierda -->
							<div class="col-xs-12 col-lg-6">
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">Provincia
											<select class="form-control" name="selectProvincia" id="idSelectProvincia">
				
											</select>
										</div>
									</div>
									<div class="col-xs-6 col-lg-6">Ciudad
										<div class="col-xs-12 col-lg-12" id="divCiudad">

										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-12">
										<div class="col-xs-12 col-lg-12">Dirección
											<input class="form-control" type="text" name="txtDireccion" id="idTxtDireccion" value="" required maxlength="255">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-6 col-lg-12">
										<div class="col-xs-12 col-lg-12">Correo
											<input class="form-control" type="email" name="txtCorreo" value="" maxlength="60">
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="row">
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">Teléfono
											<input class="form-control" type="text" name="txtTelefono" value="" maxlength="20">
										</div>
									</div>
									<div class="col-xs-6 col-lg-6">
										<div class="col-xs-12 col-lg-12">Celular
											<input class="form-control" type="text" name="txtCelular" value="" maxlength="20">
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
	function cargarCiudad(){
		//alert("Hola "+ $("#idSelectProvincia").val());
		$.ajax({
			type: "POST",
			url: "getCiudades",
			data: {"idProvincia": $("#idSelectProvincia").val() },
			success:function(respuesta){
				$("#divCiudad").html(respuesta);
			}
		});
	}
	function cargarCiudadPrmt(cadena){
		//alert("Hola "+ $("#idSelectProvincia").val());
		$.ajax({
			type: "POST",
			url: "getCiudadesCadena",
			data: {"idProvincia": $("#idSelectProvincia").val(), ciudad: cadena },
			success:function(respuesta){
				$("#divCiudad").html(respuesta);
			}
		});
	}
	function cancelar(){
    	window.location="<?php echo base_url()?>comprobante/nuevaFactura";
  	}
  	function buscarCatastro(identificacion){
  		
		//var urlPortal = 'http://192.168.1.4/portaldb/servicioweb/users';
		var urlPortal = 'https://empresarial.com.ec/servicioweb/catastro';
		$.ajax({
			url: urlPortal,
			type: "GET",
			data: {ruc: identificacion },
			success:function(resp){
				if (resp.Id > 0) {
					console.log(resp);
					$("#idTxtRazonSocial").val(resp.RazonSocial);
					$("#idTxtNombreComercial").val(resp.NombreComercial);
					$("#idTxtDireccion").val(resp.Direccion);
					var selTipo = document.getElementById("idSelectTipoContribuyente");
					var selProv = document.getElementById("idSelectProvincia");
					var indiceTipo = 0;
					var indiceProv = 0;
					var itemsTipo = selTipo.length;
					var itemsProv = selProv.length;
					for (var i = 0; i < itemsProv; i++) {
						//console.log(i, itemsProv, selProv.options[i].value, selProv.options[i].label.toUpperCase(), resp.Provincia);
						if (selProv.options[i].label.toUpperCase() == resp.Provincia.toUpperCase()) {
							indiceProv = i;
						}
					}
					selProv.selectedIndex = indiceProv;
					//console.log("Fin prov");
					//cargarCiudad();
					//console.log("Cargar Ciudad");
					for (var i = 0; i < itemsTipo; i++) {
						if (selTipo.options[i].label == resp.TipoContribuyente) {
							indiceTipo = i;
						}
					}
					selTipo.selectedIndex = indiceTipo;
					cargarCiudadPrmt(resp.Ciudad.toUpperCase());
					if (resp.AgenteRetencion==1) {
						document.getElementById("idChkAgenteRetencion").checked = true;
					}else{
						document.getElementById("idChkAgenteRetencion").checked = false;
					}
					if (resp.Microempresa==1) {
						document.getElementById("idChkMicroempresa").checked = true;
					}else{
						document.getElementById("idChkMicroempresa").checked = false;
					}

				}else{
					$("#idTxtRazonSocial").val(null);
					$("#idTxtNombreComercial").val(null);
					$("#idTxtDireccion").val(null);
					document.getElementById("idSelectTipoContribuyente").selectedIndex = 0;
					document.getElementById("idChkAgenteRetencion").checked = false;
					document.getElementById("idChkMicroempresa").checked = false;
				}
			},
			dataType : 'jsonp'
		});
	}


</script>
