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
<div class="wrapper">
    <div class="checkout_wrapper">
<div class="checkout_form">
    <div class="section">
        <input type="text" name="card_number" placeholder="Card Number">
    </div>
    <div class="section">
        <input type="text" name="name" placeholder="Cardholder Name">
    </div>

<div class="last_section">
    <div class="item">
        <input type="text" name="date" placeholder="Expiry Date">
    </div>
    <div class="item">
        <input type="password" name="cvv" placeholder="CVV">
    </div>

    <div class="btn">
        <a href="address.php">Pay</a>
     </div>
    </div>
   </div>
 </div>
</div>




<style>
    *{margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
    }
    body{
        background-image: url("https://cdn131.picsart.com/288481442001201.png?type=webp&to=min&r=640");
        background-size: cover;
        width: 100%;
        height: 100%;
    }
    .wrapper{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px;
        height: 350px;
     }
    .wrapper .checkout_wrapper{
        width: 100%;
        height: 100%;
        display: flex;
    }
    .wrapper .checkout_wrapper .checkout_form {
        width: 400px;
        background: #ffffff;
        border-top-right-radius: 1px;
        border-bottom-right-radius: 1px;

    }


    .wrapper .checkout_wrapper .checkout_form p{
        margin-bottom: 25px;
        font-size: 20px;
        text-transform: uppercase;
    }
    .wrapper .checkout_wrapper .checkout_form .section{
        margin-bottom: 15px;
    }
    .wrapper .checkout_wrapper .checkout_form .section input[type="text"]{
        width: 100%;
        padding: 10px;
        border: 3px solid #dddddd;
        height: 100%;
    }
    .wrapper .checkout_wrapper .checkout_form .section input[type="text"]:focus{
        border-color: red;
    }
    .wrapper .checkout_wrapper .checkout_form .last_section{
        display: flex;
        height: 85px;
    }
    .wrapper .checkout_wrapper .checkout_form .section.last_section .item{
        width: 50%;
    }
    .wrapper .checkout_wrapper .checkout_form .last_section .btn{
        background: #3B5998;
        padding: 15px;
        border-radius: 25px;
        text-align: center;
        margin-top: 35px;
    }
    .wrapper .checkout_wrapper .checkout_form .last_section .btn a{
        color: #ffffff;
        letter-spacing: 10px;
        display: block;
    }






</style>



</body>
</html>