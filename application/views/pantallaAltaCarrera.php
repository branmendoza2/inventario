<div class="row">
                    <div class="col-md-12">
                         <h1 class="h1">Alta Carrera</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
						
						

							
							
							
							
							
                            <div class="panel-body">

                                <form class="form-horizontal form-border" id="form" action="<?=asset_url()?>index.php/carrera/insertar" >
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nombre" id="nombre" required="" placeholder="Campo Requerido">
                                        </div>
                                    </div>
									
									
									<div class="form-group">
                                        <label class="col-sm-3 control-label">Coordinador</label>
                                        <div class="col-sm-6">
											<select class="form-control input-sm" id="coordinador_id" name="coordinador_id">
										<?php
											foreach ($coordinadores as $valor) { ?>
													<option value="<?php echo utf8_encode($valor->id) ?>"><?php echo utf8_encode($valor->nombre).' '.utf8_encode($valor->apaterno).' '.utf8_encode($valor->amaterno) ?></option>
                                    
										<?php } ?>
										</select>
										
                                        </div>
                                    </div>
									
									
                 
                                    <div class="form-group">
                                        <div class="col-sm-offset-8 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Agregar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            <script src="<?=asset_url()?>assets/js/jquery-1.10.2.min.js"></script>            