<?php
    session_start();

    include 'config.php';
    include 'header.php';
    

    if(!isset($_SESSION['id'])){
        include 'login.php';
        
        if (isset($_POST['submit'])){
            // Enviar

            $usuario = $conn->real_escape_string($_POST['username']);
            $senha = $conn->real_escape_string($_POST['password']);

            $sql_code = "SELECT * FROM clientes WHERE usuario = '$usuario' AND senha = '$senha'";
            $sql_query = $conn->query($sql_code) or die('Falha na execução do código SQL' . $conn->error);
            $count = $sql_query->num_rows;


            if ($count == 1){
                $user = $sql_query->fetch_assoc();
                $_SESSION['id'] = $user['usuario'];
                header('Location: index.php');
            }else{
                echo  '<script>alert("Senha ou usuário Incorreto, digite novamente")</script>';
            }
    
        }
    }else{
        include 'home.php';
        if(isset($_GET['logout'])){
            unset($_SESSION['id']);
            session_destroy();
            header('Location: index.php');
        }
    }
?>