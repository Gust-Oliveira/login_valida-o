<?php
    $sname = 'localhost';
    $uname = 'root';
    $password = "";
    $bname = "teste5";

    $conx = mysqli_connect($sname, $uname, $password, $bname);

    if(!$conx){
        echo "Falha na conexão";
    }
?>