<!--main content start-->
         <section class="">
            <section id="">
                 <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                           
                        </ul>
                        <!--breadcrumbs end -->
                    <h1 class="h1">Detalle de Equipo</h1>
                    </div>
                </div>

            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Equipo</h3>
                            <div class="actions pull-right">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-times"></i>
                            </div>
                          </div>
						 
                          <div class="panel-body">

                            <?php 
                            foreach ($equipo as $valor) { ?>
                            <IMG SRC="<?=asset_url()?>assets/img/<?php echo utf8_encode($valor->imagen) ?>" height="250" width="180">
                            <?php } ?>
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                     
                            <tbody>


                                <?php 
                                foreach ($equipo as $valor) { ?>
                                <tr>
                                    <td>Nombre</td>
                                    <td><?php echo $valor->nombre ?> </td>                    
                                    
                                   
                                </tr>
                                <tr>
                                    <td>Marca</td>
                                    <td><?php echo $valor->marca ?></td>
                                </tr>
                                <tr>
                                    <td>Modelo</td>
                                    <td><?php echo $valor->modelo ?></td>
                                </tr>
                                <tr>
                                    <td>Area</td>
                                    <td><?php echo $valor->Area ?></td>
                                </tr>
                                <tr>
                                    <td># Serie</td>
                                    <td><?php echo $valor->nserie ?></td>
                                </tr>
                                <tr>
                                    <td># Iventario</td>
                                    <td><?php echo $valor->ninventario ?></td>
                                </tr>
                                <tr>
                                    <td>Estado</td>
                                    <td><?php echo $valor->Estado ?></td>
                                </tr>
                                <tr>
                                    <td>Observaciones</td>
                                    <td><?php echo $valor->observacion ?></td>
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
