<!--main content start-->
         <section class="">
            <section id="">
                 <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                           
                        </ul>
                        <!--breadcrumbs end -->
                    <h1 class="h1">Horario Generado</h1>
                    </div>
                </div>

             <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Horario</h3>
                            <div class="actions pull-right">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-times"></i>
                            </div>
                          </div>
                          
                          <a href="<?=asset_url()?>index.php/horario/generar"><type="" class="btn btn-primary">Generar horario</button></a>
                          <div class="panel-body">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                   
                                    <th>Inicio</th>
                                    <th>Fin</th>
									<th>Dia</th>
									<th>Materia</th>
									
									<th>Grupo</th>
									<th>Profesor</th>
									
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                foreach ($horarios as $valor) { ?>
                                <tr>
                                    
                                    <td><?php echo utf8_decode($valor->inicio) ?></td>
									<td><?php echo utf8_decode($valor->fin) ?></td>
									<td><?php echo utf8_decode($valor->dia) ?></td>
                                    <td><?php echo utf8_decode($valor->nombreMateria) ?></td>
									<td><?php echo utf8_decode($valor->nombreGrupo) ?></td>
									<td><?php echo utf8_decode($valor->nombreProfesor) ?></td>
                                    
									 
                                   
                                    
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

             <script src="<?=asset_url()?>assets/js/jquery-1.10.2.min.js"></script>
    
    
    
    
    <!--Page Leve JS -->
    <script src="<?=asset_url()?>assets/plugins/dataTables/js/jquery.dataTables.js"></script>
    
    <script src="<?=asset_url()?>assets/plugins/dataTables/js/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').dataTable();
        });
    </script>