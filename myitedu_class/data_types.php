<?php
/*
//Data types:
1)// integer 1,2,3,4,5  Butun son turi - bu -2,147,483,648 va
2,147,483,647 o'rtasidagi o'nlik bo'lmagan son. Butun sonlar uchun qoidalar:
 butun son kamida bitta raqamdan iborat bo'lishi kerak. ...
butun son ijobiy yoki manfiy bo'lishi mumkin.

<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?>

2)//string - Qator belgilar to'plamidir. String - bu PHP tomonidan qo'llab-quvvatlanadigan
ma'lumot turlaridan biridir. Satr o'zgaruvchilarida alfavit-raqamli belgilar bo'lishi mumkin. ... Siz o'zgaruvchini e'lon qilasiz va unga simvol belgilarini tayinlaysiz.

<?php
    var_dump('You need to be logged in to view this page');
?>

3)//boolean TRUE | FALSE Boolean - bu TRUE (haqiqiy) yoki FALSE (noto'g'ri) ikkita mumkin bo'lgan qiymatdan bittasiga ega bo'lgan o'zgaruvchi. Boolean -
bu PHPda eng oddiy ma'lumotlar turi.
 U to'g'ri yoki noto'g'ri bo'ladi. Mabodo mantiqiylikni aniqlash uchun
siz haqiqiy va noto'g'ri qiymatlarni ishlatishingiz mumkin (ikkalasi ham katta-kichikligini sezgir emas).

<?php
$a = true; // assign true to $a
$b = false; // assign false to $b

var_dump($a);
var_dump($b);

4)//FLOAT -3,4565



5)//array - Massiv - bu bitta yoki bir nechta o'xshash qiymatlarni bitta qiymatda saqlaydigan
ma'lumotlarning tuzilishi. Masalan, agar siz 100 ta raqamni saqlamoqchi bo'lsangiz, unda 100 ta
o'zgaruvchini aniqlashning o'rniga 100 uzunlikdagi qatorni aniqlash oson.

<?php

// Creating an indexed array
$name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav");

// One way of Looping through an array usign foreach
echo "Looping using foreach: \n";
foreach ($name_one as $val){
	echo $val. "\n";
}

// count() function is used to count
// the number of elements in an array
$round = count($name_one);
echo "\nThe number of elements are $round \n";

// Another way to loop through the array using for
echo "Looping using for: \n";
for($n = 0; $n < $round; $n++){
	echo $name_one[$n], "\n";
}

?>


6)//object - Ob'ekt bu sinf tomonidan aniqlangan ma'lumotlar
 strukturasining individual namunasidir. Biz bir marta sinfni
aniqlaymiz va keyin unga tegishli bo'lgan ko'plab ob'ektlarni
yaratamiz. Ob'ektlar, shuningdek, holatlar deb ham nomlanadi.

class Books {
   // Members of class Books
}

// Creating three objects of Books
$physics = new Books;
$maths = new Books;
$chemistry = new Books;

7)//resource - mysql connect  Maxsus resurs turi haqiqiy ma'lumot
turi emas. Bu PHP tashqi funktsiyalari va manbalariga havolalarni
saqlash. Resurs ma'lumotlari turidan foydalanishning keng tarqalgan
namunasi ma'lumotlar bazasini chaqirishdir.


8)//NULL - NULL empty
*/