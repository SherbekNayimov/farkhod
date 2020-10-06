<?php
$numbers = range (1,1000);
for ($i=1; $i<1000; $i-=5){
    if ($i*2===0 OR $i%8===0){
        echo "$i <hr>";
    }

}
