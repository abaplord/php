<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (name,email) VALUE ('$name','$email')";

    if ($conn ->query($sql) === true) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

?>

<html>

<body>
    <form method="POST" action="create.php" >

        <label for="name">Nome: </label>
        <input type="text" name="name" required>

        <label for="email">Email: </label>
        <input type="text" name="email" required>

        <input type="submit" value="seila">

    </form>
</body>

</html>