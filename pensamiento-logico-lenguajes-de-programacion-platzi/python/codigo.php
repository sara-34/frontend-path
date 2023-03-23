<?php 
function recomendacion(){
  $clima = array("Bogota" => "Frio", "Pereira" => "Calido", "Cali" => "Soleado");


$ubicacion = array("Guajira" => "Norte", "Leticia" => "Sur", "Santander" => "Este", "Antioquia" => "Oeste");

$turismo = array("Santa Marta" => "Mar", "Villavicencio" => "llanos","Rioacha" => "Desierto", "Quindio" => "Valle");

  switch("clima"){
    case "clima":
     echo array_search("Frio", $clima);
    break;

    case "ubicacion":
     echo array_search("Norte", $ubicacion);
    break;


    case "turismo":
     echo array_search("Desierto", $turismo);
    break;
  }
}

recomendacion();
?> 