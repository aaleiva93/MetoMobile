<?php if(!empty($model->Detalle)): ?>
<?php 
$pedido = '#' . $model->num_pedido;
?>
<h1 class="page-header">
    Pedido <?php echo $pedido; ?>
</h1>

<ol class="breadcrumb">
    <li>
        <a href="<?php echo site_url('pedido'); ?>">Pedidos</a>
    </li>
    <li class="active">
        Pedido <?php echo $pedido; ?>
    </li>
</ol>

<div class="row">
    <div class="col-xs-">
        <dl class="well">
            <dt>Conductor</dt>
            <dd><?php echo $model->fullname; ?></dd>
            <dt>Descripción</dt>
            <dd><?php echo $model->descripcion; ?></dd>
            <dt>Estado</dt>
            <dd><?php echo $model->estado; ?></dd>
            <dt>Fecha Carga</dt>
            <dd><?php echo $model->fechac; ?></dd>
            <dt>Fecha Descarga</dt>
            <dd><?php echo $model->fechad; ?></dd>
        </dl>
    </div>
</div>    

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Descripcion</th>

        </tr>
    </thead>
    <tbody>

        <?php foreach($model->Detalle as $d): ?>


        <?php if(!empty($d->imagen)): ?>
        <tr>
            <td><img style="width:500px;" src="<?php echo $d->imagen; ?>"  class="pull-left" alt="<?php echo $d->descripcion; ?>" /></td>
            <td><?php echo $d->descripcion; ?></td>
        </tr>    
        <?php endif; ?>

        <?php endforeach; ?>  


    </tbody>
</table>
<?php endif; ?>