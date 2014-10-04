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
    <section id="login-container">

        <div class="row">
            <div class="col-md-3" id="login-wrapper">
                <div class="panel panel-primary animated flipInY">
                    <div class="panel-heading">
                        <h3 class="panel-title">     
                           Ingresar
                        </h3>      
                    </div>
                    <div class="panel-body">
                       <p>Ingresa tus datos</p>

					   
					   <form class="form-horizontal" role="form" id="form" action="<?=asset_url()?>index.php/login/validar" method="POST">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="email" name="usuario" placeholder="usuario">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-group">
                               <div class="col-md-12">
                                    <input type="password" class="form-control" id="password"  name="contrasena" placeholder="Contraseña">
                                    <i class="fa fa-lock"></i>
                                    <a href="javascript:void(0)" class="help-block">Olvidaste contraseña?</a>
                                </div>
                            </div>
                            <div class="form-group">
                               <div class="col-md-12">
                                     <button type="submit" class="btn btn-primary">Iniciar</button
                                    <hr />
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Global JS-->
    <script src="<?=asset_url()?>assets/js/jquery-1.10.2.min.js"></script>
    <script src="<?=asset_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=asset_url()?>assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="<?=asset_url()?>assets/plugins/nanoScroller/jquery.nanoscroller.min.js"></script>
    <script src="<?=asset_url()?>assets/js/application.js"></script>
           
</body>

</html>
