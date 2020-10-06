<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>

<div id="chess">

<?php

$row = 8;
$col = 8;
$count = 0;
$class_name = 'odd_number';
echo "<table class='table table-bordered'>";
for ($rows=1; $rows<=$row; $rows++){
    echo "<tr>";
    for ($cols=1; $cols<=$col; $cols++){
        $count++;

        if ($rows%2!==0){
            if ($cols%2===0) {
                $class_name = "even_cell";
            }else{
                $class_name = "odd_cell";
            }
        }else{
            if ($cols%2!==0) {
                $class_name = "even_cell";
            }else{
                $class_name = "odd_cell";
            }
        }


        echo "<td class='$class_name'><img class='figures' src='https://i.etsystatic.com/9385469/r/il/e9118d/624772595/il_794xN.624772595_jvbe.jpg'> </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</div>

<style>
    #chess{
        width: 700px;
        margin: 180px auto;
        border: 2px solid red;
    }
    .figures{
        width: 20px;
        height: 24px;
    }
    .even_cell{
        background-color: black;
        color: white;
        text-align: center;
    }
    .even_cell:hover{
        background-color: #bbbbbb;
        cursor: auto;
    }
    .odd_cell{
        background-color: #ffffff;
        color: black;
        text-align: center;
    }
    .odd_cell:hover{
        background-color: #999999;
        cursor: auto;
    }
</style>
</body>
</html>



