<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="php">
    <?php
    $kg = $_POST['EGG'] ?? null;
    $shurva = $_POST['Bacon'] ?? null;
    $Cheesy = $_POST['Cheesy'] ?? null;
    $Croissan = $_POST['Croissan'] ?? null;
    $Turkey = $_POST['Turkey'] ?? null;
    $Avocado = $_POST['Avocado'] ?? null;
    $Breakfast = $_POST['Breakfast'] ?? null;



    echo "<br>";
    echo "<br>";
    echo "<h2>Your order:</h2>";
    echo "<h2>$kg</h2>";
    echo "<h3>$shurva</h3>";
    echo "<h2>$Cheesy</h2>";
    echo "<h2>$Croissan</h2>";
    echo "<h2>$Turkey</h2>";
    echo "<h2>$Avocado</h2>";
    echo "<h2>$Breakfast</h2>";


    ?>
</div>

<div>
    <form action="burger.php" method="post">
        <button class="ok" type="submit">back</button>
    </form>
</div>
<div>
    <form action="order.php" method="post">
        <button class="ok" type="submit">payment</button>
    </form>
</div>

<style>

    body {
        background-image: url("https://cdn.hipwallpaper.com/i/50/63/p5bzLy.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: white;
        text-align: center;

    }

    * {box-sizing: border-box;}


    .php {
        bottom: 21px;
        background: rgb(0, 0, 0,);
        background: rgba(0, 0, 0, 0.6);
        color: white;
        font-size: 17px;
        padding: 5px;
        text-align: center;
        border-radius: 25px;
    }
    .php:hover{
        opacity: 1;
        border-radius: 50px;
    }

    .ok{
        width: 145px;
        height: 45px;
        border-radius: 14px;
        background-color: yellow;

    }
    .ok form , button[type="submit"]{
        background-color: black;
        background-size: cover;
        color: white;
        padding: 8px;
        margin: 12px auto;
        padding-left: 50px;
        padding-right: 50px;
        text-align: center;

    }
    form button:hover{
        color: white;
        background-color: rgba(0,0,0,0.3);
    }

</style>

</body>
</html>
