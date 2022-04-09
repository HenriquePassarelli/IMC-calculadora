<?php

    if(!isset($_POST["value01"]) || !isset($_POST["value02"])){
        echo json_encode(array('imc' => 0));
        return;
    }else if(!is_numeric($_POST["value01"]) || !is_numeric($_POST["value02"])) {
        echo json_encode(array('imc' => 0));
        return;
    }

    if( $_POST["value02"] == '0'){
        echo json_encode(array('imc' => 0));
        return;
    }

    $weight = $_POST["value01"]; 
    $tall = $_POST["value02"]; 

    if($tall >= 100){
        $tall = $tall / 100;
    }

    $imc = round($weight / ($tall**2),2);

    $object = array('imc' => $imc);

    echo json_encode($object);
?>