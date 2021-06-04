<div class="page-header">
    <h1>
        Proyectos
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
                                <th>Proyecto</th>
                                <th>Coordinador</th>
                                <th>Tiempo de duración</th>
                                <th>Participantes</th>
                                <th>Veneficiarios</th>
                                <th>Tutores</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($proyectos)) {
                                foreach ($proyectos as $p) { ?>
                                    <tr>
                                        <td>
                                            <small><?php echo $p->codigo.' - '.$p->nombre; ?></small>
                                        </td>
                                        <td><?php echo $p->coordinador; ?>
                                        <td><?php echo $p->tiempo; ?>
                                        <td><?php echo $p->numeroParticipantes; ?>
                                        <td><?php echo $p->numeroVeneficiarios; ?>
                                        <td><?php echo $p->numeroTutores; ?>
                                    </td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" onclick="ver('<?php echo $p->id; ?>')" href="#">
                                                <i class="ace-icon fa fa-eye bigger-120"></i>
                                            </a>
                                            <a class="green" onclick="editar('<?php echo $p->id; ?>')" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>
                                            <a class="red" onclick="eliminar('<?php echo $p->id; ?>', '<?php echo $p->nombre; ?>')" href="#">
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
                                                        <a onclick="ver('<?php echo $p->id; ?>')" href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-eye bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a onclick="editar(<?= $p->id; ?>)" href="" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a onclick="eliminar('<?php echo $p->id; ?>', '<?php echo $p->nombre; ?>')" href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
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
</div>

<script type="text/javascript">
    var baseurl = "<?= base_url() ?>";
    function ver(){
        console.log('ver');
    }
    function editar(id){
        //window.open(baseurl+'/proyectos/'+id+'/editar', '_blank');
        window.location.href = baseurl+'/proyectos/'+id+'/editar';
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
                        url: baseurl+"/proyectos/borrar",
                        data: {"id": id},
                        success: function(){
                                    Swal.fire(
                                      'Eliminado!',
                                      'Registro eliminado.',
                                      'success'
                                    ).then((result) =>{
                                        console.log(result);
                                        if (result.value) {
                                            window.location.href = baseurl+"/proyectos";
                                        }
                                    } )
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