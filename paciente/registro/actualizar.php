<?php
include_once("../../login/check.php");
include_once("../../class/paciente.php");
$paciente=new paciente;
extract($_POST);
$Valores=array("Paterno"=>"'$Paterno'",
				"Materno"=>"'$Materno'",
				"Nombres"=>"'$Nombres'",
				"Ci"=>"'$Ci'",
				"Telefono"=>"'$Telefono'",
				"Celular"=>"'$Celular'",
				"FechaNac"=>"'".fecha2Str($FechaNac,0)."'",
				"Observaciones"=>"'$Observaciones'",
);
$paciente->actualizarRegistro($Valores,"CodPaciente=".$Cod);

$Mensajes[]=$idioma["GuardadoCorrectamente"];
$folder="../../";
include_once("../../resultado.php");
?>