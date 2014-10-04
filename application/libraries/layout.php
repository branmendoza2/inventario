<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SpaceLab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Calendar -->
    <link rel="stylesheet" href="assets/plugins/fullcalendar/css/fullcalendar.css">
     <!-- DataTables-->
    <link rel="stylesheet" href="assets/plugins/dataTables/css/dataTables.css">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Feature detection -->
     <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
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
        <li>
            <a href="index.php?action=login"><span>Inicio</span></a>
        </li>
        <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-envelope"></i><span>Acciones</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                           <li><a href="index.php?action=asignarMateria">Asignar materia a profesor</a>
                            </li>
                            <li><a href="index.php?action=generarHorario">Generar horarios</a>
                            </li>
                             <li><a href="index.php?action=modificarHorarios">Modificar horario</a>
                            </li>
                        </ul>
                    </li>
        <li class="sub-menu">
            <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Catálogos</span><i class="arrow fa fa-angle-right pull-right"></i></a>
            <ul>
                <li><a href="index.php?action=catalogoMateria">Materia</a></li>
                <li><a href="index.php?action=catalogoProfesores">Profesor</a></li>
                <li><a href="index.php?action=catalogoGrupos">Grupo</a></li>
                <li><a href="index.php?action=catalogoCarrera">Carrera</a></li>
                <li><a href="index.php?action=catalogoCoordinadores">Coordinadores</a></li>
                
            </ul>
        </li>
        
    </ul>
</div>

        </aside>
         <!--sidebar end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">
               #CONTENIDO# 
            </section>
        </section>
        <!--main content end-->
       
    </section>
     <!--Global JS-->
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/plugins/fullcalendar/js/jquery-ui-1.10.1.custom.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="assets/plugins/nanoScroller/jquery.nanoscroller.min.js"></script>
    <script src="assets/js/application.js"></script>
    <!--Page Leve JS -->
    <script src="assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="assets/plugins/fullcalendar/js/calendar.js"></script>
    <script src="assets/plugins/dataTables/js/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/js/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#aula').dataTable();
        });
    </script>
           <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-46627904-1', 'authenticgoods.co');
        ga('send', 'pageview');

</script>
    </body>
</html>