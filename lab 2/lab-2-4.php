 <?php
echo '<title>Куликова А.О.</title>';
echo '<p>Вариант №2</p>';
    $A = array();
    $B = array();
    $N = rand(1, 20);

    for ($i = 0; $i < $N; $i++) {
        $B[] = rand(-20,20);
    }
    echo "</br> Исходный массив:  </br>";
    foreach($B as $value) {
    echo "$value ";
    }
    
    sort($B);
    for ($i = 0; $i < count($B); $i++) {  
        if ($B[$i] < 0 )
        {$A[] = $B[$i];} 
        elseif  ($B[$i] == 0 )
        {$A[] = $B[$i];}
         elseif  ($B[$i] > 0 )
        {$A[] = $B[$i];}
        
    }
     echo "</br> Массив с перегруппированными элементами (отрицательные; нулевые; положительные): </br>";
    foreach($A as $value) {
       
    echo "$value ";
    }
    
    echo '<p>Вариант №13</p>';
     $A = array();
    $B = array();
    $N = rand(1, 20);

    for ($i = 0; $i < $N; $i++) {
        $B[] = rand(-20,20);
    }
    echo "</br> Исходный массив:  </br>";
    foreach($B as $value) {
    echo "$value ";
    }
    sort($B);
     for ($i = 0; $i < count($B); $i++) {
                if ($B[$i] % 2 != 0 && $B[$i] < 0)
                    $Sum += $B[$i];}
    echo "</br> Сумма элементов =  $Sum";

?>