<?php
    $titulo = 'Nuevo registro';
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
        <a href="<?php echo site_url('conductor'); ?>">Conductores</a>
    </li>
    <li class="active">
        <?php echo $titulo; ?>
    </li>
</ol>

<?php echo form_open('conductor/guardar', ['enctype' => 'multipart/form-data']); ?>

<input type="hidden" name="id" value="<?php echo is_object($model) ? $model->id : ''; ?>" />

<div class="form-group">
    <label>Es Admin</label>
    <select name="EsAdmin" class="form-control">
        <option <?php !$esAdmin ? 'selected' : ''; ?> value="0">NO</option>
        <option <?php $esAdmin ? 'selected' : ''; ?> value="1">SI</option>
    </select>
</div>

<div class="form-group">
    <label>Nombre</label>
    <input type="text" name="fullname" class="form-control" placeholder="Ingrese el nombre" value="<?php echo is_object($model) ? $model->fullname : ''; ?>">
</div>

<div class="form-group">
    <label>Usuario</label>
    <input type="text" name="username" class="form-control" placeholder="Ingrese el usuario" value="<?php echo is_object($model) ? $model->username: ''; ?>">
</div>

<div class="form-group">
    <label>Correo</label>
    <input type="text" name="correo" class="form-control" placeholder="Ingrese el correo" value="<?php echo is_object($model) ? $model->correo : ''; ?>">
</div>

<div class="form-group">
    <label>Telefono</label>
    <input type="text" name="mobile" class="form-control" placeholder="Ingrese el telefono" value="<?php echo is_object($model) ? $model->mobile : ''; ?>">
</div>

<div class="form-group">
    <label>Contraseña</label>
    <input type="text" name="password" class="form-control" placeholder="Ingrese la contraseña">
</div>

<button class="btn btn-primary" type="submit">
    Enviar
</button>

<?php echo form_close(); ?>