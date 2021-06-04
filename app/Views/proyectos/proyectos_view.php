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
                                                        <a onclick="editar('.$p->id.')" href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
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