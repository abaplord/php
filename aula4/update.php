<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $new_name = $_POST['new_name'];
    $new_email = $_POST['new_email'];

    $sql = "UPDATE user SET 
    name = '$new_name',
    email = '$new_email'
    WHERE name = '$name'";

    if ($conn ->query($sql) === true) {
        echo "Registro atualizado";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

?>

<html>

<body>
    <form method="POST" action="update.php" >

        <label for="name">Nome: </label>
        <input type="text" name="name" required>
        
        <label for="new_name">Novo nome: </label>
        <input type="text" name="new_name" required>

        <label for="new_email">Novo email: </label>
        <input type="text" name="new_email" required>

        <input type="submit" value="seila">

    </form>
</body>

</html>