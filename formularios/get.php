<?php
if (isset($_GET["NOMBRE"])) {
    # code...
    echo "hola, ". $_GET["NOMBRE"]; 
}else{
    echo "No se resibio ningun nombre";
}
?>