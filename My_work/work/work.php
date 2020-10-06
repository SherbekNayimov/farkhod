
<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>



<?php


/*
 $_SERVER - bu PHP global global o'zgaruvchisi, unda sarlavhalar, yo'llar va skript joylashuvi to'g'risida ma'lumotlar mavjud.
--------------------------------------------------------------------------------------------------------------------------------------------------------
$_GET - bu PHP global global o'zgaruvchidir, uni HTML formasini = "olish" usuli bilan yuborganingizdan so'ng ma'lumot to'plash uchun foydalaniladi. $ _GET URL manzilida yuborilgan ma'lumotlarni ham to'plashi mumkin.
---------------------------------------------------------------------------------------------------------------------------------------------------------
$ _POST - bu PHP global global o'zgaruvchisidir, u HTML formasini = "post" usuli bilan yuborganingizdan so'ng ma'lumot to'plash uchun ishlatiladi. $ _POST, shuningdek, o'zgaruvchini o'tkazish uchun keng qo'llaniladi. Quyidagi misol kirish maydoni va yuborish tugmachasi bo'lgan shaklni ko'rsatadi.
---------------------------------------------------------------------------------------------------------------------------------------------------------
$ _REQUEST - bu HTML shaklini yuborganingizdan so'ng ma'lumotlarni to'plash uchun ishlatiladigan PHP super global o'zgaruvchisi. Quyidagi misol kirish maydoni va yuborish tugmachasi bo'lgan shaklni ko'rsatadi. Foydalanuvchi "Yuborish" tugmachasini bosish orqali ma'lumotlarni yuborganda, shakl ma'lumotlari <css> tegining amal atributida ko'rsatilgan faylga yuboriladi.
---------------------------------------------------------------------------------------------------------------------------------------------------------
The empty () funktsiyasi o'zgaruvchining bo'sh yoki yo'qligini tekshiradi. Agar o'zgaruvchi mavjud bo'lsa va bo'sh bo'lmasa, bu funktsiya noto'g'ri qaytaradi, aks holda u true bo'ladi. Quyidagi qiymatlar bo'sh deb baholaydi: 0. 0.0.
empty ( mixed $var ) : bool
--------------------------------------------------------------------------------------------------------------------------------------------------------
Boolval () funktsiyasi - bu PHP ichida o'rnatilgan ifoda uchun Boolean qiymatini beradigan funktsiya. ... $ expr: O'zgarmoqchi bo'lgan ifoda yoki skalalar. Bu satr turi, butun son va boshqalar bo'lishi mumkin.
boolval ( mixed $var ) : bool
---------------------------------------------------------------------------------------------------------------------------------------------------------
debug_zval_dump () funktsiyasi ichki zend qiymatini chiqish uchun chiqarish uchun foydalaniladi. * Aralash: Aralash, parametr bir nechta turlarni qabul qilishi mumkinligini bildiradi
 ebug_zval_dump ( mixed $variable [, mixed $... ] ) : void
---------------------------------------------------------------------------------------------------------------------------------------------------------
var_dump () funktsiyasi bir yoki bir nechta o'zgaruvchilar haqida ma'lumotni to'kib yuboradi. Ma'lumot o'zgaruvchan (lar) ning turi va qiymatini o'z ichiga oladi.
var_dump ( mixed $expression [, mixed $... ] ) : void
---------------------------------------------------------------------------------------------------------------------------------------------------------
print_r
286/5000
Bu mantiqiy parametr emas, asl qiymati FALSE bo'lgan va print_r () funktsiyasining natijasini chop etish o'rniga o'zgaruvchida saqlash uchun foydalaniladigan qo'shimcha parametr. print_r () funktsiyasi, agar ushbu parametr TRUE ga o'rnatilgan bo'lsa, chop etish kerak bo'lgan natijani qaytaradi
print_r ( mixed $expression [, bool $return = FALSE ] ) : mixed
---------------------------------------------------------------------------------------------------------------------------------------------------------
Floatval () funktsiyasi PHP ichida o'zgaruvchining o'zgaruvchan qiymatini qaytaradigan funktsiya. ... $ var: tegishli qiymat qiymati qaytariladigan o'zgaruvchi. Ushbu o'zgaruvchi ob'ekt bo'lmasligi kerak.
floatval ( mixed $var ) : float
---------------------------------------------------------------------------------------------------------------------------------------------------------
Get_defined_vars () funktsiyasi barcha aniqlangan o'zgaruvchilar qatorini qaytarish uchun ishlatiladigan PHP-da o'rnatilgan funksiya. Ushbu funktsiya o'zgaruvchilar, atrof muhit va hokazolarning barcha ro'yxatini o'z ichiga olgan ko'p o'lchovli qatorni qaytaradi. Sintaksis: array get_defined_vars (void)
get_defined_vars ( void ) : array
---------------------------------------------------------------------------------------------------------------------------------------------------------
Integers  Butun sonlar -2,147,483,648 va 147,483,647 o'rtasidagi o'nlik bo'lmagan sonlardir. Ular kamida bitta raqamga va o'nlik kasrga ega bo'lmasligi kerak. O'nli, o'n oltilik yoki sakkiz qirrali bo'lishi mumkin.
---------------------------------------------------------------------------------------------------------------------------------------------------------
Floats  Bu o'nlik nuqta yoki eksponensial shaklda raqamlar uchun nom.
---------------------------------------------------------------------------------------------------------------------------------------------------------
Strings  Bu shunchaki matnni anglatadi, biz bu haqda quyida batafsilroq gaplashamiz.
---------------------------------------------------------------------------------------------------------------------------------------------------------
Boolean values   Haqiqiy / yolg'on gaplarning ma'nosi.
---------------------------------------------------------------------------------------------------------------------------------------------------------
Arrays   Massivlar bir nechta qiymatlarni saqlaydigan o'zgaruvchilar. Biz ular haqida quyida batafsilroq gaplashamiz.
---------------------------------------------------------------------------------------------------------------------------------------------------------
Objects   Ob'ektlar ma'lumotni va uni qanday qayta ishlash haqida ma'lumotni saqlaydi.
---------------------------------------------------------------------------------------------------------------------------------------------------------
Resources   Bu PHP-dan tashqaridagi funktsiyalar va manbalarga havolalar.
---------------------------------------------------------------------------------------------------------------------------------------------------------
NULL    NULL bo'lgan o'zgaruvchining qiymati yo'q.
---------------------------------------------------------------------------------------------------------------------------------------------------------
$GLOBALS     PHP skriptining har qanday joyidan global o'zgaruvchilarga kirish uchun ishlatiladi
function myFunction() {
    global $a, $b;
$b = $a - $b; }
---------------------------------------------------------------------------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------------------------------------------------------------------------




 */

?>


