<!DOCTYPE html>

<body>

<?php
function familyName($fname , $years) {
    echo "$fname Nayimov. Born in $years <br>";
}

familyName("Sherbek", "2001");
familyName("Farkhod", "2004");
familyName("Quvonchbek", "2012");
familyName("Beknazar", "2013");

$name = $_REQUEST['name']??null;
echo $name;

?>
<form method="post" action="function.php">

   <input  name="name" type="text">

    <button type="submit">Submit</button>
</form>
</body>
</html>