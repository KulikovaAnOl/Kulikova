

<?php
$n=rand(1,500);
echo "<br> N= ".$n."<br>";
{
for ($x = 1; $x <= floor(sqrt($n)); $x++) {
$y = sqrt($n - $x ** 2);
if (fmod($y, 1) == 0) echo "These are numbers  $x and $y";echo'<br>';
}}
?>