<?php

echo '<title>Куликова А.О.</title>';

  echo  "Вариант №2" . '<br>';
  
    function f($u, $t)
    {
        if ($u >= 0 )
            return $u + 2 * $t;
        elseif ($u > -1 && $u < 0)
            return $u + $t;
        elseif ($u <= -1)
            return (pow($u, 2)) - (2 * $t) + 1;
    }

    $a = rand(1, 15);
    $b = rand(1, 15);

    $z = f($a, pow($b, 2) - $a) + f($a, pow($b, 2));

    echo "a = $a" . '<br>';
    echo "b = $b" . '<br>';
    echo "z = $z" . '<br>';

 echo  "Вариант №13" . '<br>';
  
    function f1($u, $t)
    {
        if ($u * $t < 1/2)
            return ((1+cos($t-$u))/($u/$t+(pow($t, 2))));
        elseif ($u * $t >= 1/2)
            return (sin(log($u/$t)));
    }

    $a = rand(1, 15);
    $b = rand(1, 15);

  
    $z = ((pow(cos(f1($a,$b)), 3))+f1($a+$b,$a-$b)) ;

    echo "a = $a" . '<br>';
    echo "b = $b" . '<br>';
    echo "z = $z" . '<br>';
?>