<?php
    session_start();

    if(isset($_SESSION['user_name']) && isset($_SESSION['id'])){
        echo (
            '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Tela de login</title>
                <link rel="stylesheet" href="home.css" type="text/css">
            </head>
            <body> 
                <div class="containerHome">
                <h2>'.$_SESSION['name'].'</h2>
                <a href="sair.php">Sair</a>
                </div>
                
            </body>
            </html>'
        );























    }else{
        header('location:index.php?error=erro');
    }
    

?>