<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link href='https://fonts.googleapis.com/css?family=Jacques Francois Shadow' rel='stylesheet'>



</head>
<body>
<?php
$input = $_GET['input']??null;
$msg = $_GET['msg']??null;
$email_class = null;
$first_name_class = null;
$last_name_class =null;
$number_class =null;

if ($input=='first_name'){
    $first_name_class = "error";
}
if ($input=='last_name'){
    $last_name_class = "error";
}

if ($input=='email'){
    $email_class = "error";
}
if ($input=='password'){
    $password_class = "error";
}
if ($input=='number') {
    $number_class = "error";
}


?>
<br>
<br>
<h1 class="h1">Bizning guruppamiz</h1>
<br>

<div class="label">
    <form action="login.php" method="post">
        <?php
        if ($input){
            ?>
            <div class="php">
                <?php echo $msg;?>
            </div>
            <?php
        }

        ?>


        <br>



        <p><label> <input class="<?php echo $first_name_class; ?>"  name="first_name" type="text" placeholder="sizning ismingize" value=""></label></p>
        <p><label> <input class="<?php echo $last_name_class; ?>" name="last_name" type="text" placeholder="Your Last Name" value=""></label></p>
        <p><label> <input class="<?php echo $email_class; ?>" name="email" type="email" placeholder="Your Email"></label></p>
        <p><label> <input class="<?php echo $password_class; ?>" name="password" type="password"  placeholder="password"></label></p>
        <p><label> <input class="<?php echo $number_class; ?>" name="number" type="number" placeholder="Your Phone Number"></label></p>
        <p>


            <button class="reset" type="reset">Reset</button>
            <button class="submit" type="submit">Submit</button>
        </p>
    </form>
</div>
<style>

.php{

    padding: 15px;
    border-radius: 10px;
    background-color: pink;
    color: blue;
}


    .error{
        border: 3px solid red;

    }
    .error:hover{
        background-color: pink;
    }



    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("https://wallpapercave.com/wp/IbIRpSR.jpg");
        text-align: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;

    }
    * {
        box-sizing: border-box;


    }
    .label p label input {
        width: 545px;
        height: 45px;
        top: 245px;

        background: #45bbff;
        color: black;
        padding: 5px 10px;
        font-size: 25px;
        text-align: center;
        cursor: pointer;
        outline: none;
        border-radius: 20px;
        box-shadow: 0 6px #0b7dda;

    }
    .label p label input:active{
        box-shadow: 0 5px red;
        background-color: #00aff0;
        transform: translateY(4px);

    }
    .reset {
        width: 125px;
        height: 45px;
        background: #55ACEE;
        color: white;
        padding: 5px 10px;
        font-size: 25px;
        text-align: center;
        cursor: pointer;
        outline: none;
        border: none;
        border-radius: 20cm;
        box-shadow: 0 6px #0b7dda;
    }
    .reset:hover{
        color: black;
   sh
    }
    .reset:active {
        box-shadow: 0 4px red;
        background-color: red;
        transform: translateY(5px);

    }

    .submit {
        width: 125px;
        height: 45px;
        background: #55ACEE;
        color: white;
        padding: 5px 10px;
        font-size: 25px;
        text-align: center;
        cursor: pointer;
        outline: none;
        border: none;
        border-radius: 20px;
        box-shadow: 0 6px #0b7dda;
    }
    .submit:hover{
        color: black;
    }
    .submit:active {
        box-shadow: 0 4px #4CAF50;
        background-color: #4CAF50;
        transform: translateY(5px);
    }



    body {
        font-family: Jacques Francois Shadow;
        color: #f1f1f1;

    }


.h1 {
    border: 2px solid black;
    box-shadow: 0 4px black;
    padding: 5px;
    border-radius: 50px;
    background-color: #55ACEE;
    color: black;

}


</style>
</body>
</html>

