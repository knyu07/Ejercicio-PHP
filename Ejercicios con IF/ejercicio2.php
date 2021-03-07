<?php

$NOTA = rand(0, 10)

# COMPARAMOS
if ($NOTA >= 0 && $NOTA < 5) {
    echo "Insuficiente";
} elseif ($NOTA = 5) {
    echo "Suficiente";
} elseif ($NOTA = 6) {
    echo "Bien";
} elseif ($NOTA >= 7 && $NOTA < 9) {
    echo "Notable";
} elseif ($NOTA >= 9 && $NOTA <= 10) {
    echo "Sobresaliente";
}
?>