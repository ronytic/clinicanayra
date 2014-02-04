<?php
include_once("../../login/check.php");
include_once("../../class/paciente.php");
$paciente=new paciente;

$pac=$paciente->mostrarTodoRegistro();
$titulo=array(	"Paterno"=>$idioma['Paterno'],
				"Materno"=>$idioma['Materno'],
				"Nombres"=>$idioma['Nombre'],
				"Ci"=>$idioma['Ci'],
);
listadotabla($titulo,$pac,1,"ver.php","modificar.php","eliminar.php");
?>