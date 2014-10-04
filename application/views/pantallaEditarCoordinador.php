<div class="row">
                    <div class="col-md-12">
                         <h1 class="h1">Coordinador</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">

							
                            <div class="panel-body">

                                <form class="form-horizontal form-border" id="form" action="<?=asset_url()?>index.php/coordinador/actualizar" method="POST">
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nombre" id="nombre" required="" value="<?php  echo utf8_encode($coordinador->nombre) ?>" placeholder="Required input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Apellido Paterno</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="apaterno" id="apaterno" required="" value="<?php echo utf8_encode($coordinador->apaterno) ?>" placeholder="Required input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Apellido Materno</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="amaterno" id="amaterno" required="" value="<?php echo utf8_encode($coordinador->amaterno) ?>" placeholder="Required input">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-sm-3 control-label">Usuario</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="usuario" id="usuario" required="" value="<?php echo utf8_encode($coordinador->usuario) ?>" placeholder="Required input" readonly="readonly">
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-sm-3 control-label">Contraseña</label>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control" name="contrasena" id="contrasena" required="" value="<?php echo utf8_encode($coordinador->contrasena) ?>" placeholder="Required input" >
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="id" id="id" required="" value="<?php echo utf8_encode($coordinador->id) ?>" placeholder="Required input">
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
            