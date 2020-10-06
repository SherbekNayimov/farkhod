<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to out Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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
}
?>
<div class="container-fluid">
    <div id="mystore">
        <h2>Welcome to our Store</h2>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Image</th>
                <th>Buy</th>

            </tr>
            <tr>
                <td>1</td>
                <td>Earings</td>
                <td>1/10 CT. T.W. Genuine Diamond 9.3 mm Stud Earrings in Sterling Silver</td>
                <td>19.99</td>
                <td>
                    <select class="qty" name="qty">
                    <option value="null"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                </td>
                <br>

                <td><img src="https://s7d4.scene7.com/is/image/JCPenney/DP0829201915012401M.tif?wid=350&hei=350&op_usm=.4,.8,0,0&resmode=sharp2"> </td>

            </tr>
            <tr>
                <td>2</td>
                <td>Ring</td>
                <td>1/10 CT. T.W. Genuine Diamond 9.3 mm Stud Earrings in Sterling Silver</td>
                <td>1349.99</td>
                <td>6</td>
                <td><img src="https://s7d9.scene7.com/is/image/JCPenney/DP0829201915012407M?resmode=sharp2&op_sharpen=1&wid=550&hei=550"> </td>
                <td><a class="btn btn-info" href="index.php?id=2">Buy</a></td>
                <tr>
                <td>3</td>
                <td>Ring</td>
                <td>Women's Swarovski Attract Round Ring</td>
                <td>120.99</td>
                <td>
                    <select class="qty" name="qty">
                        <option value="null"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                <td><img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTcerqFyzJRLHlaGzlTvSFJcrI-v9ag0HVZatnrXaXVsvhuS-8PBpqPIDMHF7eQns600R8EU7sioENlHrRQxaBe7eKmmCxKU27fCS-Ng93crM-YO96pGfuQ4w&usqp=CAE"> </td>

                </td>
                <td><a class="btn btn-info" href="order.php?id=3">Buy</a></td>
            </tr>
        </table>

    </div>
</div>
<style>
    .qty{
        color: black;
        background-size: auto;
        background-color: blanchedalmond;
    }

    #mystore h2{
        text-align: center;
        font-size: 30px;

        padding: 10px;
        margin: 30px;
        color: red;
    }
    table img{
        width: 100px;
    }
    th{
        background-color: rebeccapurple;
        color: yellow;
    }
    tr:hover{
        background-color: #f4f0f0;
        cursor: pointer;
    }
</style>
</body>
</html>


