<?php ?>
<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
    <head>

               <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <title>Modulo de valores</title>
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
                    <div class="panel panel-info  ">
                        <div class="panel-heading "><a data-toggle="collapse" href="#collapse1">Valores</a></div>   
                        
                        <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body "  >
                            <div class="row form-group">
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    
                                        <label class="col-lg-5 col-md-5 col-xs-8 control-label " >Cantida de ingreso</label>
                                        <div class="col-lg-6 col-md-6 col-xs-7">
                                            <input type="text" id="valores" class=" form-control" required>
                                        </div>    
                                    
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    
                                        <label class="col-lg-5 col-md-5 col-xs-8 control-label  " >CIF Unitario</label>
                                        <div class="col-lg-6 col-md-6 col-xs-7">
                                            <input type="text" id="unitario" class=" form-control" required>
                                        </div>
                                </div>
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <div class="form-group">
                                            <label class="col-lg-4 col-md-4 col-xs-7 control-label  " >CIF total</label>
                                            <div class="col-lg-6 col-md-6 col-xs-7">
                                                <input type="text" id="cif_total" class=" form-control" required disabled>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    
                                        <label class="col-lg-5 col-md-5 col-xs-8 control-label " >Valor de compra</label>
                                        <div class="col-lg-6 col-md-6 col-xs-7">
                                            <input type="text" id="valor_compra" class=" form-control" required>
                                        </div>    
                                    
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                        
                                            <label class="col-lg-4 col-md-4 col-xs-7 control-label  " >Total Compra</label>
                                            <div class="col-lg-6 col-md-6 col-xs-7">
                                                <input type="text" id="total_compra" class=" form-control" required disabled>
                                            </div>
                                        
                                    </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    
                                        <label class="col-lg-5 col-md-5 col-xs-8 control-label " >Valor viu</label>
                                        <div class="col-lg-6 col-md-6 col-xs-7">
                                            <input type="text" id="valor_viu" class=" form-control" required>
                                        </div>    
                                    
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                        
                                            <label class="col-lg-4 col-md-4 col-xs-7 control-label  " >Total Viu</label>
                                            <div class="col-lg-6 col-md-6 col-xs-7">
                                                <input type="text" id="total_viu" class=" form-control" required disabled>
                                            </div>
                                        
                                    </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    
                                        <label class="col-lg-5 col-md-5 col-xs-7 control-label " >Costo Real</label>
                                        <div class="col-lg-6 col-md-6 col-xs-7">
                                            <input type="text" id="costo_real" class=" form-control" required>
                                        </div>    
                                    
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    
                                        <label class="col-lg-4 col-md-4 col-xs-7 control-label  " >Total Real</label>
                                        <div class="col-lg-6 col-md-6 col-xs-7">
                                            <input type="text" id="total_real" class=" form-control" required disabled>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="row form-group">    
                                <div class="col-lg-1 col-md-offset-0 col-md-2  col-xs-3 " >
                                    
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
                </div>
        </body>
</html>