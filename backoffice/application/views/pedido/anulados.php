<h1 class="page-header">
    <a class="pull-right btn btn-primary" href="<?php echo site_url('pedido/crud'); ?>">Nuevo Pedido</a>
    Pedidos
    <a class="btn btn-info" href="<?php echo site_url('pedido/pendientes'); ?>">Pendientes</a>
    <a type="button" class="btn btn-info" href="<?php echo site_url('pedido/entregados'); ?>">Entregados</a>
    <a type="button" class="btn btn-info" href="<?php echo site_url('pedido/anulados'); ?>">Anulados</a>
</h1>

<ol class="breadcrumb">
  <li>
        <a href="<?php echo site_url('pedido'); ?>">Pedidos</a>
    </li>
    <li class="active">
        Anulados
    </li>
</ol>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Numero</th>
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Fecha Carga</th>
            <th>Fecha Descarga</th>
            <th>Conductor</th>
            <th>Incidencias</th>
            <th style="width:160px;"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($model as $m): ?>
        <?php if($m->estado_id === '2'){ ?>
        <tr>
            <td><?php echo $m->num_pedido; ?></td>
            <td><?php echo $m->descripcion; ?></td>
            <td><?php echo $m->estado; ?></td>
            <td><?php echo $m->fechac; ?></td>
            <td><?php echo $m->fechad; ?></td>
            <td><?php echo $m->fullname; ?></td>
            <td class="text-center">
                <a class="btn btn-xs btn-block btn-success" href="<?php echo site_url('incidencias/ver/'. $m->id); ?>">
                    Ver
                </a>
            </td>
             <td class="text-center">
                <a class="btn btn-xs btn-success" href="<?php echo site_url('pedido/crud/' . $m->id); ?>">
                    Editar
                </a>
                <a class="btn btn-xs btn-danger" href="<?php echo site_url('pedido/eliminar/' . $m->id); ?>" onclick="return confirm('¿Esta seguro de eliminar este pedido?');">
                    Eliminar
                </a>
            </td>
        </tr>
        <?php } ?>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $this->pagination->create_links(); ?>