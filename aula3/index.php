<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div id="content">
        <div id="form-data">
            <form method="POST" action="index.php">
                <div class="field">
                    <div class="label">
                       <label for="triangle_height">Altura do triângulo</label> 
                    </div>
                    <div class="input">
                        <input type="number" id="triangle_height" name="triangle_height" required>
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="triangle_base">Base do triângulo</label>
                    </div>
                    <div class="input">
                        <input type="number" id="triangle_base" name="triangle_base" required>
                    </div>
                </div>
                <div id="button">
                    <button type="submit" name="calculate">Calcular</button>
                </div>
            </form>

            <?php 
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if(isset($_POST['calculate'])){
                        
                        $height = $_POST['triangle_height'];
                        $base = $_POST['triangle_base'];

                        echo ($base * $height) / 2;

                        
                    }
                }
            ?>


        </div>
    </div>
</body>
</html>