<?php
    if(isset($_POST["btndado"])){
        require_once "Dados.php";
        $dados = new Dados();
        $dados->mostrar();
        $dados->tirar();
    }
?>