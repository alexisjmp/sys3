<?php
?>

        <div class="container">
        <div class="panel-group ">
        
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-info ">
                    <div class="panel-heading "><a data-toggle="collapse" href="#collapse2">Valores</a></div>   
                        
                        <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body "  >
                            <div class="row form-group">
                                <div class="col-lg-7 col-md-7 col-xs-12">
                                    
                                        <label class="col-lg-5 col-md-5 col-xs-8 control-label " >Cantida de ingreso</label>
                                        <div class="col-lg-6 col-md-6 col-xs-7">
                                            <input type="text" id="valores" class=" form-control" required>
                                        </div>    
                                    
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-7 col-md-7 col-xs-12">
                                    
                                        <label class="col-lg-5 col-md-5 col-xs-8 control-label  " >CIF Unitario</label>
                                        <div class="col-lg-6 col-md-6 col-xs-7">
                                            <input type="text" id="unitario" class=" form-control" required>
                                        </div>
                                </div>
                                    <div class="col-lg-5 col-md-5 col-xs-12">
                                        <div class="form-group">
                                            <label class="col-lg-5 col-md-5 col-xs-7 control-label  " >CIF total</label>
                                            <div class="col-lg-6 col-md-6 col-xs-7">
                                                <input type="text" id="cif_total" class=" form-control" required disabled>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-7 col-md-7 col-xs-12">
                                    
                                        <label class="col-lg-5 col-md-5 col-xs-8 control-label " >Valor de compra</label>
                                        <div class="col-lg-6 col-md-6 col-xs-7">
                                            <input type="text" id="valor_compra" class=" form-control" required>
                                        </div>    
                                    
                                </div>
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                        
                                            <label class="col-lg-5 col-md-5 col-xs-7 control-label  " >Total Compra</label>
                                            <div class="col-lg-6 col-md-6 col-xs-7">
                                                <input type="text" id="total_compra" class=" form-control" required disabled>
                                            </div>
                                        
                                    </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-7 col-md-7 col-xs-12">
                                    
                                        <label class="col-lg-5 col-md-5 col-xs-8 control-label " >Valor viu</label>
                                        <div class="col-lg-6 col-md-6 col-xs-7">
                                            <input type="text" id="valor_viu" class=" form-control" required>
                                        </div>    
                                    
                                </div>
                                <div class="col-lg-5 col-md5 col-xs-12">
                                        
                                            <label class="col-lg-5 col-md-5 col-xs-7 control-label  " >Total Viu</label>
                                            <div class="col-lg-6 col-md-6 col-xs-7">
                                                <input type="text" id="total_viu" class=" form-control" required disabled>
                                            </div>
                                        
                                    </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-7 col-md-7 col-xs-12">
                                    
                                        <label class="col-lg-5 col-md-5 col-xs-7 control-label " >Costo Real</label>
                                        <div class="col-lg-6 col-md-6 col-xs-7">
                                            <input type="text" id="costo_real" class=" form-control" required>
                                        </div>    
                                    
                                </div>
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                    
                                        <label class="col-lg-5 col-md-5 col-xs-7 control-label  " >Total Real</label>
                                        <div class="col-lg-6 col-md-6 col-xs-7">
                                            <input type="text" id="total_real" class=" form-control" required disabled>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="row form-group">    
                                <div class="col-lg-1 col-md-offset-3 col-md-2  col-xs-3 " >
                                    
                                        <div>
                                            <button type="button" title="Aceptar"  class="btn btn-success "
                                                    onclick=""> <span  class="glyphicon glyphicon-ok small"></span></button>
                                        </div>
                                    
                                </div>
                                <div class="col-lg-1  col-md-offset-0 col-md-2 col-xs-4">
                                    
                                        <div>
                                            <button type="button"  title="Denegar" class="btn btn-primary "
                                                    onclick=""> <span  class="glyphicon glyphicon-remove small"></span></button>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                            </div>    
                    </div>   
                </div>
                <div class="col-md-6">
                    <div class="panel panel-info ">
                    <div class="panel-heading "><a data-toggle="collapse" href="#collapse3">Detalles</a></div>   
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body "  >
                            <div class="row form-group">
                                <div class="col-lg-5 col-md-5 col-xs-12">   
                                        <label class="col-lg-5 col-md-5 col-xs-8 control-label " >Unidad de medida</label>
                                        <div class="col-lg-3 col-md-3 col-xs-7">
                                            <input type="text" id="unidad" class=" form-control" required disabled>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-7">
                                            <input type="text" id="medida" class=" form-control" required disabled>
                                        </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                    <label class="col-lg-5 col-md-5 col-xs-8 control-label " >Unidades x U. de medida   </label>
                                    <div class="col-lg-5 col-md-5 col-xs-7">
                                        <input type="text" id="unidades_por_medida" class=" form-control" required>
                                    </div>    
                                </div>   
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <label class="col-lg-3 col-md-3 col-xs-8 control-label " >Codigo</label>
                                    <label class="col-lg-3 col-md-3 col-xs-8 control-label " >Aduanero</label>
                                    <label class="col-lg-3 col-md-3 col-xs-8 control-label " >de Item</label>
                                    <label class="col-lg-3 col-md-3 col-xs-8 control-label " >de Inventario</label>
                                    <div class="col-lg-3 col-md-3 col-xs-7">
                                        <input type="text" id="codigo_detalle" class=" form-control" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-7">
                                        <input type="text" id="aduanero_detalle" class=" form-control" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-7">
                                        <input type="text" id="item_detalle" class=" form-control" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-7">
                                        <input type="text" id="inventario_detalle" class=" form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                               <div class="col-lg-5 col-md-5 col-xs-12">
                                    <label class="col-lg-6 col-md-6 col-xs-8 control-label " >Codigo de producto   </label>
                                    <div class="col-lg-5 col-md-5 col-xs-7">
                                        <input type="text" id="codigo_de_producto" class=" form-control" required>
                                    </div>    
                                </div>
                                <div class="col-lg-7 col-md-7 col-xs-12">
                                    <div class="col-lg-1">
                                        <button type="button" title="Aceptar"  class="btn btn-success "
                                                    onclick=""> <span  class="glyphicon glyphicon-search small"></span></button>
                                    </div>
                                    <div class="col-lg-5 col-lg-offset-2 col-md-5 col-xs-7">
                                        <input type="text" id="codigo_de_producto" class=" form-control" required disabled>
                                    </div>    
                                </div>
                            </div>
                            <div class="row form-group">
                               <div class="col-lg-5 col-md-5 col-xs-12">
                                    <label class="col-lg-6 col-md-6 col-xs-8 control-label " >Codigo arancelario   </label>
                                    <div class="col-lg-5 col-md-5 col-xs-7">
                                        <input type="text" id="codigo_arancelario" class=" form-control" required disabled>
                                    </div>    
                                </div>
                                <div class="col-lg-7 col-md-7 col-xs-12">
                                    
                                    <div class="col-lg-8 col-md-8 col-xs-7">
                                        <input type="text" id="txt_codigo_arancelario" class=" form-control" required disabled>
                                    </div>    
                                </div>
                            </div>
                            <div class="row form-group">
                               <div class="col-lg-5 col-md-5 col-xs-12">
                                    <label class="col-lg-6 col-md-6 col-xs-8 control-label " >Grupo   </label>
                                    <div class="col-lg-5 col-md-5 col-xs-7">
                                        <input type="text" id="Grupo" class=" form-control" required>
                                    </div>    
                                </div>
                                <div class="col-lg-7 col-md-7 col-xs-12">
                                    <div class="col-lg-1">
                                        <button type="button" title="Aceptar"  class="btn btn-success "
                                                    onclick=""> <span  class="glyphicon glyphicon-search small"></span></button>
                                    </div>
                                    <div class="col-lg-5 col-lg-offset-2 col-md-5 col-xs-7">
                                        <input type="text" id="txt_aceptar" class=" form-control" required disabled>
                                    </div>    
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <label class="col-lg-5 col-md-5 col-xs-8 control-label " >Nombre de producto</label>
                                    <label class="col-lg-3 col-md-3 col-xs-8 control-label " >Modelo</label>
                                    <label class="col-lg-4 col-md-4 col-xs-8 control-label " >Tipo</label>
                                    <div class="col-lg-4 col-md-4 col-xs-7">
                                        <input type="text" id="nombre_producto" class=" form-control" required>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-7">
                                        <input type="text" id="modelo" class=" form-control" required>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-7">
                                        <input type="text" id="tipo" class=" form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <label class="col-lg-4 col-md-4 col-xs-8 control-label " >Marca</label>
                                    <label class="col-lg-4 col-md-4 col-xs-8 control-label " >Inform Adicional</label>
                                    <label class="col-lg-4 col-md-4 col-xs-8 control-label " >Numero de serie</label>
                                    <div class="col-lg-4 col-md-4 col-xs-7">
                                        <input type="text" id="marca" class=" form-control" required>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-7">
                                        <input type="text" id="inform_adicional" class=" form-control" required>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-7">
                                        <input type="text" id="numero_serie" class=" form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>    
        </div>
    