<div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->

                        <!--breadcrumbs end -->
                        <h1 class="h1">Alta de Equipo</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            <ul class="breadcrumb">
                            <li><a href="forms-validation.html#">Inicio</a>
                            </li>
                            <li><a href="<?=asset_url()?>index.php/equipo/">Equipos</a></li>
                            <li class="active">Alta Equipo</li>
                        </ul>
                            </div>
                            <div class="panel-body">

                                <form class="form-horizontal form-border" enctype="multipart/form-data" id="form" action="<?=asset_url()?>index.php/equipo/insertar" method="post">
                                     
                                    
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Nombre: </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nombre" id="nombre" required="" value=""/>
                                        </div>
                                    </div>                         
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Marca: </label>
                                        <div class="col-sm-6">
                                            <select id="marca" name="marca" class="form-control input-sm">
                                                <?php foreach ($marcas as $valor) { ?>
                                                    <option value="<?php echo $valor->Id?>"><?php echo $valor->Descripcion?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Modelo: </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="modelo" id="modelo" required="" value=""/>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Numero de Serie: </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nserie" id="nserie" required="" value=""/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Numero de Inventario: </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="ninventario" id="ninventario" required="" value=""/>
                                        </div>
                                    </div>



                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Estado: </label>
                                        <div class="col-sm-6">
                                            <select id="estado" name="estado" class="form-control input-sm">
                                                <?php foreach ($estados as $valor) { ?>
                                                    <option value="<?php echo $valor->Id?>"><?php echo $valor->Descripcion?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Area: </label>
                                        <div class="col-sm-6">
                                            <select id="area" name="area" class="form-control input-sm">
                                                <?php foreach ($areas as $valor) { ?>
                                                    <option value="<?php echo $valor->Id?>"><?php echo $valor->Descripcion?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Imagen: </label>
                                        <div class="col-sm-6">
                                            
                                            <input name="userfile" type="file" />
                                          
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Observacion: </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="observacion" id="observacion" required="" value=""/>
                                        </div>
                                    </div>

                                   
                                    <div class="form-group">
                                        <div class="col-sm-offset-7 col-sm-10">
                                          
                                            <button type="submit" class="btn btn-primary" >Dar de Alta</button>
                                        </div>
                                    </div>
                                </form>

                                <script src="<?=asset_url()?>assets/js/jquery-1.10.2.min.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
<script src="<?=asset_url()?>assets/js/jquery-1.10.2.min.js"></script>
