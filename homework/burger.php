
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

$a = 3.45;
$b = 5.98;
$c = 6.75;
$d = 4.99;
$e = 3.99;
$f = 5.99;
$g = 1.99;
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
        <img src="https://img2.pngio.com/bacon-egg-and-cheese-sandwich-png-picture-414686-bacon-egg-and-bacon-egg-and-cheese-sandwich-png-477_355.png" alt="Avatar" class="image">
       <table class="overlay">
        <tr>
            <th>Colories</th>
            <th>300</th>

        </tr>
           <tr>
               <td>Fat</td>
               <td>12g</td>
           </tr>
           <tr>
               <td>Carbs</td>
               <td>30g</td>
           </tr>
           <tr>
               <td>Protein</td>
               <td>17g</td>
           </tr>

       </table>


        <?php
    echo "EGG MCMUFFIN = $" . $calculator->EGG($a) . "  :";
    ?>


    <select name="EGG">
        <option value=""></option>
        <option value="EGG MCMUFFIN: 1">1</option>
        <option value="EGG MCMUFFIN: 2">2</option>
        <option value="EGG MCMUFFIN: 3">3</option>
        <option value="EGG MCMUFFIN: 4">4</option>
        <option value="EGG MCMUFFIN: 5">5</option>
        <option value="EGG MCMUFFIN: 6">6</option>
        <option value="EGG MCMUFFIN: 7">7</option>
        <option value="EGG MCMUFFIN: 8">8</option>
        <option value="EGG MCMUFFIN: 9">9</option>
        <option value="EGG MCMUFFIN: 10">10</option>
    </select>

        </div>

    <br>

        <?php
        echo "<br>";
        ?>
    <div class="container">
        <img src="https://www.fastfoodmenuprices.com/wp-content/uploads/2013/06/Bacon-Double-Cheeseburger-Burger-King.png" alt="Avatar" class="image">
        <table class="overlay">
            <tr>
                <th>Colories</th>
                <th>300</th>

            </tr>
            <tr>
                <td>Fat</td>
                <td>14g</td>
            </tr>
            <tr>
                <td>Carbs</td>
                <td>29g</td>
            </tr>
            <tr>
                <td>Protein</td>
                <td>16g</td>
            </tr>

        </table>

        <?php
        echo "BACON CHEESE = $" . $calculator->Bacon($b) . "  : ";
 ?>

        <select class="Bacon" name="Bacon">
                    <option value=""></option>
                    <option value="Bacon: 1">1</option>
                    <option value="Bacon: 2">2</option>
                    <option value="Bacon: 3">3</option>
                    <option value="Bacon: 4">4</option>
                    <option value="Bacon: 5">5</option>
                    <option value="Bacon: 6">6</option>
                    <option value="Bacon: 7">7</option>
                    <option value="Bacon: 8">8</option>
                    <option value="Bacon: 9">9</option>
                    <option value="Bacon: 10">10</option>
                </select>
        </div>

    <?php
    echo "<br>";
    ?>
    <br>
    <div class="container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Burger_King_-_Angus_XT_Burger.tiff/lossless-page1-1200px-Burger_King_-_Angus_XT_Burger.tiff.png" alt="Avatar" class="image">
        <table class="overlay">
            <tr>
                <th>Colories</th>
                <th>350</th>

            </tr>
            <tr>
                <td>Fat</td>
                <td>16g</td>
            </tr>
            <tr>
                <td>Carbs</td>
                <td>36g</td>
            </tr>
            <tr>
                <td>Protein</td>
                <td>13g</td>
            </tr>

        </table>


        <?php
        echo "MUSHROOM SWISS = $" . $calculator->Cheesy($c) . "  :";
        ?>


        <select class="Cheesy" name="Cheesy">
            <option value=""></option>
            <option value="ANGUS MUSHROOM SWISS: 1">1</option>
            <option value="ANGUS MUSHROOM SWISS: 2">2</option>
            <option value="ANGUS MUSHROOM SWISS: 3">3</option>
            <option value="ANGUS MUSHROOM SWISS: 4">4</option>
            <option value="ANGUS MUSHROOM SWISS: 5">5</option>
            <option value="ANGUS MUSHROOM SWISS: 6">6</option>
            <option value="ANGUS MUSHROOM SWISS: 7">7</option>
            <option value="ANGUS MUSHROOM SWISS: 8">8</option>
            <option value="ANGUS MUSHROOM SWISS: 9">9</option>
            <option value="ANGUS MUSHROOM SWISS: 10">10</option>
        </select>

    </div>
    <?php
    echo "<br>";
    ?>

    <div class="container">
        <img src="https://bk-latam-prod.s3.amazonaws.com/sites/burgerking.bs/files/Croissanwich_Loaded_desktop.png" alt="Avatar" class="image">
        <table class="overlay">
            <tr>
                <th>Colories</th>
                <th>340</th>

            </tr>
            <tr>
                <td>Fat</td>
                <td>18g</td>
            </tr>
            <tr>
                <td>Carbs</td>
                <td>28g</td>
            </tr>
            <tr>
                <td>Protein</td>
                <td>17g</td>
            </tr>

        </table>


        <?php
        echo "CROISSAN'WICH = $" . $calculator->Croissan($d) . "  :";
        ?>


        <select class="Croissan" name="Croissan">
            <option value=""></option>
            <option value="CROISSAN'WICH: 1">1</option>
            <option value="CROISSAN'WICH: 2">2</option>
            <option value="CROISSAN'WICH: 3">3</option>
            <option value="CROISSAN'WICH: 4">4</option>
            <option value="CROISSAN'WICH: 5">5</option>
            <option value="CROISSAN'WICH: 6">6</option>
            <option value="CROISSAN'WICH: 7">7</option>
            <option value="CROISSAN'WICH: 8">8</option>
            <option value="CROISSAN'WICH: 9">9</option>
            <option value="CROISSAN'WICH: 10">10</option>
        </select>

    </div>

    <?php
    echo "<br>";
    ?>

    <div class="container">
        <img src="https://bk-ca-prd-01.s3.amazonaws.com/sites/burgerking.ca/files/02298-61_BK_Web_BBQBACONKING_500x540px_CR.png" alt="Avatar" class="image">
        <table class="overlay">
            <tr>
                <th>Colories</th>
                <th>230</th>

            </tr>
            <tr>
                <td>Fat</td>
                <td>5g</td>
            </tr>
            <tr>
                <td>Carbs</td>
                <td>28g</td>
            </tr>
            <tr>
                <td>Protein</td>
                <td>17g</td>
            </tr>

        </table>


        <?php
        echo "TURKEY BACON = $" . $calculator->Turkey($e) . "  :";
        ?>


        <select class="Turkey" name="Turkey">
            <option value=""></option>
            <option value="TURKEY BACON: 1">1</option>
            <option value="TURKEY BACON: 2">2</option>
            <option value="TURKEY BACON: 3">3</option>
            <option value="TURKEY BACON: 4">4</option>
            <option value="TURKEY BACON: 5">5</option>
            <option value="TURKEY BACON: 6">6</option>
            <option value="TURKEY BACON: 7">7</option>
            <option value="TURKEY BACON: 8">8</option>
            <option value="TURKEY BACON: 9">9</option>
            <option value="TURKEY BACON: 10">10</option>
        </select>

    </div>



    <?php
    echo "<br>";
    ?>
    <div class="container">
        <img src="https://smashburger.com/wp-content/uploads/2019/04/Beef_Double_Spicy-Baja_511x384_126_0419-copy.png" alt="Avatar" class="image">
        <table class="overlay">
            <tr>
                <th>Colories</th>
                <th>350</th>

            </tr>
            <tr>
                <td>Fat</td>
                <td>14g</td>
            </tr>
            <tr>
                <td>Carbs</td>
                <td>40g</td>
            </tr>
            <tr>
                <td>Protein</td>
                <td>19g</td>
            </tr>

        </table>


        <?php
        echo "Smashburger = $" . $calculator->Avocado($f) . "  :";
        ?>


        <select class="Avocado" name="Avocado">
            <option value=""></option>
            <option value="Smashburger: 1">1</option>
            <option value="Smashburger: 2">2</option>
            <option value="Smashburger: 3">3</option>
            <option value="Smashburger: 4">4</option>
            <option value="Smashburger: 5">5</option>
            <option value="Smashburger: 6">6</option>
            <option value="Smashburger: 7">7</option>
            <option value="Smashburger: 8">8</option>
            <option value="Smashburger: 9">9</option>
            <option value="Smashburger: 10">10</option>
        </select>

    </div>


    <?php
    echo "<br>";
    ?>

    <div class="container">
        <img src="https://images.ctfassets.net/a9odgsv44wmq/1L2cLZBwFWukyQ6eAwqwCW/2fe0a33cf5a260484e29aec521e0bdee/MenuImage_SausageBreakfastJack.png" alt="Avatar" class="image">
        <table class="overlay">
            <tr>
                <th>Colories</th>
                <th>350</th>

            </tr>
            <tr>
                <td>Fat</td>
                <td>18g</td>
            </tr>
            <tr>
                <td>Carbs</td>
                <td>30g</td>
            </tr>
            <tr>
                <td>Protein</td>
                <td>16g</td>
            </tr>

        </table>


        <?php
        echo "BREAKSFAT JACK = $" . $calculator->Breakfast($g) . "  :";
        ?>


        <select class="Breakfast" name="Breakfast">
            <option value=""></option>
            <option value="BREAKSFAT JACK : 1">1</option>
            <option value="BREAKSFAT JACK : 2">2</option>
            <option value="BREAKSFAT JACK : 3">3</option>
            <option value="BREAKSFAT JACK : 4">4</option>
            <option value="BREAKSFAT JACK : 5">5</option>
            <option value="BREAKSFAT JACK : 6">6</option>
            <option value="BREAKSFAT JACK : 7">7</option>
            <option value="BREAKSFAT JACK : 8">8</option>
            <option value="BREAKSFAT JACK : 9">9</option>
            <option value="BREAKSFAT JACK : 10">10</option>
        </select>

    </div>




    <br>
<br>
    <button class="ok" type="submit">Order</button>
</form>

<div>
    <form action="drink.php" method="post">
        <button class="ok" type="submit">drink</button>
    </form>
</div>
<div>
    <form action="order.php" method="post">
        <button class="ok" type="submit">online order</button>
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
        text-align: center;
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




