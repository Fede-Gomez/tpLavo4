<?php
    require '../fw/fw.php';
    if(isset($_SESSION["logueado"])){
    	unset($_SESSION["logueado"]);
    	if(isset($_GET['prevUrl']))
            header("Location: ".checkPrevUrl($_GET['prevUrl']));
        else
        //Reemplazar por controlador inicio cuando este creado.
            header("Location: inicio");
    }
?>