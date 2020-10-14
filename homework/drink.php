

<?php
class Calculator
{
    public function EGG($a){
        return $a;
    }
    public function Bacon($b){
        return $b;
    }
    public function Cheesy($c){
        return $c;
    }
    public function Croissan($d){
        return $d;
    }
    public function Turkey($e){
        return $e;
    }
    public function Avocado($f){
        return $f;
    }
    public function Breakfast($g){
        return $g;
    }
}


$calculator = new Calculator();

$a = 1.45;
$b = 1.45;
$c = 1.35;
$d = 1.35;
$e = 2.99;
$f = 3.99;
$g = 2.99;
?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>



<form action="ok.php" method="post">



    <br>
    <div class="container">
        <img src="https://bk-ca-prd-01.s3.amazonaws.com/sites/burgerking.ca/files/Thumb_0008_Coca_Cola.png" alt="Avatar" class="image">
       <table class="overlay">
        <tr>
            <th>Colories</th>
            <th>200</th>

        </tr>
           <tr>
               <td>Sodium</td>
               <td>65mg 3%</td>
           </tr>
           <tr>
               <td>Sugars</td>
               <td>55g</td>
           </tr>
       </table>


        <?php
    echo "COCA COLA = $" . $calculator->EGG($a) . "  :";
    ?>


    <select name="EGG">
        <option value=""></option>
        <option value="COCA COLA: 1">1</option>
        <option value="COCA COLA: 2">2</option>
        <option value="COCA COLA: 3">3</option>
        <option value="COCA COLA: 4">4</option>
        <option value="COCA COLA: 5">5</option>
        <option value="COCA COLA: 6">6</option>
        <option value="COCA COLA: 7">7</option>
        <option value="COCA COLA: 8">8</option>
        <option value="COCA COLA: 9">9</option>
        <option value="COCA COLA: 10">10</option>
    </select>

        </div>


    <br>

        <?php
        echo "<br>";
        ?>
    <div class="container">
        <img src="https://burgerking.co.za/media/4310/bk_web_pepsi_500x540.png?anchor=center&mode=crop&width=500&height=540&rnd=131376757620000000" alt="Avatar" class="image">
        <table class="overlay">
            <tr>
                <th>Colories</th>
                <th>150</th>

            </tr>
            <tr>
                <td>Sodium</td>
                <td>30mg 1%</td>
            </tr>
            <tr>
                <td>Sugars</td>
                <td>41g</td>
            </tr>

        </table>

        <?php
        echo "PEPSE = $" . $calculator->Bacon($b) . "  : ";

 ?>

        <select class="Bacon" name="Bacon">
                    <option value=""></option>
                    <option value="PEPSE: 1">1</option>
                    <option value="PEPSE: 2">2</option>
                    <option value="PEPSE: 3">3</option>
                    <option value="PEPSE: 4">4</option>
                    <option value="PEPSE: 5">5</option>
                    <option value="PEPSE: 6">6</option>
                    <option value="PEPSE: 7">7</option>
                    <option value="PEPSE: 8">8</option>
                    <option value="PEPSE: 9">9</option>
                    <option value="PEPSE: 10">10</option>
                </select>
        </div>

    <?php
    echo "<br>";
    ?>
    <br>
    <div class="container">
        <img src="https://bk-apac-prd.s3.amazonaws.com/sites/burgerking.com.fj/files/New_FANTA_detail.png" alt="Avatar" class="image">
        <table class="overlay">
            <tr>
                <th>Colories</th>
                <th>300</th>

            </tr>
            <tr>
                <td>Sodium</td>
                <td>85mg 4%</td>
            </tr>
            <tr>
                <td>Sugars</td>
                <td>80g</td>
            </tr>
        </table>


        <?php
        echo "FANTA = $" . $calculator->Cheesy($c) . "  :";
        ?>


        <select class="Cheesy" name="Cheesy">
            <option value=""></option>
            <option value="FANTA: 1">1</option>
            <option value="FANTA: 2">2</option>
            <option value="FANTA: 3">3</option>
            <option value="FANTA: 4">4</option>
            <option value="FANTA: 5">5</option>
            <option value="FANTA: 6">6</option>
            <option value="FANTA: 7">7</option>
            <option value="FANTA: 8">8</option>
            <option value="FANTA: 9">9</option>
            <option value="FANTA: 10">10</option>
        </select>

    </div>
    <?php
    echo "<br>";
    ?>

    <div class="container">
        <img src="https://bk-ca-prd-01.s3.amazonaws.com/sites/burgerking.ca/files/Hero_0012_Sprite.png" alt="Avatar" class="image">
        <table class="overlay">
            <tr>
                <th>Colories</th>
                <th>140</th>

            </tr>
            <tr>
                <td>Sodium</td>
                <td>65mg 3%</td>
            </tr>
            <tr>
                <td>Sugars</td>
                <td>38g</td>
            </tr>


        </table>


        <?php
        echo "SPRITE = $" . $calculator->Croissan($d) . "  :";
        ?>


        <select class="Croissan" name="Croissan">
            <option value=""></option>
            <option value="SPRITE: 1">1</option>
            <option value="SPRITE: 2">2</option>
            <option value="SPRITE: 3">3</option>
            <option value="SPRITE: 4">4</option>
            <option value="SPRITE: 5">5</option>
            <option value="SPRITE: 6">6</option>
            <option value="SPRITE: 7">7</option>
            <option value="SPRITE: 8">8</option>
            <option value="SPRITE: 9">9</option>
            <option value="SPRITE: 10">10</option>
        </select>

    </div>

    <?php
    echo "<br>";
    ?>

    <div class="container">
        <img src="https://i.pinimg.com/originals/af/0e/71/af0e71ec3ad3a504c70934ddf787e290.png" alt="Avatar" class="image">
        <table class="overlay">
            <tr>
                <th>Colories</th>
                <th>190</th>

            </tr>

            <tr>
                <td>Sodium</td>
                <td>330mg 14%</td>
            </tr>
            <tr>
                <td>Protein</td>
                <td>30g 60%</td>
            </tr>
            <tr>
                <td>Total Sugars</td>
                <td>10g</td>
            </tr>

        </table>


        <?php
        echo "Super Shake = $" . $calculator->Turkey($e) . "  :";
        ?>


        <select class="Super Shake" name="Turkey">
            <option value=""></option>
            <option value="Super Shake: 1">1</option>
            <option value="Super Shake: 2">2</option>
            <option value="Super Shake: 3">3</option>
            <option value="Super Shake: 4">4</option>
            <option value="Super Shake: 5">5</option>
            <option value="Super Shake: 6">6</option>
            <option value="Super Shake: 7">7</option>
            <option value="Super Shake: 8">8</option>
            <option value="Super Shake: 9">9</option>
            <option value="Super Shake: 10">10</option>
        </select>

    </div>



    <?php
    echo "<br>";
    ?>
    <div class="container">
        <img src="https://bk-apac-prd.s3.amazonaws.com/sites/burgerking.com.fj/files/Update_KERI_detail.png" alt="Avatar" class="image">
        <table class="overlay">
            <tr>
                <th>Colories</th>
                <th>110</th>

            </tr>
            <tr>
                <td>8</td>
                <td>oz.</td>
            </tr>

        </table>


        <?php
        echo "Keri Orange Juice = $" . $calculator->Avocado($f) . "  :";
        ?>


        <select class="Avocado" name="Avocado">
            <option value=""></option>
            <option value="Keri Orange Juice: 1">1</option>
            <option value="Keri Orange Juice: 2">2</option>
            <option value="Keri Orange Juice: 3">3</option>
            <option value="Keri Orange Juice: 4">4</option>
            <option value="Keri Orange Juice: 5">5</option>
            <option value="Keri Orange Juice: 6">6</option>
            <option value="Keri Orange Juice: 7">7</option>
            <option value="Keri Orange Juice: 8">8</option>
            <option value="Keri Orange Juice: 9">9</option>
            <option value="Keri Orange Juice: 10">10</option>
        </select>

    </div>


    <?php
    echo "<br>";
    ?>





    <br>
<br>
    <button class="ok" type="submit">Order</button>

    </form>

<div>
    <form action="burger.php" method="post">
        <button class="ok" type="submit">back</button>
    </form>
</div>





<style>
    body {
        background-image: url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/fe7d8f49-1592-450d-a401-48b9ec8666b9/d39nyc6-cfb4aa34-526b-4782-8961-89c227a0c330.jpg/v1/fill/w_900,h_675,q_75,strp/fire_lion_by_artsoltan_d39nyc6-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD02NzUiLCJwYXRoIjoiXC9mXC9mZTdkOGY0OS0xNTkyLTQ1MGQtYTQwMS00OGI5ZWM4NjY2YjlcL2QzOW55YzYtY2ZiNGFhMzQtNTI2Yi00NzgyLTg5NjEtODljMjI3YTBjMzMwLmpwZyIsIndpZHRoIjoiPD05MDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.4LqF3AGDzmC1l75bz6UwmHOBsA-6OiFcnN6qul9-B_A");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: white;
        text-align: center;





    }

    * {box-sizing: border-box;}

    img:hover {
        animation: shake 0.5s;
        animation-iteration-count: infinite;
    }

    @keyframes shake {
        0% { transform: translate(1px, 1px) rotate(0deg); }
        10% { transform: translate(-1px, -2px) rotate(-1deg); }
        20% { transform: translate(-3px, 0px) rotate(1deg); }
        30% { transform: translate(3px, 2px) rotate(0deg); }
        40% { transform: translate(1px, -1px) rotate(1deg); }
        50% { transform: translate(-1px, 2px) rotate(-1deg); }
        60% { transform: translate(-3px, 1px) rotate(0deg); }
        70% { transform: translate(3px, 1px) rotate(-1deg); }
        80% { transform: translate(-1px, -1px) rotate(1deg); }
        90% { transform: translate(1px, 2px) rotate(0deg); }
        100% { transform: translate(1px, -2px) rotate(-1deg); }
    }


    .container {
        position: relative;
        width: 50%;
        max-width: 250px;
        text-align: center;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 25px;

    }

    .overlay {
        position: absolute;
        bottom: 21px;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5);
        width: 100%;
        transition: .5s ease;
        opacity:0;
        color: white;
        font-size: 20px;
        padding: 10px;
        text-align: center;
    }
    .container:hover .overlay {
        opacity: 1;
        border-radius: 25px;
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
