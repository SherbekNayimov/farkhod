<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;


        }
        * {
            box-sizing: border-box;


        }


        .input-container {
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            margin-bottom: 15px;

        }


        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }


        .input-field:focus {
            border: 2px solid dodgerblue;
        }

        .btn {
            background-color: dodgerblue;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }





        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

         button[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }

        button[type=submit]:hover {
            background-color: #45a049;
        }


        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
        }



        .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }


        @media screen and (max-width: 600px) {
            .column, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
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
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-google {
            background: #dd4b39;
            color: white;
        }

        .fa-yahoo {
            background: #430297;
            color: white;
        }




    </style>
</head>
<body>



<div class="container">
    <div style="text-align:center">

    </div>

    <div class="row">
        <div class="column">
            <img src="https://img3.stockfresh.com/files/r/rizwanali3d/m/75/5978812_stock-vector-register-now-red-vector-icon-design.jpg" style="width:100%">

        </div>


        <div class="column">
            <form action="" method="post">
                <h2>Register now</h2>

                <p>Enter your information to register for the workshop.</p>




                <div class="input-container">

                    <input class="input-field" type="text" id="validationServer01" placeholder="First name" required>
                </div>

                <div class="input-container">

                    <input class="input-field" type="text" id="validationServer02" placeholder="Last name" required>
                </div>

                <div class="input-container">

                    <input   class="input-field" type="email" id="validationServer03" placeholder="Email" required>
                </div>


                Select Day:
                <div class="input-container">

                    <select class="input-field" required>

                        <option selected disabled value="">Choose a day</option>

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
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>


                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-yahoo"></a>




                <button type="submit" class="btn">Register</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
