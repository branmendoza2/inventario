<div class="row">
                    <div class="col-md-12">
                         <h1 class="h1">Marca</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
						<div class="panel-heading">
                                <h3 class="panel-title">Alta Marca</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>						
							
                            <div class="panel-body">

                                <form class="form-horizontal form-border" id="form" action="<?=asset_url()?>index.php/marca/insertar" >
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nombre" id="nombre" required="" placeholder="Campo Requerido">
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