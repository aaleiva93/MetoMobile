<?php
    $titulo = 'Nuevo pedido';
    $esAdmin = false;
    
    if(is_object($model)){
        $titulo = $model->fullname;
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
    <input type="text" name="num_pedido" class="form-control" placeholder="Ingrese numero de pedido" value="<?php echo is_object($model) ? $model->num_pedido : ''; ?>">
</div>

<div class="form-group">
    <label>Conductor</label>
    <select name="id_conductor" class="form-control">
        <?php foreach($modelconductor as $m): ?>
        <option value="<?php echo $m->id ?>"><?php echo $m->fullname ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="form-group">
    <label>Descripción</label>
    <input  type="text" name="descripcion" class="form-control" placeholder="Ingrese una descripción" value="<?php echo is_object($model) ? $model->descripcion : ''; ?>">
</div>



<button class="btn btn-primary" type="submit">
    Enviar
</button>

<?php echo form_close(); ?>