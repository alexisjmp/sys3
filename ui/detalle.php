<?php ?>
<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
    <head>

               <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <title>Mantenedor del personal</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                 elementos para datepicker jquery-1.12.4.js no compatible con bs
                 <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
                <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                <link rel="stylesheet" href="/resources/demos/style.css">
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link type="text/css" rel="stylesheet" href="css/cssagenda.css">      
                <link type="text/css" rel="stylesheet" href="css/style.css">
                <link type="text/css" rel="stylesheet" href="css/eval.css">
                <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
                <link type="text/css" rel="stylesheet" href="css/tablefiltercss.css">
        
                <script type="text/javascript" src="js/opagenda.js"></script> 
                <script type="text/javascript" src="js/tablefilterjs.js"></script>
                <script type="text/javascript" src="../js/AjaxUpload.2.0.min.js"></script>
                <script type="text/javascript" src="../js/utilidades.js"></script>
                <script type="text/javascript" src="../js/jquery.Rut.js"></script>
                <script type="text/javascript" src="js/funciones_grafico.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container ">
            <div class="panel-group ">
                <div class="panel panel-info ">
                    <div class="panel-heading "><a data-toggle="collapse" href="#collapse1">Detalles</a></div>   
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body "  >
                            <div class="row form-group">
                                <div class="col-lg-4 col-md-4 col-xs-12">   
                                        <label class="col-lg-5 col-md-5 col-xs-8 control-label " >Unidad de medida</label>
                                        <div class="col-lg-3 col-md-3 col-xs-7">
                                            <input type="text" id="unidad" class=" form-control" required disabled>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-7">
                                            <input type="text" id="medida" class=" form-control" required disabled>
                                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
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
                               <div class="col-lg-4 col-md-4 col-xs-12">
                                    <label class="col-lg-6 col-md-6 col-xs-8 control-label " >Codigo de producto   </label>
                                    <div class="col-lg-5 col-md-5 col-xs-7">
                                        <input type="text" id="codigo_de_producto" class=" form-control" required>
                                    </div>    
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="col-lg-2">
                                        <button type="button" title="Aceptar"  class="btn btn-success "
                                                    onclick=""> <span  class="glyphicon glyphicon-search small"></span></button>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-xs-7">
                                        <input type="text" id="codigo_de_producto" class=" form-control" required disabled>
                                    </div>    
                                </div>
                            </div>
                            <div class="row form-group">
                               <div class="col-lg-4 col-md-4 col-xs-12">
                                    <label class="col-lg-6 col-md-6 col-xs-8 control-label " >Codigo arancelario   </label>
                                    <div class="col-lg-5 col-md-5 col-xs-7">
                                        <input type="text" id="codigo_arancelario" class=" form-control" required disabled>
                                    </div>    
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    
                                    <div class="col-lg-9 col-md-9 col-xs-7">
                                        <input type="text" id="txt_codigo_arancelario" class=" form-control" required disabled>
                                    </div>    
                                </div>
                            </div>
                            <div class="row form-group">
                               <div class="col-lg-4 col-md-4 col-xs-12">
                                    <label class="col-lg-6 col-md-6 col-xs-8 control-label " >Grupo   </label>
                                    <div class="col-lg-5 col-md-5 col-xs-7">
                                        <input type="text" id="Grupo" class=" form-control" required>
                                    </div>    
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="col-lg-2">
                                        <button type="button" title="Aceptar"  class="btn btn-success "
                                                    onclick=""> <span  class="glyphicon glyphicon-search small"></span></button>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-xs-7">
                                        <input type="text" id="txt_aceptar" class=" form-control" required disabled>
                                    </div>    
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <label class="col-lg-4 col-md-4 col-xs-8 control-label " >Nombre de producto</label>
                                    <label class="col-lg-4 col-md-4 col-xs-8 control-label " >Modelo</label>
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
    </body>
</html>

