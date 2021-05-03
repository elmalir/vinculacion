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
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/guardarProfesional">
                        <div class="row">
                            <div class="card col-md-6">
                                <div class="card-body">
                                    <div class="row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Identificación</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="txtIdentificacion" value="<?php echo set_value('txtIdentificacion'); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="txtNombre" value="<?php echo set_value('txtNombre'); ?>">
                                      </div>
                                  </div>
                                  <div class="row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Especialidad</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="txtEspecialidad" value="<?php echo set_value('txtEspecialidad'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Correo</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="txtCorreo" value="<?php echo set_value('txtCorreo'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Contraseña</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="txtContrasenia" value="<?php echo set_value('txtContrasenia'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Rol</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="txtRol" value="<?php echo set_value('txtRol'); ?>">
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="card col-md-6">
                            <div class="card-body">
                                <div class="row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Celular</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="txtCelular" value="<?php echo set_value('txtCelular'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Teléfono</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="txtTelefono" value="<?php echo set_value('txtTelefono'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Formación Academica</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="txtFormacionAcademica" value="<?php echo set_value('txtFormacionAcademica'); ?>">
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