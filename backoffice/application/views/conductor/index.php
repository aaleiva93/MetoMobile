<h1 class="page-header">
    <a class="pull-right btn btn-primary" href="<?php echo site_url('conductor/crud'); ?>">Registrar</a>
    Conductores
</h1>

<ol class="breadcrumb">
  <li class="active">Conductores</li>
</ol>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th style="width:60px;">Imagen</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th style="width:100px;">Es Admin</th>
            <th style="width:160px;"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($model as $m): ?>
        <tr>
            <td></td>
            <td><?php echo $m->fullname; ?></td>
            <td><?php echo $m->username; ?></td>
            <td><?php echo $m->correo; ?></td>
            <td><?php echo $m->mobile; ?></td>
            <td><span class="badge badge-sucess"><?php echo $m->EsAdmin === '1' ? 'SI' : 'NO'; ?></span></td>
            <td class="text-center">
                <a class="btn btn-xs btn-success" href="<?php echo site_url('conductor/crud/' . $m->id); ?>">
                    Editar
                </a>
                <a class="btn btn-xs btn-danger" href="<?php echo site_url('conductor/eliminar/' . $m->id); ?>" onclick="return confirm('¿Esta seguro de eliminar este conductor?');">
                    Eliminar
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php echo $this->pagination->create_links(); ?>