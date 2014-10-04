<div class="row">
                    <div class="col-md-12">
                        <h1 class="h1">Grupo</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Agregar Grupooo</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">

                                <form class="form-horizontal form-border" id="form" action="<?=asset_url()?>index.php/grupo/actualizar" method="POST">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-6">
                                            <input type="hidden" class="form-control" name="id" id="id" required="" value="<?php echo utf8_encode($grupo->id) ?>" placeholder="Required input">
                                            <input type="text" class="form-control" name="nombre" id="nombre" required="" placeholder="Required input" value="<?php  echo utf8_encode($grupo->nombre) ?>">
                                            <br>
                                            <h3 class = "panel-tittle">Carrera</h3>
                                            <select class="form-control  input-sm" name="carrera">
                                            <?php
                                            foreach ($carreras as $valor) { ?>
                                             <option value="<?php echo utf8_encode($valor->id) ?>"   <?php if($valor->id==$grupo->carrera_id){echo "selected";}?>  ><?php echo utf8_encode($valor->nombre) ?></option>
                                            <?php } ?>
                                            </select>
                                             <br>
                                            <h3 class = "panel-tittle">Semestre</h3>
                                            <select class="form-control input-sm" name="semestre">
                                            <option value="1" <?php if("1"==$grupo->semestre_id){echo "selected";}?>>1</option> 
                                            <option value="2" <?php if("2"==$grupo->semestre_id){echo "selected";}?>>2</option>
                                            <option value="3" <?php if("3"==$grupo->semestre_id){echo "selected";}?>>3</option>
                                            <option value="4" <?php if("4"==$grupo->semestre_id){echo "selected";}?>>4</option> 
                                            <option value="5" <?php if("5"==$grupo->semestre_id){echo "selected";}?>>5</option>
                                            <option value="6" <?php if("6"==$grupo->semestre_id){echo "selected";}?>>6</option>
                                             <option value="7" <?php if("7"==$grupo->semestre_id){echo "selected";}?>>7</option>
                                            <option value="8" <?php if("8"==$grupo->semestre_id){echo "selected";}?>>8</option>
                                            </select>
                                            

                                        </div>


                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-offset-8 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Editar</button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>

                       <script src="<?=asset_url()?>assets/js/jquery-1.10.2.min.js"></script> 