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
</head>
<body>
<div class="container-fluid">

    <?php
    $vbox = null;
    for($i=1; $i<100; $i++){
        if ($i%10===0){

            $total = $i + 4;
            $counter = 1;
            for($v=$i; $v<$total; $v++) {
                if ($counter==1){
                    echo "<div class=\"first_box box vbox\">$v</div>";
                }else{
                    echo "<div class=\"box vbox\">$v</div>";
                }
                $counter++;
            }
            echo "<div class='clearfix'></div>";
        }else{
            echo "<div class=\"box other_box\">$i</div>";
        }

    }
    ?>




</div>

<style>
    .other_box{
        background-color: #d7d7d3 !important;
    }
    .first_box{
        background-color: #2e6da4 !important;
    }
    .vbox{
        background-color: red;
        display: inline-block;
        float: left;
    }
    .box{
        width: 40px;
        height: 40px;
        border: 1px solid black;
        padding:2px;
        text-align: center;
        line-height: 35px;
        margin: 10px;
        font-size: larger;
    }
</style>

</body>
</html>

