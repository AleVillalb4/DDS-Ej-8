<?php


//Mostrar la tabla de multiplicar del 3, utilizando un do -  while (Hasta el numero 20).
//Se debe mostrar al similar a lo siguiente.
//3 * 1 = 3
//3 * 2 = 6
//3 * 3 = 9

$numero = 1;
$resu = 3;
do {
    echo '3 * ' . $numero . ' = ' . $resu;
    $numero++;
    $resu = 3 * $numero;
    echo '<hr>';
} while ($resu <= 60);
