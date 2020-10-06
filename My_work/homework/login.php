<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>

<br>
<br>
<br>
<br>
<br>


<div id="color">



    <?php
    $email = $_REQUEST;

    echo "<br>";
    echo "<br>";

    if ($email['email'] == 'sher@gmail.com'){
        echo "<h1>Welcome to Members area </h1>";

    }else{
        echo "<h1>Sorry, your email could not be found</h1>";
    }
    ?>


    <form action="gmail.php" method="post">
        <br>
        <br>


        <button class="back" type="submit">Go back</button>

        <br>
        <br>
    </form>



    <style>

        body {
            background-image: url("https://images-na.ssl-images-amazon.com/images/I/61o%2BSA8L7cL._SL1000_.jpg");
            text-align: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        #color{
            color: blue;
            background-color: rgba(0,0,0,0.3);
            border-radius: 55px;
            background-position: center;

        }
        #color:hover{
            background-color: rgb(0,0,0,0.1);
        }
        .back {
            height: 50px;
            width: 150px;
            background-color: rgba(0,0,0,0.7);
            border: none;
            color: white;
            border-radius: 25px;


        }
        .back:hover{
            background-color: rgb(0,0,0,0.4);
            color: red;
        }




    </style>
</div>



</body>
</html>

<?php
/*
      body {
           background-color: white;
            font-family: cursive;
        }
        .glow {
            font-size: 120px;
            color: black;
            text-align: center;
            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
        }

        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 5px white, 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073, 0 0 80px #e60073, 0 0 90px  #ffeb3b, 0 0 100px #ffeb3b, 0 0 110px red, 0 0 120px #ff4da6, 0 0 130px #ff4da6, 0 0 140px green, 0 0 150px green;
            }

            to {
                text-shadow: 0 0 10px white, 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6, 0 0 90px blue, 0 0 100px blue, 0 0 110px red, 0 0 120px red, 0 0 130px #55ACEE, 0 0 140px lawngreen, 0 0 150px lawngreen, 0 0 160px green, 0 0 170px green;

            }
        }

*/
?>