<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    function openmodal() {
        $("#MyModal").modal("show");
        $("#MyModal").on('shown.bs.modal', function () {
            //     $("#myModal").on('hide.bs.modal', function () {
            //     
            //   loadDoc();

        });
        mostrar_detalle();
    }

    function mostrar_origen() {
        marco = "marco_origen";
        ruta = "origen.php";
        data = ""
        sendajax(marco, ruta, data)
    }

    function mostrar_detalle() {
        marco = "marco_detalle";
        ruta = "detalle.php";
        data = ""
        sendajax(marco, ruta, data)
        mostrar_valores();
    }

    function mostrar_valores() {
        marco = "marco_valores";
        ruta = "valores.php";
        data = ""
        sendajax(marco, ruta, data)
    }

    function sendajax(marco, ruta, data) {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(marco).innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", ruta, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(data);
    }
</script>
<body onload="openmodal()" >
    <div class="panel panel-default">
        <div class="panel-heading">Cabezera</div>
        <div class="panel-body">
            <div class="row">

                <div class=" row form-group col-md-4 col-sm-12 col-lg-4 col-xs-12">
                    <div class="col-md-2 col-sm-2 col-lg-2 col-xs-3">
                        <button class="btn btn-info btn-md " id="myBtn"  data-toggle="modal" data-target="#MyModal" data-backdrop="true">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                    <div class="col-md-8 col-sm-8 col-lg-8 col-xs-8">
                        <input class="form-control" type="text">
                    </div>
                </div>

                <div class="col-md-8" id="marco_origen">

                </div>
<!--                <div class="row form-group col-md-4 col-sm-12 col-lg-4 col-xs-12 " >
                    <button class="btn btn-info btn-mid" id="myBtn2" >
                        Mostrar Detalle
                    </button>
                </div>-->
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="panel-group ">
            <div class="col-md-7 col-lg-7 col-sm-12  col-xs-12">
            <div class="panel panel-info ">
                <div class="panel-heading ">Detalles
                    <button class="btn btn-info btn-sm " id="myBtn2"  data-toggle="modal" data-target="#MyModal2" data-backdrop="true">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>   
<!--                <div id="collapse1" class="panel-collapse collapse">-->
                    <div class="panel-body "  >
                        <div class="row">
                            
                            <div class="col-md-12 col-lg-12 col-sm-12  col-xs-12" id="marco_detalle">        
                            </div>
                            
                        </div>
                    </div>
<!--                </div>-->
            </div>
                </div>
            <div class="col-md-5 col-lg-5 col-sm-12  col-xs-12" >  
                                <div class="panel-group ">
                                    <div class="panel panel-info ">
                                        <div class="panel-heading ">valores</div>   
<!--                                        <div id="collapse13" class="panel-collapse collapse">-->
                                            <div class="panel-body "  >
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="marco_valores">
                                                </div>
                                            </div>
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="MyModal"  role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nombre personal</h4>
                </div>
                <div class="modal-body">
                    <!--                        fila 1-->
                    <div class="row form-group">
                        <label class=" col-xs-12 col-sm-12 col-md-2 control-label">Documento</label>
                        <div class="col-xs-12 col-sm-12  col-md-2">
                            <select class="form-control">
                                <option>101</option>
                                <option>201</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12  col-md-4">
                            <input type="text" class="form-control" disabled="">
                        </div>
                    </div>
                    <!--fin fila 1-->
                    <!--fila 2-->
                    <div class="row form-group">
                        <label class=" col-xs-12 col-sm-12  col-md-2 control-label">Numero</label>
                        <div class="col-xs-12 col-sm-12  col-md-2">
                            <input type="text" class="form-control">
                        </div>
                        <label class=" col-xs-12 col-sm-12 col-md-1 control-label">Fecha</label>
                        <div class="col-xs-12 col-sm-12  col-md-2">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-xs-12 col-sm-12  col-md-2">
                            <select class="form-control">
                                <option>Tipo de Documento</option>   
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12  col-md-2">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <!--fin fila 2-->
                    <!--fila 3-->
                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-12  col-md-3 col-md-offset-1">
                            <button type="button"  onclick="mostrar_origen()" class="btn btn-info btn-md">
                                <span class="glyphicon glyphicon-search"></span> Buscar documento 
                            </button>
                        </div>


                    </div>
                    <div id="marco_documentos">

                    </div>   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>


                </div>

            </div>
        </div>

    </div>
    <!--fin modal-->

    <div class="modal fade" id="MyModal2"  role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Productos</h4>
                </div>
                <div class="modal-body">

                    <div class="row form-group">
                        <!--                               <div class="col-lg-4 col-md-4 col-xs-12">-->
                        <label class="col-lg-2 col-md-2 col-xs-12 control-label " >Codigo de producto   </label>
                        <div class="col-lg-2 col-md-2 col-xs-8">
                            <input type="text" id="codigo_de_producto" class=" form-control" required>
                        </div>    

                        <!--                                <div class="col-lg-4 col-md-4 col-xs-12">-->
                        <div class=" col-lg-1 col-xs-4">
                            <button type="button" title="Aceptar"  class="btn btn-success "
                                    onclick=""> <span  class="glyphicon glyphicon-search small"></span></button>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-8">
                            <input type="text" id="codigo_de_producto" class=" form-control" required disabled>
                        </div>   
                    </div>

                    <div class="row form-group">
                        <!--                               <div class="col-lg-4 col-md-4 col-xs-12">-->
                        <label class="col-lg-2 col-md-2 col-xs-12 control-label " >Codigo arancelario   </label>
                        <div class="col-lg-2 col-md-2 col-xs-8">
                            <input type="text" id="codigo_arancelario" class=" form-control" required disabled>
                        </div>
                      
                        <!--                                </div>-->
                        <!--                                <div class="col-lg-4 col-md-4 col-xs-12">-->

                        <div class="col-lg-3 col-md-3 col-xs-8">
                                <input type="text" id="txt_codigo_arancelario" class=" form-control" required disabled>
                        </div>    
                    </div>

                    <div class="row form-group">
                        <!--                               <div class="col-lg-4 col-md-4 col-xs-12">-->
                        <label class="col-lg-2 col-md-2 col-xs-12 control-label " >Grupo   </label>
                        <div class="col-lg-2 col-md-2 col-xs-8">
                            <input type="text" id="Grupo" class=" form-control" required>
                        </div>    
                        <!--                                </div>-->
                        <!--                                <div class="col-lg-4 col-md-4 col-xs-12">-->
                        <div class="col-lg-1 col-xs-3">
                            <button type="button" title="Aceptar"  class="btn btn-success "
                                    onclick=""> <span  class="glyphicon glyphicon-search small"></span></button>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-8">
                            <input type="text" id="txt_aceptar" class=" form-control" required disabled>
                        </div>    
                        <!--                                </div>-->
                    </div>

                    <div id="">

                    </div>   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>


                </div>

            </div>
        </div>

    </div>

</body>