<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#">
        <label for="cousin_number">Verification if a number is cousin</label>
        <input type="number" id="cousin_number" name="cousin_number" required>
        <button type="submit" name="verify_cousin_number">Verification</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD' == 'POST']){
        if(isset($_POST['verify_cousin_number'])){
            $numero = $_POST['cousin_number'];
            $ehPrimo = true;
            if($numero <= 1){
                $ehPrimo = false;
            }else{
                for($i = 2; $i <= sqrt($numero);$i++){
                    if($numero % $i == 0 ){
                        $ehPrimo = false;
                        break;
                    }
                }
            }
        }
    }

    ?>
</body>
</html>