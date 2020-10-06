<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
            padding: 20px;
            font-family: Arial;
        }

        /* Center website */
        .main {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            font-size: 50px;
            word-break: break-all;
        }

        .row {
            margin: 8px -16px;
        }

        /* Add padding BETWEEN each column */
        .row,
        .row > .column {
            padding: 8px;
        }

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 25%;
        }

        /* Clear floats after rows */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .content {
            background-color: white;
            padding: 10px;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 900px) {
            .column {
                width: 50%;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

    <h1>MYLOGO.COM</h1>
    <hr>

    <h2>PORTFOLIO</h2>
    <p>Resize the browser window to see the responsive effect.</p>

    <!-- Portfolio Gallery Grid -->
    <div class="row">
        <div class="column">
            <div class="content">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Android_vmc2015.png" alt="Mountains" style="width:100%">
                <h3>My Work</h3>
                <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
            </div>
        </div>
        <div class="column">
            <div class="content">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcREKsQiI-bcx_qfrK4FESEzAu__sjvbKQM2DA&usqp=CAU" alt="Lights" style="width:100%">
                <h3>My Work</h3>
                <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
            </div>
        </div>
        <div class="column">
            <div class="content">
                <img src="https://i.pinimg.com/originals/bf/21/3c/bf213c055e91878b3ce99fbcef7d8c36.png" alt="Nature" style="width:100%">
                <h3>My Work</h3>
                <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
            </div>
        </div>
        <div class="column">
            <div class="content">
                <img src="https://miro.medium.com/max/256/1*d69DKqFDwBZn_23mizMWcQ.png" alt="Mountains" style="width:100%">
                <h3>My Work</h3>
                <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
            </div>
        </div>
        <!-- END GRID -->
    </div>

    <div class="content">
        <img src="https://icons.iconarchive.com/icons/papirus-team/papirus-mimetypes/512/app-vnd.android.package-archive-icon.png" alt="Bear" style="width:100%">
        <h3>Some Other Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>

    <!-- END MAIN -->
</div>

</body>
</html>


