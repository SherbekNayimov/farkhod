<?php
/*
function sherbek($a){
    return "sherbek".''.$a;
}
echo sherbek( "sher");
*/


function cook($ingredient, $qty, $people){
    if($people>10){
        return "I am sorry";
    }
    if (!in_array("meat", $ingredient)){
        return "Sorry";
    }
    return "Food is ready";

}

$kitchen = cook(['osh','meat'],11,11);

echo "<pre>";

print_r($kitchen);





