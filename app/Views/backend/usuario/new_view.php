<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12">
            <form class="form-horizontal" method="post" action="<?php echo base_url();?>/inicio/guardarPaciente">
                <div class="row">
                    <div class="card col-md-6">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Identificación</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="txtIdentificacion">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="txtNombre">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">F. Nacimiento</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="txtFechaNacimiento">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Sexo</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="selectSexo">
                                        <option>Seleccionar</option>
                                            <option value="Masculito">Masculito</option>
                                            <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Etnia</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="selectEtnia">
                                        <option>Seleccionar</option>
                                            <option value="Blanco">Blanco</option>
                                            <option value="Negro">Negro</option>
                                            <option value="Mestizo">Mestixo</option>
                                            <option value="Indígena">Indígena</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Estado Civil</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="selectEstadoCivil">
                                        <option>Seleccionar</option>
                                            <option value="Soltero">Soltero</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Divorciado">Divorciado</option>
                                            <option value="UE">Unión de Hecho</option>
                                            <option value="Viudo">Viudo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Celular</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="txtCelular">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Teléfono</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="txtTelefono">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-md-6">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Correo</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="txtCorreo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Contacto de Emergencia</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="txtContactoEmergencia">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Dirección</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="txtDireccion"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Contraseña</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="txtContrasenia">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Antecedente Patológico</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="txtAntecedentePatalogico"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card col-md-12">
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <button type="reset" class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>
</div>
