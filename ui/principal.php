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
<body onload="openmodal()">
    <div class="panel panel-default">
        <div class="panel-heading">Cabezera</div>
        <div class="panel-body">
            <div class="row">

                <div class=" row col-md-4 ">
                    <div class="col-md-2">
                        <button class="btn btn-info btn-lg " id="myBtn"  data-toggle="modal" data-target="#MyModal" data-backdrop="true">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="text">
                    </div>
                </div>

                <div class="col-md-8" id="marco_origen">

                </div>
                <div class=" row col-md-4 ">
                    <button class="btn btn-info btn-mid" id="myBtn2" onclick="mostrar_detalle()">
                        Mostrar Detalle
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="panel-group ">
            <div class="panel panel-info ">
                <div class="panel-heading "><a data-toggle="collapse" href="#collapse1">Detalles</a></div>   
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body "  >
                        <div class="row">
                            <div class="col-md-7" id="marco_detalle">        
                            </div>
                            <div class="col-md-5" >  
                                <div class="panel-group ">
                                    <div class="panel panel-info ">
                                        <div class="panel-heading "><a data-toggle="collapse" href="#collapse13">Valores</a></div>   
                                        <div id="collapse13" class="panel-collapse collapse">
                                            <div class="panel-body "  >
                                                <div id="marco_valores">
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
                        <label class=" col-xs-12 col-md-2 control-label">Documento</label>
                        <div class="col-xs-10 col-md-2">
                            <select class="form-control">
                                <option>101</option>
                                <option>201</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <input type="text" class="form-control" disabled="">
                        </div>
                    </div>
                    <!--fin fila 1-->
                    <!--fila 2-->
                    <div class="row form-group">
                        <label class=" col-xs-12 col-md-2 control-label">Numero</label>
                        <div class="col-xs-12 col-md-2">
                            <input type="text" class="form-control">
                        </div>
                        <label class=" col-xs-12 col-md-1 control-label">Fecha</label>
                        <div class="col-xs-12 col-md-2">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-xs-12 col-md-2">
                            <select class="form-control">
                                <option>Tipo de Documento</option>   
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-2">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <!--fin fila 2-->
                    <!--fila 3-->
                    <div class="row form-group">
                        <div class="col-xs-12 col-md-3 col-md-offset-1">
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
</body>