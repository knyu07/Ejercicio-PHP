<?php
#la función rand da números aleatorios
$MONEDA = rand(0, 1);

#El == sirve para comparar
if ($MONEDA == 0) {
    echo "<img src='images/cara.png'>";
} else {
    echo "<img src='images/cruz.png'>";
}
?>
