<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>


    <style>

        .chessboard {
            width: 610px;
            height: 675px;
            margin: 50px;
            border: 25px solid #111111;
            text-align: center;
            border-radius: 25px;
            font-size: 60px;
        }
        .black {
            float: left;
            width: 70px;
            height: 70px;
            background-color: #999999;
            font-size:45px;
            text-align:center;
            display: table-cell;
            vertical-align: middle;
        }
        .black:active{
            background-color: limegreen;
            box-shadow: 0 1px #666666;
            transform: translateY(1px);
        }
        .white:active{
            background-color: limegreen;
            box-shadow: 0 1px #666666;
            transform: translateY(1px);
}

        .white {
            float: left;
            width: 70px;
            height: 70px;
            background-color: #fff;
            font-size:45px;
            text-align:center;
            display: table-cell;
            vertical-align:middle;
        }
        .qora {
            float: left;
            width: 70px;
            height: 35px;
            background-color: black;
            font-size:25px;
            text-align:center;
            display: table-cell;
            vertical-align:middle;
            color: white;
        }

        .oq {
            width: 70px;
            height: 35px;
            background-color: black;
            font-size:25px;
            text-align:center;
            display: table-cell;
            vertical-align:middle;
            color: white;
            float: left;

        }


    </style>


    <div class="chessboard">

        <!-- abc -->
        <div class="qora">A</div>
        <div class="qora">B</div>
        <div class="qora">C</div>
        <div class="qora">D</div>
        <div class="qora">E</div>
        <div class="qora">F</div>
        <div class="qora">G</div>
        <div class="qora">H</div>

        <!-- 1st -->

        <div class="white">&#9820;</div>
        <div class="black">&#9822;</div>
        <div class="white">&#9821;</div>
        <div class="black">&#9819;</div>
        <div class="white">&#9818;</div>
        <div class="black">&#9821;</div>
        <div class="white">&#9822;</div>
        <div class="black">&#9820;</div>
        <!-- 2nd -->


        <div class="black">&#9823;</div>
        <div class="white">&#9823;</div>
        <div class="black">&#9823;</div>
        <div class="white">&#9823;</div>
        <div class="black">&#9823;</div>
        <div class="white">&#9823;</div>
        <div class="black">&#9823;</div>
        <div class="white">&#9823;</div>
        <!-- 3th -->

        <div class="white"></div>
        <div class="black"></div>
        <div class="white"></div>
        <div class="black"></div>
        <div class="white"></div>
        <div class="black"></div>
        <div class="white"></div>
        <div class="black"></div>
        <!-- 4st -->

        <div class="black"></div>
        <div class="white"></div>
        <div class="black"></div>
        <div class="white"></div>
        <div class="black"></div>
        <div class="white"></div>
        <div class="black"></div>
        <div class="white"></div>
        <!-- 5th -->

        <div class="white"></div>
        <div class="black"></div>
        <div class="white"></div>
        <div class="black"></div>
        <div class="white"></div>
        <div class="black"></div>
        <div class="white"></div>
        <div class="black"></div>
        <!-- 6th -->

        <div class="black"></div>
        <div class="white"></div>
        <div class="black"></div>
        <div class="white"></div>
        <div class="black"></div>
        <div class="white"></div>
        <div class="black"></div>
        <div class="white"></div>
        <!-- 7th -->

        <div class="white">&#9817;</div>
        <div class="black">&#9817;</div>
        <div class="white">&#9817;</div>
        <div class="black">&#9817;</div>
        <div class="white">&#9817;</div>
        <div class="black">&#9817;</div>
        <div class="white">&#9817;</div>
        <div class="black">&#9817;</div>
        <!-- 8th -->

        <div class="black">&#9814;</div>
        <div class="white">&#9816;</div>
        <div class="black">&#9815;</div>
        <div class="white">&#9813;</div>
        <div class="black">&#9812;</div>
        <div class="white">&#9815;</div>
        <div class="black">&#9816;</div>
        <div class="white">&#9814;</div>
        <!-- number -->
        <div class="oq">A</div>
        <div class="oq">B</div>
        <div class="oq">C</div>
        <div class="oq">D</div>
        <div class="oq">E</div>
        <div class="oq">F</div>
        <div class="oq">G</div>
        <div class="oq">H</div>

    </div>


</table>
</body>
