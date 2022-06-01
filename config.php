<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name = 'user';
    $port = 3306;
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name, $port);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

?>