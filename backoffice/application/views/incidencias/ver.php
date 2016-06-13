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
            <dt>Estado</dt>
            <dd><?php echo $model->estado; ?></dd>
            <dt>Fecha Carga</dt>
            <dd><?php echo $model->fechac; ?></dd>
            <dt>Fecha Descarga</dt>
            <dd><?php echo $model->fechad; ?></dd>
        </dl>
    </div>
</div>    
   
<div class="row">
   <div class="col-xs-">
        <ul class="list-group">
            <?php foreach($model->Detalle as $d): ?>
            <li class="list-group-item">
                <?php echo $d->descripcion; ?> - <?php echo $d->fecha; ?> 
                <?php if(!empty($d->imagen)): ?>
                <img style="width:500px;" src="<?php echo $d->imagen; ?>"  alt="<?php echo $d->descripcion; ?>" />
                <?php endif; ?>
            </li>
            <?php endforeach; ?>    
        </ul>
    </div>
</div>