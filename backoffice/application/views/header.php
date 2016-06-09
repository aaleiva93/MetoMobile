<!DOCTYPE html>
<html lang="es">

<head>
    <title>MetoTransWeb - Back Office</title>
    <link rel="shortcut icon" href="http://hearthstoneplayfun.xyz/appweb/Bandera_de_Barbanegra.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta charset="utf-8" />

    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <?php if(isset($user)): ?>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?php echo site_url('conductor'); ?>">MetoTransWeb</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="<?php echo site_url('conductor'); ?>">Conductores</a></li>
                                     <li><a href="<?php echo site_url('pedido'); ?>">Pedidos</a></li> 
                                </ul>                                      
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b><?php echo $user->Nombre; ?></b> <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url('auth/logout'); ?>">Desconectarse</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                    <?php endif; ?>