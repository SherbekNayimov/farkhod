<?php


function weather($weather=70){
    if ($weather>=70){
        return "Judda issiq";
    }elseif ($weather<70 and $weather>50){
        return "Havo narmanli";
    }elseif ($weather<=50){
        return "Havo sal sovuq";
    }
}

echo weather(69);