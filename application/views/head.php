<?php 

if($_SESSION!=null) {?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=asset_url()?>assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?=asset_url()?>assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="<?=asset_url()?>assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="<?=asset_url()?>assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="<?=asset_url()?>assets/css/main.css">
    <link rel="stylesheet" href="<?=asset_url()?>assets/plugins/dataTables/css/dataTables.css">
    
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Feature detection -->
    <script src="<?=asset_url()?>assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=asset_url()?>assets/js/html5shiv.js"></script>
    <script src="<?=asset_url()?>assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <section id="container">
              <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">SOL<span>IB</span></a>
            </div>
            <!--logo end-->
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            
        </header>
        <!--sidebar start-->
          <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
        <li>
             <a href="<?=asset_url()?>index.php/equipo"><span>Inicio</span></a>
        </li>
        <!--
        <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-envelope"></i><span>Acciones</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                           <li><a href="<?=asset_url()?>index.php/materia/asignar">Asignar materia a profesor</a>
                            </li>
                            <li><a href="<?=asset_url()?>index.php/horario">Generar horarios</a>
                            </li> </ul>
                    </li>
        -->
        <li class="sub-menu">
            <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Catálogos</span><i class="arrow fa fa-angle-right pull-right"></i></a>
            <ul>
                <li><a href="<?=asset_url()?>index.php/equipo"><span>Equipos</span></a></li>
                <li> <a href="<?=asset_url()?>index.php/area"><span>Areas</span></a></li>
                <li> <a href="<?=asset_url()?>index.php/estado"><span>Estados</span></a></li>
                <li> <a href="<?=asset_url()?>index.php/marca"><span>Marcas</span></a></li>
            </ul>
        </li>
        <li>
            <a href="<?=asset_url()?>index.php/login/logout"><span>Salir</span></a>
        </li>
    </ul>
</div>

        </aside>
         <!--sidebar end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">
<?php }else if($_SESSION['privilegio']=='PR'){?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=asset_url()?>assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?=asset_url()?>assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="<?=asset_url()?>assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="<?=asset_url()?>assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="<?=asset_url()?>assets/css/main.css">

    <link rel="stylesheet" href="<?=asset_url()?>assets/plugins/fullcalendar/css/fullcalendar.css">

    <link rel="stylesheet" href="<?=asset_url()?>assets/plugins/dataTables/css/dataTables.css">
    
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Feature detection -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=asset_url()?>assets/js/html5shiv.js"></script>
    <script src="<?=asset_url()?>assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <section id="container">
              <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">Horari<span>OS</span></a>
            </div>
            <!--logo end-->
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            
        </header>
        <!--sidebar start-->
          <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
    <ul class="nano-content">

        <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-envelope"></i><span>Acciones</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                             <li><a href="<?=asset_url()?>index.php/horarioDisponible">Modificar horario</a>
                            </li>
                        </ul>
                    </li>
        
        <li>
            <a href="<?=asset_url()?>index.php/login/logout"><span>Salir</span></a>
        </li>
    </ul>
</div>

        </aside>
         <!--sidebar end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">

<?php }?>