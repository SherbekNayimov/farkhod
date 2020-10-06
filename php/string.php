<?php
/*
$shu_yil = 2020;
$yoshim = 19;
$tugilgan_yilim = $shu_yil - $yoshim;
echo $tugilgan_yilim;
*/
//Boolean = true yoki false  yoki 0 = false 1 = true
//float - 2.34 6.453  pI = 3.1433333
//constant
//NULL
/*
define('COUNTRY','Uzbekistan');
echo "Uzbekiston vatanim: ". COUNTRY;
 echo "<br>";
define('COUNTRY','USA');
echo "Uzbekiston vatanim: ". COUNTRY;
*/
//NULL is not empty either, zero emas
//$cars = ['Audi','Alfa Romeo','BMW','Jiguli','Nexia'];
//String:
//strlen($comment) -- bu stringnig nechta character sonni aniqladyi
//str_word_count($text); bu stringnig nechta sozlar sonni aniqladyi
//Facebookka biz commentariya tashimiz
//str_pad($text,12, 'TOSHMATOV') bu stringni uzonligini kattalashitadi padlar toldirgan holda.
//str_pad($text,2, 'DGEFG') - ulchamdan tashqari bugan boshliqni toldirish
//strpos($text, 'computer'); //Finding the needle in the haystack
// substr($text, 0, $sobachka); stringdan belgi yoki soz kesib tashash
//strcmp($text, $text2) - compare two string: if they are equal = 0; -1 usha song 2nchi kamrok, 1 bu koprok
//str_split($text, 20); -  stringni bolish
//str_shuffle('UZBEKISTAN') - stringni aralashtirish
//str_repeat($text, 2) bu stringing shuncha martda takrorlaydi

//str_split bu suzlarni bilgilangan son bilan bulib tashlaydi
//function partition($str, $n) {
//    return  str_split($str, $n);
//}
//
//$result = partition("chew", 2);// ➞ ["ch", "ew"]
//
//echo "<pre>";
//
//print_r($result);
//str_ireplace - str_replace ning kichik-kichik versiyasi ()
//str_replace - Qidiruv satrining barcha ko'rinishini almashtirish satri bilan almashtiring
//str_rot13 - rot13 konvertatsiyasini mag'lubiyatga o'tkazing.
//str_word_count - satrda ishlatiladigan so'zlar haqida ma'lumotni qaytaring.
//$str = "Hello fri3nd, you're
//       looking          good today!";
//
//print_r(str_word_count($str, 1));
//print_r(str_word_count($str, 2));
//print_r(str_word_count($str, 1, 'àáãç3'));
//
//echo str_word_count($str);
//strcasecmp - Ikkilik xavfsiz holatga sezgir bo'lmagan satrlarni taqqoslash.
//similar_text - Ikki qator orasidagi o'xshashlikni hisoblang
//soundex - mag'lubiyatning soundex tugmachasini hisoblang.
//sprintf - Formatlangan qatorni qaytaring
//ucfirst () - satrning birinchi belgisini katta harfga o'zgartiradi.
//lcfirst () - satrning birinchi belgisini kichik harfga o'zgartiradi.
//strtoupper () - satrni katta harfga aylantiradi.
//strtolower () - satrni kichik harfga o'zgartiradi.
//ucwords () - satrning barcha bosh harifni kattaga o'zgartiradi.
//echo ucwords("hello world");
//strrev () - bu suzni chapacha uqiydi.
//echo strrev("Hello world!");
// strpos () - bu oxirgi suzlarni harifni sanaydi.
//echo strpos("Hello world! sherbek",  "sherbek");
//PHP str_replace () funktsiyasi ba'zi belgilarni satrdagi boshqa belgilar bilan almashtiradi.
//echo(min(0, 150, 30, 20, -8, -200));
//echo(max(0, 150, 30, 20, -8, -200));
//echo(abs(-6.7));
//echo(sqrt(29) . "<br>");
//echo(rand(1, 10));
//$x = 1;
//
//while($x <= 5) {
//  echo "The number is: $x <br>";
//  $x++;
//}
//for ($x = 0; $x <= 10; $x++) {
//  echo "The number is: $x <br>";
//}
//$colors = array("red", "green", "blue", "yellow");
//
//foreach ($colors as $value) {
//  echo "$value <br>";
//}
//for ($x = 0; $x < 10; $x++) {
//  if ($x == 4) {
//   break;
//  }
//  echo "The number is: $x <br>";
//}
//Count () funktsiyasi massiv elementlarini yoki ob'ekt xususiyatlarini hisoblash uchun ishlatiladi. ... Interfeysda aynan bitta usul mavjud, bu Count (count) funktsiyasi uchun qaytish qiymatini qaytaradi.
//return $arr[count($arr)-1];




echo "<pre>";
$text = "San manga qara, kimsan ozing...  itvachcha, ozinga qarab";
$result = str_replace('itvachcha','it***cha', $text);
echo "<hr>";
print_r($result);

