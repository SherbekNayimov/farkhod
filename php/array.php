<?php
//classwork1
/*
  $cars = [
    'car' => [
     'make' => 'BMW',
     'model' => 'm5',
     'engine '=> 'v6',
        ]
      ];

echo "<hr>";
$resolt = array_column($cars,  'model');

print_r($resolt);

//classwork2 'array_pop' bu ohirgi suzni chiqarib tashlaydi.
$student = ['Sardor','Mumin','Arslon','Sabrina','Madina'];
echo "<hr>";
$resolt = array_pop($student);
print_r($student);


//classwork3 'array_shift' bu boshidagi suzni chiqarib tashlaydi.
$student = ['Sardor','Mumin','Arslon','Sabrina','Madina'];
echo "<pre>";
$resolt = array_shift($student);
print_r($student);


//classwork4 'array_unshift' bu siz suz qushasiz faqat boshiga
$student = ['Sardor','Mumin','Arslon','Sabrina','Madina'];
echo "<pre>";
$resolt = array_unshift($student, 'sherbek');
print_r($student);


//classwork5 'array_push' bu siz suz oxiriga qushasiz
$student = ['Sardor','Mumin','Arslon','Sabrina','Madina'];
echo "<pre>";
$resolt = array_push($student, 'sherbek');
print_r($student);

//classwork6 'array_chunk' bu suzlarni bo'ladi
$student = ['Sardor','Mumin','Arslon','Sabrina','Madina'];
echo "<pre>";
$resolt = array_chunk($student, 2);
print_r($student);

//classwork7 'array_merge' bu suzlarni birlashtiradi tusiqlarsiz birlashterish
echo "pre";
$student1 = ['Sardor','Mumin','Arslon','Sabrina','Madina'];
$student2 = ['Jon','Sherbek','Nazokat','Guzal','Nasiba','Doston','Oybek'];
$xamma = array_merge($student1, $student2);
krsort($xamma); //(krsort) chapdan uqiydi agar (sort) ungdan uqiydi.
print_r($xamma);

//classwork8 'array_replace' bu masalan $abc hariflar 22 ta bulsa number esa 12 bulsa 12 qolgani harif buladi;
$abc = range('A', 'W');
$number = range(8,29);

$men = array_replace($number, $abc);

echo "<pre>";

print_r($men);

//classwork9 'array_diff' bu ikki guruhni bir biriga solishtiradi
echo "<hr>";
$student1 = ['Jon','Sherbek','Nazokat','Guzal','Nasiba','Sabrina'];
$student2 = ['Jon','Sherbek','Nazokat','Guzal','Nasiba','Doston','Oybek'];
$bizlar = array_diff($student2, $student1);
print_r($bizlar);

suzni teskari qilib beradi
array_reverse()

//classwork10 'array_values' bu values yani hohlagan suz qushish mumkun

$array = array("XL","gold", "men");
$men = (array_values($array));
print_r($men);


//classwork11 'array_change_key_case' Massivni kichik harfli yoki katta harflardagi barcha tugmachalari bilan qaytaradi. Raqamlangan indekslar xuddi shunday qoldiriladi.

$input_array = ["Uzbek" => 1, "World" => 4, "US" => 10];

$men = (array_change_key_case($input_array, CASE_UPPER));
print_r($men);

//classwork12 'array_column'  qiymatlarni column_key tomonidan aniqlangan bitta ustun ustunidan qaytaradi. Ixtiyoriy ravishda qaytarilgan massivdagi qiymatlarni kirish qatorining index_key ustunidagi qiymatlar bilan indekslash uchun indeks_keysi taqdim etilishi mumkin.

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
echo "<pre>";
$first_names = array_column($records, 'last_name');
print_r($first_names);


//classwork14  'array_combine' Tugmachalar qatoridagi qiymatlarni kalit sifatida va qiymatlar qatoridagi qiymatlarni mos qiymat sifatida ishlatib, massiv yaratadi.

$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

echo "<pre>";
print_r($c);

//classwork15 array_count_values () qatorni qiymatlarini kalit sifatida va ularning chastotasini qiymat sifatida ishlatadi.

$array = array(1, "hello", 1, "world",
    "hello", 1, "world",  "sherbek", 1);
echo "<pre>";
print_r(array_count_values($array));

//classwork16 array_diff_assoc Array1 dan boshqa biron bir qatorda mavjud bo'lmagan barcha qiymatlarni o'z ichiga olgan qatorni qaytaradi.

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
print_r($result);

//classwork16  array_diff_key    Qatorlari boshqa barcha qatorlarda mavjud bo'lmagan array1 dan barcha yozuvlarni o'z ichiga olgan qatorni qaytaradi.


$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);

var_dump(array_diff_key($array1, $array2));

//classwork17 array_diff_uassoc — Computes the difference of arrays with additional index check which is performed by a user supplied callback function
function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1:-1;
}


$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_uassoc($array1, $array2, "key_compare_func");
print_r($result);


//classwork18 array_diff_ukey - taqqoslash uchun tugmachalarda qayta qo'ng'iroq funksiyasi yordamida massivlar farqini hisoblab chiqadi

//classwork19 array_fill_keys — Fill an array with values, specifying keys.

$keys = array('foo', 5, 10, 15, 'bar', 20, 100, 'sher');
$a = array_fill_keys($keys, 'banana');
print_r($a);

//classwork20 array_fill - qatorlarni qiymatlar bilan to'ldiring

$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
print_r($a);
print_r($b);

//classwork21  array_filter - qayta qo'ng'iroq qilish funktsiyasi yordamida massiv elementlarini filtrlaydi.

$entry = [
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => '',
    5 => '2',
    6 => 3,
    7 => 1
];

print_r(array_filter($entry));

//classwork22 array_flip - massivdagi barcha kalitlarni tegishli qiymatlari bilan almashtiradi

$input = array("oranges", "apples", "world", "sherbek");
$flipped = array_flip($input);

print_r($flipped);

//classwork23 array_intersect_assoc - qo'shimcha indeks tekshiruvi bilan massivlarning kesishishini hisoblab chiqadi

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red", "d" => "sherbek", "world");
$array2 = array("a" => "green", "b" => "yellow", "c" => "blue", "red");
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);

//classwork24 array_intersect_key - taqqoslash uchun tugmalar yordamida massivlarning kesishishini hisoblab chiqadi

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'sherbek' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'sherbek'   => 8);

var_dump(array_intersect_key($array1, $array2));

//classwork25 array_intersect_uassoc - massivlarning kesishishini qo'shimcha indeks tekshiruvi bilan hisoblab chiqadi, indekslarni qayta chaqirish funktsiyasi bilan taqqoslaydi.

//classwork26 array_intersect_ukey - taqqoslash uchun tugmachalarda qayta qo'ng'iroq funksiyasi yordamida massivlarning kesishishini hisoblab chiqadi.

//classwork27  array_intersect - massivlarning kesishishini hisoblab chiqadi.

$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);

//classwork28 array_key_exists - berilgan kalit yoki indeksning massivda mavjudligini tekshiradi;

//classwork29 array_key_first - qatorning birinchi kalitini oladi

//classwork30 array_key_last - qatorning oxirgi tugmachasini oladi.

//classwork31 array_keys - barcha tugmachalarni yoki qator tugmalarining bir qismini qaytaring;


$array = array(0 => 100, "sherbek" => "name");
print_r(array_keys($array));

//classwork32 array_map - Qayta qo'ng'iroqni berilgan massivlar elementlariga qo'llaydi

function sher($n)
{
    return ($n + $n - $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('sher', $a);
print_r($b);

//classwork33 array_merge_recursive - bir yoki bir nechta massivni rekursiv ravishda birlashtirish.

$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive($ar1, $ar2);
print_r($result);

//classwork34 array_merge - Bir yoki bir nechta massivlarni birlashtirish

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

//classwork35 array_multisort - Ko'p yoki ko'p o'lchovli massivlarni saralash.

$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);

var_dump($ar1);
var_dump($ar2);

//classwork36 array_rand - qatordan bir yoki bir nechta tasodifiy tugmachalarni tanlaydi/\.

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

//classwork37 array_reduce - Qayta qo'ng'iroq qilish funktsiyasi yordamida massivni takroriy ravishda bitta qiymatga kamaytiring.

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "sum")); // int(15)
var_dump(array_reduce($a, "product", 10)); // int(1200), because: 10*1*2*3*4*5
var_dump(array_reduce($x, "sum", "No data to reduce"))

//classwork38 array_replace_recursive - o'tgan qatorlardan elementlarni birinchi qatorga rekursiv ravishda almashtiradi.

$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

$basket = array_replace_recursive($base, $replacements);
print_r($basket);

$basket = array_replace($base, $replacements);
print_r($basket);

//classwork39 array_reverse - teskari tartibda elementlari bo'lgan qatorni qaytaring.

$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);

//classwork40 array_search - qatorni berilgan qiymatni qidiradi va agar muvaffaqiyatli bo'lsa, birinchi mos keladigan kalitni qaytaradi.

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;

//classwork41 array_slice - massivning bir bo'lagini ajratib oladi.

$ar = array('a'=>'apple', 'b'=>'banana', '42'=>'pear', 'd'=>'orange');
print_r(array_slice($ar, 0, 3));
print_r(array_slice($ar, 0, 3, true));

//classwork42 array_splice - massivning bir qismini olib tashlang va uni boshqa narsaga almashtiring.

// append two elements to $input
array_push($input, $x, $y);
array_splice($input, count($input), 0, array($x, $y));

// remove the last element of $input
array_pop($input);
array_splice($input, -1);

// remove the first element of $input
array_shift($input);
array_splice($input, 0, 1);

// insert an element at the start of $input
array_unshift($input, $x, $y);
array_splice($input, 0, 0, array($x, $y));

// replace the value in $input at index $x
$input[$x] = $y; // for arrays where key equals offset
array_splice($input, $x, 1, $y);


//classwork43 array_sum - massivdagi qiymatlar yig'indisini hisoblang

$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";

//classwork44 array_udiff_assoc - qo'shimcha indeks tekshiruvi bilan massivlar farqini hisoblab chiqadi, ma'lumotlarni qayta chaqirish funktsiyasi bilan taqqoslaydi


//classwork45 array_unique - takroriy qiymatlarni massivdan olib tashlaydi.

$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);

//classwork46 array_walk_recursive - foydalanuvchi funktsiyasini massivning har bir a'zosiga rekursiv ravishda qo'llang.

$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

function test_print($item, $key)
{
    echo "$key holds $item\n";
}

array_walk_recursive($fruits, 'test_print');

//classwork47 array_walk - foydalanuvchi tomonidan berilgan funktsiyani massivning har bir a'zosiga qo'llang


//classwork48 array - qator yaratish

$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r($array);

//classwork49 arsort - qatorni teskari tartibda saralash va indekslar assotsiatsiyasini saqlash.

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

//classwork50 asort - qatorni saralash va indekslar assotsiatsiyasini saqlash

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

//classwork51 compact - o'zgaruvchilar va ularning qiymatlarini o'z ichiga olgan qator yarating

$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", $location_vars);
print_r($result);

//classwork52 count - massivdagi barcha elementlarni yoki ob'ektdagi narsalarni sanash.

$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));

// recursive count
echo count($food, COUNT_RECURSIVE); // output 8

// normal count
echo count($food); // output 2

//classwork53 current - qatordagi joriy elementni qaytarish.


  echo current((object) array('one', 'two')); // Outputs: one


//classwork54 end - massivning ichki ko'rsatkichini oxirgi elementiga o'rnating

$fruits = array('apple', 'banana', 'cranberry');
echo end($fruits); // cranberry


//classwork55 extract - o'zgaruvchini massivdan joriy belgilar jadvaliga import qilish

var_dump($testfile);
extract($_FILES, EXTR_SKIP);
var_dump($testfile);
var_dump($testfile['tmp_name']);

//classwork56 in_array - qiymatning massivda mavjudligini tekshiradi.

$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}

//classwork57  key - qatordan kalitni olib keling.

$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

// this cycle echoes all associative array
// key where value equals "apple"
while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array).'<br />';
    }
    next($array);
}

//classwork58 krsort - qatorni teskari tartibda kalitlarga ko'ra saralash.

$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

//classwork59 ksort - qatorni kalit bo'yicha saralash



//classwork60 natcasesort - "Tabiiy tartib" algoritmiga befarq bo'lmagan holda qatorni saralash

//classwork61 next - massivning ichki ko'rsatkichini oldinga siljiting.

$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
$mode = next($transport);    // $mode = 'bike';
$mode = next($transport);    // $mode = 'car';
$mode = prev($transport);    // $mode = 'bike';
$mode = end($transport);     // $mode = 'plane';


//classwork62 prev - Ichki qator ko'rsatkichini orqaga qaytarish.

//classwork63 range - elementlar qatorini o'z ichiga olgan massiv yarating.

foreach (range(0, 12) as $number) {
    echo $number;
}

// The step parameter
// array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100)
foreach (range(0, 100, 10) as $number) {
    echo $number;
}

// Usage of character sequences
// array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
foreach (range('a', 'i') as $letter) {
    echo $letter;
}
// array('c', 'b', 'a');
foreach (range('c', 'a') as $letter) {
    echo $letter;
}

//classwork64 reset - massivning ichki ko'rsatkichini birinchi elementiga o'rnating

$array = array('step one', 'step two', 'step three', 'step four');

// by default, the pointer is on the first element
echo current($array) . "<br />\n"; // "step one"

// skip two steps
next($array);
next($array);
echo current($array) . "<br />\n"; // "step three"

// reset pointer, start again on step one
reset($array);
echo current($array) . "<br />\n"; // "step one"


//classwork65 rsort - qatorni teskari tartibda saralash.

$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

//classwork66 shuffle - qatorni aralashtirish

$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}



////classwork67 'ucfirst or ucwords' bular suzlarni birlashtiradi
function get_word($left, $right) {

 return ucfirst($left . $right);

}

$result = get_word("seas", "onal"); // ➞ "Seasonal"

echo "<pre>";
print_r($result);




*/
