<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<div id="div1" class="fa"></div>

<script>
    function chargebattery() {
        var a;
        a = document.getElementById("div1");
        a.innerHTML = "&#xf244;1%";
        setTimeout(function () {
            a.innerHTML = "&#xf244;5%";
        }, 1000);

        setTimeout(function () {
            a.innerHTML = "&#xf243;48%";
        }, 15000);

        setTimeout(function () {
            a.innerHTML = "&#xf242;50%";
        }, 16000);


        setTimeout(function () {
            a.innerHTML = "&#xf241;77%";
        }, 24000);

        setTimeout(function () {
            a.innerHTML = "&#xf240;100%";
        }, 32000);



    }
    chargebattery();
    setInterval(chargebattery, 42000);
    

</script>


<style>
    .fa{
        font-size: 100px;
        color: black;


    }


    .qora{
        float: left;
        width: 50px;
        height: 300px;
        background-color: black;
        font-size:25px;
        text-align:center;
        display: table-cell;
        vertical-align:middle;
        color: white;
        box-shadow: 0 6px #999999;

    }
    .qora:active{
        background-color: #111111;
        box-shadow: 0 1px #666666;
        transform: translateY(4px);
    }

    .oq{
        float: left;
        width: 50px;
        height: 300px;
        background-color: white;
        font-size:25px;
        text-align:center;
        display: table-cell;
        vertical-align:middle;
        color: white;
        box-shadow: 0 5px #999999;
        border: 1px solid black;

    }
    .oq:active{
        background-color: white;
        box-shadow: 0 1px #111111;
        transform: translateY(4px);
    }

</style>

<br>
<br>
<br>

<div id="table">
    <div class="qora"></div>
    <div class="oq"></div>
    <div class="qora"></div>
    <div class="oq"></div>
    <div class="qora"></div>
    <div class="oq"></div>
    <div class="qora"></div>
    <div class="oq"></div>
    <div class="qora"></div>
    <div class="oq"></div>
    <div class="qora"></div>
    <div class="oq"></div>
    <div class="qora"></div>
    <div class="oq"></div>
    <div class="qora"></div>
    <div class="oq"></div>
    <div class="qora"></div>
    <div class="oq"></div>
    <div class="qora"></div>
    <div class="oq"></div>
    <div class="qora"></div>


</div>

</body>
</html>
