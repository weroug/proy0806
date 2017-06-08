<?php

include '../librerias.php';



$Usu=new Usuario($_REQUEST["nomusuario"],$_REQUEST["clave"]);

if ($Usu->VerificaLocal()) 
    echo "todo BIEN";
else
    echo "todo mal";
