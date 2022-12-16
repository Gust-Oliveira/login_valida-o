<?php
    session_start();

    include "conexao.php";

    if(isset($_POST['userName']) && isset($_POST['password'])){
        function formatacaoTexto($dado){
            $dado = trim($dado);
            $dado = stripcslashes($dado);
            $dado = htmlspecialchars($dado);

            return $dado;
        }

        $use = formatacaoTexto($_POST['userName']);
        $pass = formatacaoTexto($_POST['password']);

        if(empty($_POST['userName'])){
            header('location:index.php?error=Nome de usuário é obrigatório');
            exit();
        }else if(empty($_POST['password'])){
            header('location:index.php?error=Senha de usuário é obrigatório');
            exit();
        }else{
            $sql = "SELECT * FROM usertable WHERE user_name='$use' AND password='$pass'";
            $resultado = mysqli_query($conx, $sql);

            if(mysqli_num_rows($resultado) === 1){
                $row = mysqli_fetch_assoc($resultado);
                if($row['user_name'] === $use && $row['password'] === $pass){
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];

                    header('location:home.php');
                    exit();
                }else{
                    header('location:index.php?error=Nome de usuário ou senhas estão errados');
                    exit();
                }
            }else{
                header('location:index.php?error=Nome de usuário ou senhas estão errados');
                exit();
            }


        }



    }else{
        header('location:index.php?error=erro');
        exit();
    }






?>