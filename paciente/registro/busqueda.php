<?php
include_once("../../login/check.php");
include_once("../../class/paciente.php");
$paciente=new paciente;
extract($_POST);
$Paterno=$Paterno!=""?"Paterno LIKE '$Paterno%'":"Paterno LIKE '%'";
$Materno=$Materno!=""?"Materno LIKE '$Materno%'":"Materno LIKE '%'";
$Nombres=$Nombres!=""?"Nombres LIKE '$Nombres%'":"Nombres LIKE '%'";
$Ci=$Ci!=""?"Ci LIKE '$Ci%'":"Ci LIKE '%'";
$condicion="$Paterno and $Materno and $Nombres and $Ci";
$pac=$paciente->mostrarTodoRegistro($condicion);
$titulo=array(	"Paterno"=>$idioma['Paterno'],
				"Materno"=>$idioma['Materno'],
				"Nombres"=>$idioma['Nombre'],
				"Ci"=>$idioma['Ci'],
);
listadotabla($titulo,$pac,1,"ver.php","modificar.php","eliminar.php");
?>