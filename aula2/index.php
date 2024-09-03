<?php
    #quest 2

    $raio = 5;
    $pi = 3.1415;

    if(($raio * $pi ** 2) > 50 ){
        echo 'Maior que o limite';
    }else{
        echo 'Menor que o limite';
    }

    echo '<br>';

    #quest 3
   

    $celso = 88;
    
    $farenheit = ($celso * 9 / 5) + 32;
    
    echo '<br>Em farenheit: ', $farenheit;

    $celso = ($farenheit - 32) * 5 / 9;

    echo '<br>Em celsos novamente: ', $celso;

    echo '<br>';

    $num = '67';

    $rest_of_div = fmod($num, 2);

    if($rest_of_div == 0){
        echo '<br> O número é par';

    }else{
        echo '<br> O número é impar: ' . $num;
    }

    echo '<br>';

    $ano = 2004;

    echo '<br> Se nasceu em ' . $ano . ', a idade é: ', date("Y") - $ano;

    

    $minutes = 800;

    $remains = $minutes % 60;

    $hours = ( $minutes - $remains  ) / 60 ;

    echo '<br>';

    echo '<br> 800 minutos são: ' . strval($hours) . 'h, ' . strval($remains) . 'm';
    
    echo '<br>';

    for ($i = 1; $i <= 10; $i++) { 
        echo ('<br/>' . $num . ' x ' . $i . ' = ' . $num * $i); 
    } 

    
    $num = 64;
    $fat = $num;

    for ($i = $fat - 1; $i >= 1; $i--){

        $fat = $fat * $i;


    }

    echo '<br>';

    echo '<br>' . $fat . ' = ' . $num . '!';

?>