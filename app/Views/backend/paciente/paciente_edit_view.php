<?php 
    $etnias = array('Blanca', 'Negra', 'Mestiza','Indígena');
    $eCivil = array('Soltero' => 'Soltero', 
                    'Casado' => 'Casado', 
                    'Divorciado' => 'Divorciado', 
                    'UH' => 'Unión de Hecho', 
                    'Viudo' => 'Viudo'
                    );
?>
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
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/actualizarPaciente">
                        <div class="row">
                            <div class="card col-lg-6 col-sm-12">
                                <div class="card-body">
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Identificación</label>
                                        <div class="col-sm-9">
                                            <input type="hidden" name="txtId" value="<?php echo (!empty($paciente)) ? $paciente->Id: ''; ?>">
                                            <input type="text" class="form-control" name="txtIdentificacion" value="<?php echo (!empty($paciente)) ? $paciente->Identificacion: ''; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="txtNombre" value="<?php echo (!empty($paciente)) ? $paciente->Nombre: ''; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">F. Nacimiento</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="txtFechaNacimiento" value="<?php echo (!empty($paciente)) ? $paciente->FechaNacimiento: ''; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="row">
                                                <label class="col-lg-6 col-sm-6 text-right control-label col-form-label">Sexo</label>
                                                <div class="col-lg-6 col-sm-6">
                                                    <select class="select2 form-control custom-select" id="idSelectSexo" name="selectSexo">
                                                        <?php 
                                                        if (!empty($paciente)) {
                                                            if ($paciente->Sexo == 'F') {
                                                            echo '<option value="">Elegir</option>';
                                                            echo '<option value="M">Masculino</option>';
                                                            echo '<option selected value="F">Femenino</option>';
                                                            }else{
                                                            echo '<option value="">Elegir</option>';
                                                            echo '<option selected value="M">Masculino</option>';
                                                            echo '<option value="F">Femenino</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="row">            
                                                <label class="col-lg-4 col-sm-5 text-right control-label col-form-label">Etnia</label>
                                                <div class="col-lg-8 col-sm-7">
                                                    <select class="select2 form-control custom-select" id="idSelectEtnia" name="selectEtnia">
                                                        <?php 
                                                        if (!empty($paciente)) {
                                                            foreach ($etnias as $key) {
                                                                if ($paciente->Etnia == $key) {
                                                                    echo '<option selected value="'.$key.'">'.$key.'</option>';
                                                                }else{
                                                                    echo '<option value="'.$key.'">'.$key.'</option>';
                                                                }
                                                            }
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-lg-3 col-sm-3 text-right control-label col-form-label">Estado Civil</label>
                                        <div class="col-lg-9 col-sm-9">
                                            <select class="select2 form-control custom-select" id="idSelectEstadoCivil" name="selectEstadoCivil">
                                                <?php 
                                                if (!empty($paciente)) {
                                                    foreach ($eCivil as $key => $valor) {
                                                        if ($paciente->EstadoCivil == $key) {
                                                            echo '<option selected value="'.$key.'">'.$valor.'</option>';
                                                        }else{
                                                            echo '<option value="'.$key.'">'.$valor.'</option>';
                                                        }
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Correo</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="txtCorreo" value="<?php echo (!empty($paciente)) ? $paciente->Correo: ''; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Contraseña</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="txtContrasenia" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Celular</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="txtCelular" value="<?php echo (!empty($paciente)) ? $paciente->Celular: ''; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Teléfono</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="txtTelefono" value="<?php echo (!empty($paciente)) ? $paciente->Telefono: ''; ?>">
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
                                                    if ($paciente->IdProvincia == $prov->Id) {
                                                        echo '<option selected value="'.$prov->Id.'">'.$prov->Nombre.'</option>';
                                                    }else{
                                                        echo '<option value="'.$prov->Id.'">'.$prov->Nombre.'</option>';
                                                    }

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
                                            <textarea class="form-control" name="txtDireccion" value=""><?php echo (!empty($paciente)) ? $paciente->Direccion: ''; ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Antecedente Patológico</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="txtAntecedentePatologico" value=""><?php echo (!empty($paciente)) ? $paciente->AntecedentePatologico: ''; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Ocupación</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="txtOcupacion" value="<?php echo (!empty($paciente)) ? $paciente->Ocupacion: ''; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-5 text-right control-label col-form-label">Grupo Sanguineo</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="txtGrupoSanguineo" value="<?php echo (!empty($paciente)) ? $paciente->GrupoSanguineo: ''; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-5 text-right control-label col-form-label">Contacto de Emergencia</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="txtContactoEmergencia" value="<?php echo (!empty($paciente)) ? $paciente->ContactoEmergencia: ''; ?>">
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
    var idCiudad = "<?php echo $paciente->IdCiudad; ?>";
    console.log(idCiudad);
    $.ajax({
        type: "GET",
        url: base_url+'admin/getCiudadByProv/'+idPrv+'/'+idCiudad,
        data: {"idProvincia": idPrv },
        success:function(resp){
                $("#idSelectCiudad").html(resp);
            }
        });
}

</script>



