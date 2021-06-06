<div class="page-header">
    <h1>
        Usuarios
        <?php 
        $session = \Config\Services::session();
        if (!empty($session->getFlashdata('mensaje'))) {
            echo '<small><label class="orange">'.$session->getFlashdata('mensaje').'</label></small>';
        }?>
    </h1>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    
                    <table id="dynamic-table" class="table table-striped table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>Identificación</th>
                                <th>Usuario</th>
                                <th>Dirección</th>
                                <th>Contacto</th>
                                <th>Observación</th>
                                <th>Grupo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($usuarios)) {
                                foreach ($usuarios as $u) { ?>
                                    <tr>
                                        <td><?php echo $u->identificacion; ?></td>
                                        <td><?php echo $u->nombre; ?><br><small><?php echo $u->correo; ?></small></td>
                                        <td><?php echo $u->direccion; ?></td>
                                        <td><?php echo $u->telefono.' '.$u->celular; ?></td>
                                        <td><?php echo $u->observacion; ?></td>
                                        <td><?php echo $u->grupousuario; ?></td>
                                    </td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="green" onclick="editar('<?php echo $u->id; ?>')" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>
                                            <a class="red" onclick="eliminar('<?php echo $u->id; ?>', '<?php echo $u->nombre; ?>')" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>
                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a onclick="editar(<?= $u->id; ?>)" href="" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a onclick="eliminar('<?php echo $u->id; ?>', '<?php echo $u->nombre; ?>')" href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
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
</div><!-- /.row -->

<script type="text/javascript">
    var baseurl = "<?= base_url() ?>";
    function editar(id){
        window.location.href = baseurl+'/usuarios/'+id+'/editar';
    }
    function eliminar(id, nombre){
        Swal.fire({
          title: '¿Desea elimiar el registro?',
          text: nombre,
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonText: 'Cancelar',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, eliminar!'
        }).then((result) => {
              if (result.value) {
                $.ajax({
                        type: "post",
                        url: baseurl+"/usuarios/borrar",
                        data: {"id": id},
                        success: function(response){
                            var respuesta = JSON.parse(response);
                            console.log(respuesta);
                            if(respuesta.estado == 1){
                                Swal.fire({
                                    icon: 'success',
                                    title: respuesta.titulo,
                                    text: respuesta.mensaje,
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                window.location.href = baseurl+"/usuarios";
                            }else{
                                Swal.fire({
                                    icon: 'error',
                                    title: respuesta.titulo,
                                    text: respuesta.mensaje,
                                });
                            }
                        }
                        ,statusCode: {
                            400: function(data){
                                var json = JSON.parse(data.responseText);
                                Swal.fire(
                                      'Error!',
                                      json.message,
                                      'error'
                                    )
                            },
                            500: function(data){
                                var json = JSON.parse(data.responseText);
                                console.log('error',json);
                                Swal.fire(
                                      'Error!',
                                      json.message,
                                      'error'
                                    )
                            }
                        }
                });
              }
        })
    };
</script>