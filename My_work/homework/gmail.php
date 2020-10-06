<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!--mining css dan ishlaganman -->
    <style>


        body {font-family: Arial, Helvetica, sans-serif;}
        * {
            box-sizing: border-box;

            text-align: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

        }
        .input-container {
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            height: 50px;
            margin-bottom: 15px;

        }

        .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            height: 45px;
            padding: 10px;
            outline: none;
        }

        .input-field:focus {
            border: 2px solid dodgerblue;
        }


        .btn {

            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            font-size: 25px;
            text-align: center;
            outline: none;
            background-color: #0b7dda;
            border-radius: 10px;
            box-shadow: 0 8px #999;
        }

        .btn:hover {
            background-color: #0d8bf2;
        }

        .btn:active{
            background-color: #0d8bf2;
            box-shadow: 0 3px #666666;
            transform: translateY(5px);
        }

        #mylogin{
            background-color: rgb(0,0,0,0.1);
            border-radius: 25px;
            border: 2px solid black;
            padding: 5px;
            text-align: center;

        }
        #mylogin:hover {
            background-color: rgba(0, 0, 0, 0.2);
        }

        form{
            margin-top: 50px;
            transition: all 4s ease-in-out;
        }

        .dark-mode{
            background-color: black;
            color: white;
        }


        .button {
            padding: 5px 10px;
            font-size: 20px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 10px;
            box-shadow: 0 9px #999;
        }



        .button:active {
            background-color: limegreen;
            box-shadow: 0 4px #666666;
            transform: translateY(4px);
        }


        .fa {
            padding: 10px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
            padding: 5px 10px;
            font-size: 20px;
            text-align: center;
            cursor: pointer;
            outline: none;
            border: none;
            border-radius: 10px;
            box-shadow: 0 6px #999;
        }
        .fa-facebook:active {
            box-shadow: 0 4px #3B5998;
            transform: translateY(4px);
        }


        .fa-twitter {
            background: #55ACEE;
            color: white;
            padding: 5px 10px;
            font-size: 20px;
            text-align: center;
            cursor: pointer;
            outline: none;
            border: none;
            border-radius: 10px;
            box-shadow: 0 6px #999;
        }
        .fa-twitter:active {
            box-shadow: 0 4px #55ACEE;
            transform: translateY(4px);
        }

        .fa-google {
            background: #dd4b39;
            color: white;
            padding: 5px 10px;
            font-size: 20px;
            text-align: center;
            cursor: pointer;
            outline: none;
            border: none;
            border-radius: 10px;
            box-shadow: 0 6px #999;
        }
        .fa-google:active {
            box-shadow: 0 4px #dd4b39;
            transform: translateY(4px);
        }

        .fa-yahoo {
            background: #430297;
            color: white;
            padding: 5px 10px;
            font-size: 20px;
            text-align: center;
            cursor: pointer;
            outline: none;
            border: none;
            border-radius: 10px;
            box-shadow: 0 6px #999;
        }
        .fa-yahoo:active {
            box-shadow: 0 4px #430297;
            transform: translateY(4px);
        }

    </style>

</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div id="mylogin">
    <form action="login.php" style="max-width:500px;margin:auto">
        <h2>Register now</h2>

        <p>Enter your information to register for the workshop.</p>




        <!-- email name va h.k codelr css qabul qilish -->
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" name="name" type="text" id="validationServer01" placeholder="First name" required>
        </div>

        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" name="lname" type="text" id="validationServer02" placeholder="Last name" required>
        </div>

        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" name="email" type="email" id="validationServer03" placeholder="Email" required>
        </div>




        <div class="input-container">
            <i class="fa fa-calendar icon"></i>

            <input class="input-field" type="date" id="validationServer04" required>

        </div>

        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-yahoo"></a>

        <br>
        <br>


        <button type="submit" class="btn">Register</button>



        <br>
        <br>



</div>
<!-- background-color almashtirish  -->
<button class="button" onclick="myFunction()">tungi rijim</button>

<script>
    function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
</script>

</form>
<br>
<br>
<br>



</body>
</html>