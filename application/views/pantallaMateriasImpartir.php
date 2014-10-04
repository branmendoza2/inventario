
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Asigne materia a profesor</h3>
                            <div class="actions pull-right">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-times"></i>
                            </div>
                          </div>
                          <div class="panel-body">
											   
                           <form method="post" action="<?=asset_url()?>index.php/materia/asignarActualizar">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <h3 class="panel-title">Profesores</h3>
                                            <select  class="form-control input-sm" name="profe">
                                            <?php foreach ($profesores as $valor) { ?>
											
                                                    <option value="<?php echo utf8_encode($valor->id) ?>">
                                                    <?php echo utf8_encode($valor->id ." - ") ?>
                                                    <?php echo utf8_encode($valor->apaterno) ?>
                                                    <?php echo utf8_encode($valor->amaterno) ?>
                                                    <?php echo utf8_encode($valor->nombre) ?>
                                                    </option>
                                                <?php } ?>
                                             </select>
                                            <br />
                                            <h3 class="panel-title">Materia</h3>
                                            <select  class="form-control input-sm" name="materia">
                                            <?php foreach ($materias as $mat) { ?>
                                                    <option value="<?php echo utf8_encode($mat->id) ?>">
                                                    <?php echo utf8_encode($mat->id." - ") ?>
                                                    <?php echo utf8_encode($mat->nombre) ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                        <div class="col-sm-offset-8 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    
                                </form>

                       </div>
                     </div>
                </div>
            </div>
 
         <!--main content end-->

             <script src="<?=asset_url()?>assets/js/jquery-1.10.2.min.js"></script>
