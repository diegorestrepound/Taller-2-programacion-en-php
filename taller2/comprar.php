<?php
    if(isset($_POST["btncomprar"])){
        require_once "Cine.php";
        $cine = new Cine();
        $edad = $_POST["txtedad"];
        $cine->setEdadcomprador($edad);
        $cine->getEdadcomprador();
        $cine->precio();
    }
?>