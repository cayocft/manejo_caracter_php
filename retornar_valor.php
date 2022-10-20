<?php

if(isset($_POST['submit']) && !empty($_POST['submit'])){
    $valor = $_POST['valor'];
    $cantidad = $_POST['cantidad'];

    $resultado = substr($valor,0,$cantidad);

    echo "Valores: ".$resultado;
}