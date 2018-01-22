<?php
session_start();
//require_once('../servicio/funciones_adicionales.php');
// Start the session

date_default_timezone_set('America/Santiago');
$fecha = date('d/m/Y');
if (!isset($_SESSION["usuario"])) {
    $_SESSION["usuario"] = $_GET['nombre'];
    $_SESSION["rut"] = $_GET['rut'];
    $_SESSION["tipo_personal"] = $_GET['tipo_personal'];
    $_SESSION["cod_tipo_especialista"] = $_GET['cod_tipo_especialista'];
} else {
    $_SESSION["usuario"] = $_SESSION["usuario"];
    $_SESSION["rut"] = $_SESSION["rut"];
    $_SESSION["tipo_personal"] = $_SESSION["tipo_personal"];
    $_SESSION["cod_tipo_especialista"] = $_SESSION["cod_tipo_especialista"];
}

//seguridad();
?>
<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
        <title>Ordenes de compras</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- elementos para datepicker jquery-1.12.4.js no compatible con bs-->
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></link>
        <link rel="stylesheet" href="/resources/demos/style.css"></link>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <meta http-equiv="X-UA-Compatible" content="ie=edge"></meta>
        <link type="text/css" rel="stylesheet" href="css/cssagenda.css"> </link>     
        <link type="text/css" rel="stylesheet" href="css/style.css"></link>
        <link type="text/css" rel="stylesheet" href="css/eval.css"></link>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"></link>
        <link type="text/css" rel="stylesheet" href="css/tablefiltercss.css"></link>

        <script type="text/javascript" src="js/opagenda.js"></script> 
        <script type="text/javascript" src="js/tablefilterjs.js"></script>
        <script type="text/javascript" src="../js/AjaxUpload.2.0.min.js"></script>
        <script type="text/javascript" src="../js/utilidades.js"></script>
        <script type="text/javascript" src="../js/jquery.Rut.js"></script>
        <script type="text/javascript" src="js/funciones_grafico.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>

    </head>
    <body>
        <div class="container-fluid">

            <!--Inicio de Barra de Navegacion-->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img class="logo img-fluid" src="img/logo.png" alt=""></a>
                        <a class="navbar-brand" href="#">ConsultaApp</a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="#"> </a></li>
                            <li><a href="ingreso.php" target="_blank">Ingreso</a></li>
                            <li><a href="evaluacion.php"  target="_blank">Ficha paciente</a></li>
                            <li><a href="personal.php"  target="_blank">Personal </a></li>
                            <li ><a href="reporte.php" target="_blank">Reporte </a></li>
                            <li><a href="#"> </a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" id="navbar-collapse-1">
                            <li><a href="#" class="navbar-link"><label id="lblusuario"><?php echo $_SESSION["usuario"]; ?></label></a></li>
                            <label id="test"></label>
                            <input type="text" id="rut_usuario" value="<?php echo $_SESSION["rut"]; ?>" hidden>
                                <li><button class="btn btn-default" onclick="cerrar()">cerrar sesion</button></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="panel-group">
                <div class="col-md-10 col-md-offset-1 col-xs-6 ">
                    <div class="panel-info">    
                        <div class="panel-heading">Orden de  compra</div>    
                        <div class="panel-body">
                            <label id="" hidden></label>
                            <div class="row form-group">
                                <div class="col-md-8 col-md-offset-0 col-xs-6 ">
                                    <label class=" col-md-6 col-xs-12 control-label" for="desc">Descuento de producto :</label>
                                </div>
                            </div><!-- fin la primera fila -->
                            <div class="  form-group">
                                <div class="col-md-4 col-md-offset-0 col-xs-6 ">
                                    <div class="col-md-7 col-md-offset-0 col-xs-6 ">
                                        <label  >Porcentaje (%)
                                            <input  class="radio-inline" id="radio_descuento"  name="radio_descuento" type="radio"   value="1" checked="checked">
                                        </label> 
                                    </div>   
                                    <div class="col-md-7 col-md-offset-0   ">
                                        <label  >Dinero ($)
                                            <input  class="radio-inline" id="radio_descuento"  name="radio_descuento" type="radio"   value="2" checked="checked">
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-4 col-md-offset-0 col-xs-6 ">
                                    <div class="col-md-7 col-md-offset-0 col-xs-6 ">
                                        <label  >IVA (%)
                                            <input  class="radio-inline" id="radio_iva"  name="radio_iva" type="radio"   value="3" checked="checked">
                                        </label> 
                                    </div>   
                                    <div class="col-md-7 col-md-offset-0   ">
                                        <label  >Extension ($)
                                            <input  class="radio-inline" id="radio_iva"  name="radio_iva" type="radio"   value="4" checked="checked">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4  col-xs-6 row ">
                                    <label class=" col-md-6 col-xs-12 control-label row" for="desc">Cantidad de descuento:</label>
                                    <div class="col-md-6 col-xs-12 row ">
                                        <input type="text" class="txt_campo" id="txt_descuento" class="form-control"   placeholder="" pattern="\d{3,8}" required > 
                                    </div>

                                </div>
                                <div class="row"></div>    
                            </div><!-- fin la segunda fila -->

                            <div class=" row form-group">
                                <div class="col-md-4 col-md-offset-8  col-xs-6">
                                    <button type="button" title="Aceptar"  class="btn btn-info "onclick=" agrega()"> <span  class="glyphicon glyphicon-ok small"></span>  agregar</button>
                                    <button type="button" title=Limpiar"  class="btn btn-danger " onclick="limpiar()"> <span  class="glyphicon glyphicon-remove small"></span>  cancelar</button>
                                </div>
                            </div>
                            
                            <div class="row form-group table-responsive" style="width: 920px; height: 200px; overflow-y: scroll;">
                                <table class="table-bordered table-condensed">
                                    <thead >
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>Anular</td>
                                            <td>Cantidad</td>
                                            <td>Unidad</td>
                                            <td>Codigo</td>
                                            <td>Nombre</td>
                                            <td>Fecha Nacimiento</td>
                                            <td>Descripcion</td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr id="fila1">
                                            <td> <span onclick="alert('holamundo')"  class="glyphicon glyphicon-pencil small"></span> </td>
                                            <td><span class="glyphicon glyphicon-remove small"></span></td>
                                            <td>   
                                                <input type="checkbox">
                                            </td>
                                            <td> 
                                                <input type="text" style="width: 60" disabled="">     
                                            </td>
                                            <td>caja/24</td>
                                            <td>002000000000001</td>
                                            <td>Escobas y guantes</td>
                                            <td>27/08/2009</td>
                                            <td>utiles de aseo</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button onclick="remover()">remove</button>
                            </div>
                            
                            <div class="row form-group">
                                <label class=" col-md-6 col-xs-12 control-label" for="desc">Totales:</label>
                            </div>

                            <div class="row form-group">
                                <label for="total">Total: <input type="text" id="total" value="0"> </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function calcular_total() {

                importe_total = 0
                $(".txt_campo").each(
                        function (index, value) {
                            importe_total = importe_total + eval($(this).val()) + eval($("#total").val());
                        }
                );
                $("#total").val(importe_total);
            }
            function agrega()
            {
                $("tbody").append("<tr id='fila2'>" +
                        "<td> <span onclick='alert(1)'  class='glyphicon glyphicon-pencil small'></span></td>" +
                        "<td><span class='glyphicon glyphicon-remove small'></span></td>" +
                        "<td>" +
                        "<input type='checkbox'>" +
                        "</td>" +
                        "<td><input type='text' style='width: 60' disabled></td>" +
                        "<td>caja/24</td>" +
                        "<td>002000000000001</td>" +
                        "<td>Escobas y guantes</td>" +
                        "<td>27/08/2009</td>" +
                        "<td>utiles de aseo</td>" +
                        "</tr>");
            }

            function remover()
            {
                $("#fila2").remove();
            }
        </script>

    </body>
