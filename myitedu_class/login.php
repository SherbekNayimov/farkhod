<?php
$first_name = strip_tags($_POST['first_name']);
$last_name = strip_tags($_POST['last_name']);
$email = $_POST['email'];
$password = strip_tags($_POST['password']);
$number = strip_tags($_POST['number']);

$is_email_valid = filter_var($email, FILTER_VALIDATE_EMAIL); // it returns false if email is in a wrong format.

if (strlen($first_name)<3){
    header("Location: index.php?input=first_name&msg=Your First Name must be 3 chars long");
    exit;
}


if (strlen($last_name)<3){
    header("Location: index.php?input=last_name&msg=Your Last Name must be 3 chars long");
    exit;
}
if($is_email_valid===false){
    header("Location: index.php?input=email&msg=Your email is wrong");
    exit;
}
if(strlen($password)<5){
    header("Location: index.php?input=password&msg=Your password must be 4 chars long");
    exit;
}
if (strlen($number) <= 9){
    header("Location: index.php?input=number&msg=Your number must be 9 chars long");
    exit;
}

$email = $_REQUEST;
if ($email['email'] == 'sher@gmail.com' && $email['password'] == 'sher123'){
    echo "<h1 class='h1'>Welcome to programming languages </h1>";

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>


            body {
                font-family: Nosifer;

            }
            .h1 {
                color: crimson;
                text-align: center;
            }


            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 2px solid #ddd;



            }

            th, td {
                text-align: center;
                padding: 16px;
                color:  black;


            }



            th:first-child, td:first-child {
                text-align: left;

            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            tr:nth-child(even):hover{
                background-color:  rgba(0,0,0,0.2);
            }


            tr:nth-child(odd):hover{
                background-color: rgba(0,0,0,0.2);
            }

            .fa-check {
                color: limegreen;

            }

            .fa-remove {
                color: red;

            }
            .h2{
                color: #0b7dda;
                text-align: center;
            }

        </style>
    </head>
    <body>

    <h2 class="h2">Biz urgangan va urganmoqchi bulgan dasturlash tillari</h2>

    <table>

        <tr>
            <th><img src="https://cdn4.iconfinder.com/data/icons/meBaze-Freebies/512/group.png" class="avatar"></th>
            <th style="width:10%"><h2>Ismlar</h2></th>
            <th>linux</th>
            <th>mysql</th>
            <th>php</th>
            <th>html</th>
            <th>bootstrap</th>
            <th>javascript</th>
            <th>API</th>

        </tr>
        <tr>
            <td><img src="https://www.kindpng.com/picc/m/22-223941_transparent-avatar-png-male-avatar-icon-transparent-png.png" class="avatar"></td>
            <td>Sherbek</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-check"></i></td>
        </tr>
        <tr>
            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScj1w0UCdIr4kUblujW7B7IdaZoRmdHyZP5A&usqp=CAU" class="avatar"></td>
            <td>Guzal</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-check"></i></td>
        </tr>
        <tr>
            <td><img src="https://i7.pngguru.com/preview/193/660/856/computer-icons-woman-avatar-clip-art-avatar-girl.jpg" class="avatar"></td>
            <td>Nazokat</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-remove"></i></td>
        </tr>
        <tr>
            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSqC1pweYmRtyT2lYaIj_GF-7IsX2ngy7n70A&usqp=CAU" class="avatar"></td>
            <td>Doston</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-check"></i></td>
        </tr>
        <tr>
            <td><img src="https://i7.pngguru.com/preview/681/929/108/avatar-user-profile-computer-icons-woman-avatar.jpg" class="avatar"></td>
            <td>Nasiba</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-remove"></i></td>
        </tr>
        <tr>
            <td><img src="https://www.w3schools.com/w3css/img_avatar3.png" class="avatar"></td>
            <td>Oybek</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-remove"></i></td>
        </tr>
    </table>
    <br>
    <form >
        <button class="back" type="submit">Go Back</button>
        <br>
        <br>
    </form>
    </body>
    </html>

    <style>
        body{
            text-align: center;

        }
        .back{
            background-color: #4CAF50;
            height: 50px;
            width: 234px;
            color: white;
            border-radius: 50%;
            border: 25px greenyellow;
            box-shadow: 0 4px red;


        }
        .back:hover{
            color: black;
            background-color: #45a049;
            box-shadow: 0 4px blue;

        }
        .back:active{
            box-shadow: 0 1px ;
            background-color: #45a049;
            transform: translateY(4px);


        }
        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 4px blue;

        }

        .avatar:hover{
            background-color: rgba(0,0,0,0.2);
            transform: translateY(2px);
        }


    </style>



    <?php
}else {
    echo "<h1 class='h1'>Sorry, your email or password could not be found</h1>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Zilla Slab Highlight' rel='stylesheet'>
        <style>

            body {
                font-family: Zilla Slab Highlight;
                font-size: 22px;
            }

            .h1{
                text-align: center;

            }
            .submit {
                width: 125px;
                height: 45px;
                background: black;
                color: white;
                padding: 5px 10px;
                font-size: 25px;
                text-align: center;
                cursor: pointer;
                outline: none;
                border: none;
                border-radius: 20px;
                box-shadow: 0 6px rgba(0,0,0,0.7);
            }
            .submit:active {
                box-shadow: 0 4px grey;
                background-color: gray(0,0,0,0.2);
                transform: translateY(4px);
            }


        </style>
    </head>
    <body>
    <form action="index.php" method="post">

        <button class="submit" type="submit">go back</button>

    </form>


    </body>
    </html>
    <?php
}
?>