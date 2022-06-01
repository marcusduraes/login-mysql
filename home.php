<?php
// Verifica se existe SESSION
include('protect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    Bem vindo, <?php echo $_SESSION['id']; ?>.
    <p>
        <a href="?logout">Sair</a>
    </p>
</body>
</html>