<?php
    include 'db.php';

    $id = $_GET['id'];

    $sql = "delete from user WHERE id = '$id'";

    if ($conn->query($sql) === true) {
        echo "Registro escluído";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
  
?>