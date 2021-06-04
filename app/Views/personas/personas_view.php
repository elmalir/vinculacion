<div class="page-header">
    <h1>
        Personas
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
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Dirección</th>
                                <th>Contacto</th>
                                <th>Observación</th>
                                <th>Activo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($personas)) {
                                foreach ($personas as $per) { ?>
                                    <tr>
                                        <td>
                                            <small><?php echo $per->identificacion ?></small>
                                        </td>
                                        <td><?php echo $per->nombre; ?>
                                        </td>
                                        <td><?php echo $per->correo; ?>
                                        <td><?php echo $per->direccion; ?>
                                        <td><?php echo $per->telefono.' - '.$per->celular; ?>
                                        <td><?php echo $per->observacion; ?>
                                        <td><?php echo $per->activo; ?>
                                    </td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" onclick="ver('<?php echo $per->id; ?>')" href="#">
                                                <i class="ace-icon fa fa-eye bigger-120"></i>
                                            </a>
                                            <a class="green" onclick="editar('<?php echo $per->id; ?>')" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>
                                            <a class="red" onclick="eliminar('<?php echo $per->id; ?>', '<?php echo $per->nombre; ?>')" href="#">
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
                                                        <a onclick="ver('<?php echo $per->id; ?>')" href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-eye bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a onclick="editar('.$per->id.')" href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a onclick="eliminar('<?php echo $per->id; ?>', '<?php echo $per->nombre; ?>')" href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
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
<script>
    function ver(){
        console.log('ver');
    }
    function editar(){
        console.log('editar');
    }
    function eliminar(){
        console.log('eliminar');
    }
</script>