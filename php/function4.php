<?php
$name = "My name is sherbek";
function myname(){
    global $name;
    $name = 'My name is Nozim';
}
echo "<hr>";
myname();
echo $name;

/*
 function myFunction($a, $b, $c){
    return func_num_args();
}

echo myFunction('sherbek', 'Sardor', 'Sherxon');
*/

