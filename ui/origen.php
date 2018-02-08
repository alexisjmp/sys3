<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse12">Origen</a>
                    </h4>
                </div>
                <div id="collapse12" class="panel-collapse collapse">
                    <div class="panel-body">

                        <!--                        Primera linea-->
                        <div class="row form-group">
                            <label class=" col-xs-12 col-md-2 control-label">Procedencia de las Mercancias</label>
                            <div class="col-xs-10 col-md-2">
                                <div class="row form-group">
                                    <div class="col-xs-10 col-md-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
<!--                            <div class="col-xs-2 col-md-1">
                                <button type="button" class="btn btn-info btn-md center-block">
                                    <span class="glyphicon glyphicon-search"></span> 
                                </button>
                            </div>-->
                            <div class="col-xs-12 col-md-3">
                               <select  class="form-control"id="slmercancia" name="slmercancia">
                                            <option value=""></option>
                                            <option value="0">0 </option>
                                            <option value="1">1 </option>
                                        </select>
                            </div>
                        </div>
                        <!--fin priera linea-->
                        <!--                  segunda linea      -->
                        <div class="row form-group">
                            <label class=" col-xs-12 col-md-2 control-label">Pais de Origen</label>
                            <div class="col-xs-10 col-md-2">
                                <div class="row">
                                    <div class="col-xs-10 col-md-8">
                                        <input type="text" class="form-control" placeholder="0"  onkeypress='return ((event.charCode <= 96 || event.charCode >= 123) && (event.charCode <= 64 || event.charCode >= 91))'>
                                    </div>
                                </div>    
                            </div>
<!--                            <div class="col-xs-2 col-md-1">
                                <button type="button" class="btn btn-info btn-md center-block">
                                    <span class="glyphicon glyphicon-search"></span> 
                                </button>
                            </div>-->
                            <div class="col-xs-12 col-md-3">
                                <select  class="form-control"id="slorigen" name="slorigen">
                                            <option value=""></option>
                                            <option value="0">0 </option>
                                            <option value="1">1 </option>
                                        </select>
                            </div>
                        </div>
                        <!--fin segunda linea-->
                        <!--tercera linea-->
                        <div class="row form-group">
                            <label class=" col-xs-12 col-md-2 control-label">Pais de Procedencia</label>
                            <div class="col-xs-10 col-md-2">
                                <div class="row">
                                    <div class="col-xs-10 col-md-8">
                                        <input type="text" class="form-control" placeholder="0"  onkeypress='return ((event.charCode <= 96 || event.charCode >= 123) && (event.charCode <= 64 || event.charCode >= 91))'>
                                    </div>
                                </div> 
                            </div>
<!--                            <div class="col-xs-2 col-md-1">
                                <button type="button" class="btn btn-info btn-md center-block">
                                    <span class="glyphicon glyphicon-search"></span> 
                                </button>
                            </div>-->
                            <div class="col-xs-12 col-md-3">
                                    <select  class="form-control"id="slprocedencia" name="slprocedencia">
                                            <option value=""></option>
                                            <option value="0">0 </option>
                                            <option value="1">1 </option>
                                    </select>
                            </div>
                        </div>
                        <!--                    fin tercera linea-->
                        <!--                    cuarta linea-->
                        <div class="row form-group">
                            <label class=" col-xs-12 col-md-2 control-label">Via de Transporte</label>
                            <div class="col-xs-10 col-md-2">
                                <div class="row">
                                    <div class="col-xs-10 col-md-8">
                                        <input type="text" class="form-control" placeholder="0"  onkeypress='return ((event.charCode <= 96 || event.charCode >= 123) && (event.charCode <= 64 || event.charCode >= 91))'>
                                    </div>
                                </div> 
                            </div>
<!--                            <div class="col-xs-2 col-md-1">
                                <button type="button" class="btn btn-info btn-md center-block">
                                    <span class="glyphicon glyphicon-search"></span> 
                                </button>
                            </div>-->
                            <div class="col-xs-12 col-md-3">
                                <select  class="form-control"id="sltransporte" name="sltransporte">
                                            <option value=""></option>
                                            <option value="0">0 </option>
                                            <option value="1">1 </option>
                                        </select>
                            </div>
                        </div>
                        <!--fin cuarta linea-->
                        <!--                        inicio quinta linea-->
                        <div class="row form-group">
                            <label class=" col-xs-12 col-md-2 control-label">Moneda</label>
                            <div class="col-xs-10 col-md-2">
                                <div class="row">
                                    <div class="col-xs-10 col-md-8">
                                        <input type="text" class="form-control" placeholder="0"  onkeypress='return ((event.charCode <= 96 || event.charCode >= 123) && (event.charCode <= 64 || event.charCode >= 91))'>
                                    </div>
                                </div>                             </div>
<!--                            <div class="col-xs-2 col-md-1">
                                <button type="button" class="btn btn-info btn-md center-block">
                                    <span class="glyphicon glyphicon-search"></span> 
                                </button>
                            </div>-->
                            <div class="col-xs-12 col-md-3">
                                <select  class="form-control"id="slmoneda" name="slmoneda">
                                            <option value=""></option>
                                            <option value="0">0 </option>
                                            <option value="1">1 </option>
                                        </select>
                            </div>
                        </div>
                        <!--                        fin quinta linea-->
                        <!--                        inicio sexta linea-->
                        <div class="row form-group">
                            <label class=" col-xs-12 col-md-2 control-label">Proveedor</label>
                            <div class="col-xs-10 col-md-2">
                                <input type="text" class="form-control">
                            </div>
<!--                            <div class="col-xs-2 col-md-1">
                                <button type="button" class="btn btn-info btn-md center-block">
                                    <span class="glyphicon glyphicon-search"></span> 
                                </button>
                            </div>-->
                            <div class="col-xs-12 col-md-3">
                                <select  class="form-control"id="slproveedor" name="slproveedor">
                                            <option value=""></option>
                                            <option value="0">0 </option>
                                            <option value="1">1 </option>
                                        </select>
                            </div>
                        </div>
                        <!--                        fin sexta linea-->
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
        </div>

