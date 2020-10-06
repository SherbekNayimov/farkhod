<?php
$numbers = range (1,1000);
$raqam = $_GET['raqam']??1;

for ($i=1; $i<101; $i++){
    echo "<a class='links' href='septimber_6.php?raqam=$i'>$i</a>";
}

echo "<hr>";


foreach ($numbers as $number){
   if($number%$raqam===0) {
        echo "<div class='sher odd_num'>$number</div>";
    }else{
        echo "<div class='sher even_num'>$number</div>";
    }

}
?>



<style>
    body{
        background-color: rgba(0,0,0,0.2);
        text-align: center;
        border-radius: 15px;
        border: 3px double black;

    }
    .links{
        margin: 5px;
        display: inline-block;
        color: black;
        background-color: yellow;
        border: 1px dotted red;
        font-size: 20px;
        box-shadow: 0 6px #999;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        text-align: center;
        line-height: 50px;
        font-weight: bolder;
        text-decoration: none;

    }
    .links:active{
        background-color: limegreen;
        box-shadow: 0 3px #666666;
        transform: translateY(4px);
    }
    .links:hover{
        background-color: limegreen;
    }
    .sher{
        width: 50px;
        height: 50px;
        border: 2px solid black;
        border-radius: 50%;
        margin: 4px;
        display: inline-block;
        color: white;
        text-align: center;
        font-size: 25px;
        line-height: 50px;
        font-weight: bolder;
        box-shadow: 5px 5px 15px 17px black;


    }
    .odd_num{
        background-color: #3e8e41;

    }
    .even_num{
        background-color: #b30000;
        color: #ffeb3b;
    }
    </style>