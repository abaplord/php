<?php
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "sistema_pedidos";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
     die("Conexão falhou: " . $conn->connect_error);
 }

$sql = "SELECT * FROM pedidos";

$result = $conn -> query($sql);

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['register'])){

        $nome_cliente = $_POST['nome_cliente'];
        $nome_produto = $_POST['nome_produto'];
        $quantidade = $_POST['quantidade'];
        $data_pedido = $_POST['data_pedido'];

        $sql = "INSERT INTO pedidos (id,nome_cliente,nome_produto,quantidade,data_pedido) VALUE (null,'$nome_cliente','$nome_produto', '$quantidade', '$data_pedido')";

        if ($conn ->query($sql) === false) {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }else{
            header ("Location: index.php");
        }

        
    }elseif(isset($_POST['update'])){
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $id = $_POST['id'];
            $nome_cliente = $_POST['nome_cliente'];
            $nome_produto = $_POST['nome_produto'];
            $quantidade = $_POST['quantidade'];
            $data_pedido = $_POST['data_pedido'];

            $sql = "UPDATE pedidos SET nome_cliente='$nome_cliente', nome_produto='$nome_produto', quantidade='$quantidade', data_pedido='$data_pedido' WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                echo "Registro atualizado com sucesso";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        }else{
            echo "Para actualizar, informe o ID";
        }
        

    }
}elseif($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['delete'])){
        $id = $_GET['id'];
            
        $sql = "delete from pedidos WHERE id = '$id'";
            
        if ($conn -> query($sql) === false) {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }else{
            header ("Location: index.php");
        }
    }
    
}        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    <div id="form-data">
        
        <form method="POST" action="index.php">
            <h1>CRUD</h1>
            <div class="field">
                <div class="label">
                    <label for="id">ID</label> 
                </div>
                <div class="input">
                    <input type="string" id="id" name="id" >
                </div>
            </div>

            <div class="field">
                <div class="label">
                    <label for="nome_cliente">Nome cliente</label> 
                </div>
                <div class="input">
                    <input type="string" id="nome_cliente" name="nome_cliente" required>
                </div>
            </div>

            <div class="field">
                <div class="label">
                    <label for="nome_produto">Nome produto</label> 
                </div>
                <div class="input">
                    <input type="string" id="nome_produto" name="nome_produto" required>
                </div>
            </div>

            <div class="field">
                <div class="label">
                    <label for="quantidade">Quantidade</label> 
                </div>
                <div class="input">
                    <input type="string" id="quantidade" name="quantidade" required>
                </div>
            </div>

            <div class="field">
                <div class="label">
                    <label for="data_pedido">Data pedido</label> 
                </div>
                <div class="input">
                    <input type="string" id="data_pedido" name="data_pedido" required>
                </div>
            </div>


            <div id="button">
                <button type="submit" name="register">Enviar</button>
            </div>
            <div id="button">
                <button type="submit" name="update">actualizar</button>
            </div>
        </form>
    </div>
    <section id="table">
    <?php
        if ($result -> num_rows > 0){
            echo "<table border='1'>
                <tr>
                    <th> ID </th>
                    <th> Nome Cliente </th>
                    <th> Nome Produto </th>
                    <th> Quantidade </th>
                    <th> Data do pedido </th>
                </tr>";
                while($row = $result -> fetch_assoc()){
                    echo "<tr>
                            <td> {$row['id']} </td>
                            <td> {$row['nome_cliente']} </td>
                            <td> {$row['nome_produto']} </td>
                            <td> {$row['quantidade']} </td>
                            <td> {$row['data_pedido']} </td>
        
                            <td>
                                <a href='index.php?id={$row['id']}&delete=1'>Excluir</a>
                            </td>
                        </tr>";
                }
            echo "</table>";
        }else{
            echo "Nenhum registro encontrado.";
        }
        $conn -> close();
    ?>
    
    </section>
    
</body>
</html>