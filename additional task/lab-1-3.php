
<?php

echo '<title>Kulikova A.O. </title>';

const NUM_E = 2.71828;
$num_el = NUM_E;

echo 'Число e равно: ' . '<br>';

echo '$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>';

$num_el = (string) $num_el;
echo '$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
$num_el = (int) $num_el;
echo '$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
$num_el = (bool) $num_el;
echo '$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>'
?>