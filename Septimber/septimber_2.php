<?php
$numbers = range (1,1000);

foreach ($numbers as $number){
    $bulinadi = ($number - 5) * 2;//-5 ayiriladi va chiqan sondan 2 ga kupaytirish.
    if($bulinadi%8==0) {
        echo "Bulinadigan son 8 : " .  $bulinadi;//8 ga bulish.
    }

    echo "<hr>";
    echo "<br>";
}