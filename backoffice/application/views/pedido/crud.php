<?php
    $titulo = 'Nuevo pedido';
    $esAdmin = false;
    
    if(is_object($model)){
        $titulo = $model->fullname;
        $esAdmin = ($model->EsAdmin === '1');
    }
?>

<h1 class="page-header">
    <?php echo $titulo; ?>
</h1>

<ol class="breadcrumb">
    <li>
        <a href="<?php echo site_url('pedido'); ?>">Pedidos</a>
    </li>
    <li class="active">
        <?php echo $titulo; ?>
    </li>
</ol>

<?php echo form_open('pedido/guardar', ['enctype' => 'multipart/form-data']); ?>

<input type="hidden" name="id" value="<?php echo is_object($model) ? $model->id : ''; ?>" />

<div class="form-group">
    <label>Numero de pedido</label>
    <input type="text" name="fullname" class="form-control" placeholder="Ingrese conductor" value="<?php echo is_object($model) ? $model->num_pedido : ''; ?>">
</div>

<div class="form-group">
    <label>Conductor</label>
    <input type="text" name="fullname" class="form-control" placeholder="Ingrese conductor" value="<?php echo is_object($model) ? $model->fullname : ''; ?>">
</div>

<div class="form-group">
    <label>Descripción</label>
    <textarea type="text" name="descripcion" class="form-control" placeholder="Ingrese una descripción" value="<?php echo is_object($model) ? $model->descripcion : ''; ?>"></textarea>
</div>

<button class="btn btn-primary" type="submit">
    Enviar
</button>

<?php echo form_close(); ?>