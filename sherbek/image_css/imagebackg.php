<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container {
            position: relative;
            width: 50%;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            <!-- bottom: 100%; -->
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }

        .container:hover .overlay {
            height: 100%;

            <!-- bottom: 0; -->
        }

        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Slide in Overlay from the Bottom</h2>
<p>Hover over the image to see the effect.</p>

<div class="container">
    <img src="https://www.w3schools.com/howto/img_forest.jpg" alt="Avatar" class="image">
    <div class="overlay">
        <div class="text">Hello World</div>
    </div>
</div>

</body>
</html>
