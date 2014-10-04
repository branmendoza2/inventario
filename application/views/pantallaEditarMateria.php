<div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            <li><a href="forms-validation.html#">Dashboard</a>
                            </li>
                            <li>Materia</li>
                            <li class="active">Editar Materia</li>
                        </ul>
                        <!--breadcrumbs end -->
                        <h1 class="h1">Materia</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Editar Materia</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">

                                <form class="form-horizontal form-border" id="form" action="<?=asset_url()?>index.php/materia/actualizar" method="post">
                                     
                                    <input type="hidden" id="id" name="id" value="<?php echo $materia->idMateria;?>">
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Materia: </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="materia" id="materia" required="" value="<?php echo $materia->nombreMateria;?>"/>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Carrera: </label>
                                        <div class="col-sm-6">
                                            <select id="carrera" name="carrera" class="form-control input-sm">
                                                <?php foreach ($carreras as $valor) { ?>
                                                    <option value="<?php echo $valor->id?>" <?php if($valor->id==$materia->idCarrera){echo "selected";}?> ><?php echo $valor->nombre?></option>
                                                <?php }?>

                                            </select>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Semestre: </label>
                                        <div class="col-sm-6">
                                            <select id="semestre" name="semestre" class="form-control input-sm">
                                                <?php foreach ($semestres as $valor) { ?>
                                                    <option value="<?php echo $valor->id?>" <?php if($valor->id==$materia->idSemestre){echo "selected";}?> > <?php echo $valor->nombre?></option>
                                                <?php }?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-sm-offset-8 col-sm-10">
                                          
                                            <button type="submit" class="btn btn-primary" >Editar</button>
                                        </div>
                                    </div>
                                </form>

                                <script src="<?=asset_url()?>assets/js/jquery-1.10.2.min.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
<script src="<?=asset_url()?>assets/js/jquery-1.10.2.min.js"></script>
