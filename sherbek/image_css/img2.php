<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 8px 8px 0 rgba(0,0,0,0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back {
            background-color: #2980b9;
            color: white;
            transform: rotateY(180deg);

        }
    </style>
</head>
<body>

<h1>Card Flip with Text</h1>
<h3>Hover over the image below:</h3>

<div class="flip-card">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <img src="https://cdn.vox-cdn.com/thumbor/Oi6jzvQzWetJGlkpwLqlP1L9p28=/0x0:5568x3712/1200x800/filters:focal(2858x720:3748x1610)/cdn.vox-cdn.com/uploads/chorus_image/image/62207705/922984782.jpg.0.jpg" alt="Avatar" style="width:300px;height:300px;">
        </div>
        <div class="flip-card-back">
            <h1>John Doe</h1>
            <p>Architect & Engineer</p>
            <p>We love that guy</p>
        </div>
    </div>
</div>

</body>
</html>


