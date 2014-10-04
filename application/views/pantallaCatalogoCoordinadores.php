<!--main content start-->
         <section class="">
            <section id="">
                 <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                           
                        </ul>
                        <!--breadcrumbs end -->
                    <h1 class="h1">Lista de Coordinadores</h1>
                    </div>
                </div>

            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Coordinadores</h3>
                            <div class="actions pull-right">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-times"></i>
                            </div>
                          </div>
						  <form role = "form" action="altaProfesor.html" method="POST">
							<a href="<?=asset_url()?>index.php/coordinador/alta"><type="" class="btn btn-primary">Nuevo Coordinador</button></a>
							</form>
                          <div class="panel-body">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
									<th>Usuario</th>
                                    <th>Carrera</th>
                                    <th></th>
                                </tr>
                            </thead>
                     
                            <tbody>


                                <?php 
                                foreach ($profesores as $valor) { ?>
                                <tr>
                                    <td><?php echo utf8_decode($valor->id) ?> </td>
                                    <td><?php echo utf8_encode($valor->nombre) ?> </td>
                                    <td><?php echo utf8_encode($valor->apaterno) ?></td>
                                    <td><?php echo utf8_encode($valor->amaterno) ?></td>
									<td><?php echo utf8_encode($valor->usuario) ?></td>
									<td><?php echo utf8_encode($valor->nombrecarrera) ?></td>
                                    <td><a href="<?=asset_url()?>index.php/coordinador/editar?id=<?php echo utf8_encode($valor->id) ?>"><i class="fa fa-edit"></i> Editar</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                       </div>
                     </div>
                </div>
            </div>

            </section>
         </section>
         <!--main content end-->

             <script type="text/javascript" src="<?=asset_url()?>assets/js/jquery-1.10.2.min.js"></script>
    
    
    
    
    <!--Page Leve JS -->
    <script type="text/javascript" src="<?=asset_url()?>assets/plugins/dataTables/js/jquery.dataTables.js"></script>
    
    <script type="text/javascript" src="<?=asset_url()?>assets/plugins/dataTables/js/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').dataTable();
        });
    </script>