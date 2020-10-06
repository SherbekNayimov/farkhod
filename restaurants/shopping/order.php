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
<?php
$id = $_GET['id']??1;
$price = 0.00;
$product_name = null;
$img = null;
if ($id == 1){
    $price = 19.99;
    $product_name = "Earings";
    $img = "";
}

if ($id == 2){
    $price = 1349.99;
    $product_name = "Ring";
}
if ($id == 3){
    $price = 120.99;
    $product_name = "Newborn Dress";
    $img = "<img src=\"https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTcerqFyzJRLHlaGzlTvSFJcrI-v9ag0HVZatnrXaXVsvhuS-8PBpqPIDMHF7eQns600R8EU7sioENlHrRQxaBe7eKmmCxKU27fCS-Ng93crM-YO96pGfuQ4w&usqp=CAE\">";
    $qty = $_GET['qty']??1;
}
?>
<div class="text">
    You have selected <span class="product_name"><?=$img?></span> and <span class="product_name"><?=$qty?></span> <span class="product_name"><?=$product_name?></span> and the price is <span class="product_price">$<?=$price?></span>
</div>
<div>
    <form action="index.php" method="post">
        <button class="ok" type="submit"> Go Back</button>
    </form>
</div>
<style>

    .text{
        text-align: center;

    }
    .ok{
        height: 50px;
        width: 150px;
        background: yellow;
        border: none;
        color: #000;
        border-radius: 25px;

    }
    .ok:hover{
        background-color: orange;
        cursor: pointer;
    }
    .product_name{
        color:red;
        font-weight: bolder;
    }
    .product_price{
        color: green;
        font-weight: bolder;
    }

</style>

</body>
</html>