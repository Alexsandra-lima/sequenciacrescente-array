<?php
$array = array ();
$array [] = 9;
$array []= 5;
$array []= 2;
$array [] = 8;
$array []= 1;
$array []= 6;
$array [] = 3;
$array []= 7;
$array []= 4;

sort($array);
print_r($array);

var_dump((bool) 1);
echo '</br>';
$array = array ();
$array [] = 9;
$array []= 5;
$array []= 2;
$array [] = 8;

sort($array);
print_r($array);

var_dump((bool) 1);
echo '</br>';
$array = array ();
$array [] = 1;
$array []= 2;
$array []= 3;
$array [] = 4;

sort($array);
print_r($array);

var_dump((bool) 0);

?>