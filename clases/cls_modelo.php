<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        cls_modelo
* GENERATION DATE:  13.03.2018
* CLASS FILE:       /home/ingesof/sys.ingesof.com/generator/generated_classes/class.cls_modelo.php
* FOR MYSQL TABLE:  modelo
* FOR MYSQL DB:     ingesof_bd2
* -------------------------------------------------------
* CODE GENERATED BY:
* MY PHP-MYSQL-CLASS GENERATOR
* from: >> www.voegeli.li >> (download for free!)
* -------------------------------------------------------
*
*/

include_once("resources/class.database.php");

// **********************
// CLASS DECLARATION
// **********************

class cls_modelo
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $codigomodelo;   // KEY ATTR. WITH AUTOINCREMENT

var $modelo;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function cls_modelo()
{

$this->database = new Database();

}


// **********************
// GETTER METHODS
// **********************


function getcodigomodelo()
{
return $this->codigomodelo;
}

function getmodelo()
{
return $this->modelo;
}

// **********************
// SETTER METHODS
// **********************


function setcodigomodelo($val)
{
$this->codigomodelo =  $val;
}

function setmodelo($val)
{
$this->modelo =  $val;
}

// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM modelo WHERE codigomodelo = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = mysql_fetch_object($result);


$this->codigomodelo = $row->codigomodelo;

$this->modelo = $row->modelo;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM modelo WHERE codigomodelo = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->codigomodelo = ""; // clear key for autoincrement

$sql = "INSERT INTO modelo ( modelo ) VALUES ( '$this->modelo' )";
$result = $this->database->query($sql);
$this->codigomodelo = mysql_insert_id($this->database->link);

}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE modelo SET  modelo = '$this->modelo' WHERE codigomodelo = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>