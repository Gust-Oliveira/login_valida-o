<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="index.css" type="text/css">
</head>
<body>
    <div class="container"> 
        <form action="valida.php" method="POST">
            <h2>Faça o seu login</h2>    
            <div class="containerInputs">
                <label for="userName">User name:</label>
                <input type="text" id="userName" name="userName">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <input type="submit" name="submit" id="submit" value="submit">
            </div>    
            <?php
                if(isset($_GET['error'])){
                    echo('<p>'.$_GET['error'].'</p>');
                }
            ?>
        </form>
    </div>
</body>
</html>