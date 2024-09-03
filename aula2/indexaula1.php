<?php

$mensagem = 'Olá, mundo!';
echo $mensagem;
echo '<h2> Script em PHP </h2>';
$primeiro_nome = 'Cauã';
$idade = 18;
$masculino = 'true';
$feminino = 'false';
$resultado = $idade + 18 * 7;
echo $resultado;
echo '<br/>';
$num = 37.4;
echo 'float: ',$num, '</br>';
$num2 = (int) $num;
echo 'int: ',$num2;

echo ' <h2>Inteiro: ', $num, '</h2>';
$nota = 8;
if ($nota >= 7) {
    echo '<p> Você passou, sua nota foi :',$nota,'</p>';
}else {
    echo '<p> Você não passou</p>';
}

?>