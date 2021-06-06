<div class="page-header">
    <h1>
        Áreas Generales
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
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($areasgenerales)) {
                                foreach ($areasgenerales as $ag) { ?>
                                    <tr>
                                        <td><?php echo $ag->nombre; ?></td>
                                        <td><?php echo $ag->descripcion; ?></td>
                                        <td><?php echo ($ag->activo==1) ? 'Activo' : 'Inactivo' ; ?></td>
                                    </td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="green" onclick="editar('<?php echo $ag->id; ?>')" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>
                                            <a class="red" onclick="eliminar('<?php echo $ag->id; ?>', '<?php echo $ag->nombre; ?>')" href="#">
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
                                                        <a onclick="editar(<?= $ag->id; ?>)" href="" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a onclick="eliminar('<?php echo $ag->id; ?>', '<?php echo $ag->nombre; ?>')" href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
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
        window.location.href = baseurl+'/areasgenerales/'+id+'/editar';
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
                        url: baseurl+"/areasgenerales/borrar",
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
                                window.location.href = baseurl+"/areasgenerales";
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
                                      json.sms,
                                      'error'
                                    )
                            },
                            500: function(data){
                                var json = JSON.parse(data.responseText);
                                console.log('error',json);
                                Swal.fire(
                                      'Error!',
                                      json.sms,
                                      'error'
                                    )
                            }
                        }
                });
              }
        })
    };
</script>