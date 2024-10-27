<?php
session_start();

$somma = 0;

foreach ($_SESSION["pagamento"] as $indice => $variabile) {
    foreach ($variabile as $var) {
        echo "<ul><li>$indice => $var</li></ul>";
    }
}

foreach ($_SESSION["prezzi"] as $numero) {
    $somma = $somma + $numero;
}
echo "$somma";
