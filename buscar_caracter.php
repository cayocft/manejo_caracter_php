<?php

if(isset($_POST['submit']) && !empty($_POST['submit'])){
    $cs1 = $_POST['cs1'];
    $cs2 = $_POST['cs2'];
    $c_b = $_POST['c_b'];

    $resultado_cs1 = strpos($cs1, $c_b);
    $resultado_cs2 = strpos($cs2, $c_b);

    if($resultado_cs1 != false || $resultado_cs2 != false){
        echo "Existe";
    }else{
        echo "NO EXISTE";
    }

    echo "Valor resultado cs1: ".$resultado_cs1;
    echo "<br>Valor resultado cs1: ".$resultado_cs2;
}