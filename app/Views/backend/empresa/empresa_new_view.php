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
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/guardarEmpresa">
                        <div class="row">
                            <div class="card col-md-6">
                                <div class="card-body">
                                    <div class="row">
                                        <label for="lname" class="col-sm-4 text-right control-label col-form-label">Nombre Comercial</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="txtNombreComercial" value="<?php echo set_value('txtNombreComercial'); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Identificación</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="txtIdentificacion" value="<?php echo set_value('txtIdentificacion'); ?>">
                                      </div>
                                  </div>
                                  <div class="row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Razón Social</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="txtRazonSocial" value="<?php echo set_value('txtRazonSocial'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Correo</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="txtCorreo" value="<?php echo set_value('txtCorreo'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Teléfono</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="txtTelefono" value="<?php echo set_value('txtTelefono'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Celular</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="txtCelular" value="<?php echo set_value('txtCelular'); ?>">
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="card col-md-6">
                            <div class="card-body">
                                <div class="row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Provincia</label>
                                    <div class="col-md-9">
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
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Ciudad</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" id="idSelectCiudad" name="selectCiudad">
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Dirección</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="txtDireccion" value="<?php echo set_value('txtDireccion'); ?>"></textarea>
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
                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
    <!-- ============================================================== -->
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