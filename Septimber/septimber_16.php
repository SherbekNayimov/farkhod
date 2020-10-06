<?php





setrawcookie('city', "Queens", time()+10);
?>
<nav>
    <a href="sept_16.php">Sherbek</a>
</nav>










<?php

//explode covert string to array.
//implode convert array to string bu joy qooldirish yoki . , olib tashlash
//include  and require boshqa file qushish mumkun yani 2 ta fileni bitaga aylantirish.
//require  and require boshqa file qushish mumkun yani 2 ta fileni bitaga aylantirish.
//__construct bu construct ga yozilgan suzlarnni hardoyim qanday holatta va qayirda turishidan qati nazar birinchi uqiydi yani birinchi chiqadi.
//__destruct bu destruct hardoyim oxirida chiqadi yani qayerda turishidan qati nazar oxirida uqiydi yani oxirida chiqadi.
//public function barcha class lar ishlata oladi
//private function faqat shu class da ishlaydi
//protected function
//session
//

/*
 session_start();
$_SESSION['name'] = 'Sherbek Nayimov - '.  str_shuffle('Madina');
?>
<nav>
    <a href="sept_16.php">Sherbek</a>
</nav>

 */


/*
 class Uzbek{
    public function  __construct()
    {
        echo "<hr>Salom min uzbekman<hr>";
    }
    public function toy_narsalari(){
        echo "<hr> Sizchi qayerdasiz<hr>";
    }

    public function __destruct()
    {
        echo "<hr>Tnshiganimdan hursandman<hr>";
    }

}

$uzbek = new Uzbek();
echo "<pre>";
$uzbek->toy_narsalari();

 */

/*
 class Uzbek{
    public function  __construct()
    {
        echo "<hr>My name is construct<hr>";
    }

    public function __destruct()
    {
        echo "<hr>My name is destruct<hr>";
    }

}

$uzbek = new Uzbek();
echo "<pre>";
var_dump($uzbek);


 */

/*
  $country = "Uzbekistan";
echo  "<hr>Welcome to my self<hr>";

include "sept_16.php";

echo "Hello guys";

 */


/*
 $text = ['Sherbek','Jon','Madina'];

$resolt = implode('  ', $text);
echo "<pre>";
print_r($resolt);


 */
/*
 $text = "Sherbek,Madina,Gorge,Jon,Zarina";

$resolt = explode(',', $text);
echo "<pre>";
print_r($resolt);

 */

/*


function think(&$a){
    $a++;
}
 think($a);
echo "$a";

 */
/*
echo "<pre>";

function doSomthing(){
        print_r(func_get_args());
    }
doSomthing(1,2,3,4, null, 7.65,true, 2.34, false, 3.45);
*/
?>