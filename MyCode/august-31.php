<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background-color: black;
        }
        .container {
            position: relative;
            width: 50%;
        }

        .image {
            opacity: 1;
            display: block;
            width: 900px;
            height: 700px;
            transition: .5s ease;
            backface-visibility: hidden;

        }

        .middle {
            transition: .8s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 70%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .container:hover .image {
            opacity: 0.8;
        }

        .container:hover .middle {
            opacity: 1;
        }

        .text {

            color: red;
            font-size: 35px;
            padding: 55px 52px;
            width: 455px;
        }
    </style>
</head>
<body>



<div class="container">
    <img src="https://cache.desktopnexus.com/thumbseg/501/501158-bigthumbnail.jpg" alt="Avatar" class="image" >
    <div class="middle">
        <div class="text"></div>

    </div>
</div>

</body>
</html>

