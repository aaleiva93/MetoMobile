<h1 class="page-header">
    Pedidos
</h1>

<ol class="breadcrumb">
  <li class="active">Pedidos</li>
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
        </tr>
    </thead>
    <tbody>
        <?php foreach($model as $m): ?>
        <tr>
            <td><?php echo $m->num_pedido; ?></td>
            <td><?php echo $m->descripcion; ?></td>
            <td><?php echo $m->estado; ?></td>
            <td><?php echo $m->fechac; ?></td>
            <td><?php echo $m->fechad; ?></td>
            <td><?php echo $m->id_conductor; ?></td>
            <td class="text-center">
                <a class="btn btn-xs btn-block btn-success" href="<?php echo site_url('incidencia/ver/'. $m->id_incidencia); ?>">
                    Ver
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php echo $this->pagination->create_links(); ?>