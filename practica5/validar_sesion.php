<?php
session_start();
if(isset($_SESSION["mi_sesion"])){
    echo "Hola,". $_SESSION["mi_sesion"] . "!";
}else{
    echo "No se pudo crear la sesion";
}
?>