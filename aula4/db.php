<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "crud_caua_goncalves";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Conecção falhou" . $conn->connect_error);
    }
?>