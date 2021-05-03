<div class="container-fluid">
    <!-- Start Page Content -->
    <?php if (!empty($errores)) {
        echo '<section class="body current alert-danger" role="alert">';
        echo '<ul>';
        foreach ($errores as $error){ ?>
            <li><?php echo $error ?></li>
        <?php }
        echo '</ul>';
        echo '</section>';
    }
    ?>
    
    <div class="card">
        <div class="card-body wizard-content">        
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/guardarPaciente">
                        <div class="row">
                            <div class="card col-lg-6 col-sm-12">
                                <div class="card-body">
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Identificación</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="txtIdentificacion" value="<?php echo set_value('txtIdentificacion'); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="txtNombre" value="<?php echo set_value('txtNombre'); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">F. Nacimiento</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="txtFechaNacimiento" value="<?php echo set_value('txtFechaNacimiento'); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="row">
                                                <label class="col-lg-6 col-sm-6 text-right control-label col-form-label">Sexo</label>
                                                <div class="col-lg-6 col-sm-6">
                                                    <select class="select2 form-control custom-select" id="idSelectSexo" name="selectSexo">
                                                        <option value="">Elegir</option>
                                                        <option value="M">Masculino</option>
                                                        <option value="F">Femenino</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="row">            
                                                <label class="col-lg-4 col-sm-5 text-right control-label col-form-label">Etnia</label>
                                                <div class="col-lg-8 col-sm-7">
                                                    <select class="select2 form-control custom-select" id="idSelectEtnia" name="selectEtnia">
                                                        <option value="">Elegir</option>
                                                        <option value="Blanco">Blanca</option>
                                                        <option value="Negro">Negra</option>
                                                        <option value="Mestizo">Mestiza</option>
                                                        <option value="Indígena">Indígena</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-lg-3 col-sm-3 text-right control-label col-form-label">Estado Civil</label>
                                        <div class="col-lg-9 col-sm-9">
                                            <select class="select2 form-control custom-select" id="idSelectEstadoCivil" name="selectEstadoCivil">
                                                <option>Seleccionar</option>
                                                <option value="Soltero">Soltero</option>
                                                <option value="Casado">Casado</option>
                                                <option value="Divorciado">Divorciado</option>
                                                <option value="UE">Unión de Hecho</option>
                                                <option value="Viudo">Viudo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Correo</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="txtCorreo" value="<?php echo set_value('txtCorreo'); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Contraseña</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="txtContrasenia" value="<?php echo set_value('txtContrasenia'); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Celular</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="txtCelular" value="<?php echo set_value('txtCelular'); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Teléfono</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="txtTelefono" value="<?php echo set_value('txtTelefono'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-lg-6 col-sm-12">
                                <div class="card-body">
                                    <div class="row">
                                        <label class="col-lg-3 col-sm-3 text-right control-label col-form-label">Provincia</label>
                                        <div class="col-lg-9 col-sm-9">
                                            <select class="select2 form-control custom-select" id="idSelectProvincia" name="selectProvincia" onchange="cargarCiudad()">
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
                                    <div class="row">
                                        <label class="col-lg-3 col-sm-3 text-right control-label col-form-label">Ciudad</label>
                                        <div class="col-lg-9 col-sm-9">
                                            <select class="select2 form-control custom-select" id="idSelectCiudad" name="selectCiudad">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Dirección</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="txtDireccion" value="<?php echo set_value('txtDireccion'); ?>"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Antecedente Patológico</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="txtAntecedentePatalogico" value="<?php echo set_value('txtAntecedentePatalogico'); ?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Ocupación</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="txtOcupacion" value="<?php echo set_value('txtOcupacion'); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-5 text-right control-label col-form-label">Grupo Sanguineo</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="txtGrupoSanguineo" value="<?php echo set_value('txtGrupoSanguineo'); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-5 text-right control-label col-form-label">Contacto de Emergencia</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="txtContactoEmergencia" value="<?php echo set_value('txtContactoEmergencia'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card col-md-12">
                                <div  align="center">                                    
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                    <button type="reset" class="btn btn-danger">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>

<script type="text/javascript">
 window.onload = cargarCiudad;
 var base_url = '<?php echo base_url(); ?>/';
 function cargarCiudad() {
    var idPrv = $('#idSelectProvincia').val();
    $.ajax({
        type: "GET",
        url: base_url+'admin/getCiudadByProv/'+idPrv,
        data: {"idProvincia": idPrv },
        success:function(resp){
                //console.log('resp', resp);
                $("#idSelectCiudad").html(resp);
            }
        });
}

</script>



