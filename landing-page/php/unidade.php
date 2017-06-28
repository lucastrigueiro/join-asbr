<?php
$regiao = $_REQUEST["regiao"];

$myArr = [];



switch ($regiao){
    case "Sul":
      	$myArr = array("Porto Alegre", "Curitiba");
      	break;
    case "Sudeste":
      	$myArr = array("São Paulo", "Rio de Janeiro", "Belo Horizonte");
      	break;
    case "Centro-Oeste":
      	$myArr = array("Brasília");
    	break;
    case "Nordeste":
	    $myArr = array("Salvador", "Recife");
	    break;
    case "Norte":
    	$myArr = array("Não possui disponibilidade");
    	break;
}


$myJSON = json_encode($myArr);

echo $myJSON;
?>