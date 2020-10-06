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
<h3></h3>
<form method="get">
    <p>
        <select multiple name="states[]" class="US">
            <optgroup label="American State">
                <option value="New York">New York</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Texas">Texas</option>
                <option value="Ohio">Ohio</option>
                <option value="California">California</option>
                <option value="Washington DC">Washington DC</option>
            </optgroup>
            <optgroup label="Uzbekistan" class="uzbek">
                <option value="Tashkent">Tashkent</option>
                <option value="Samarkand">Samarkand</option>
                <option value="Andijan">Andijan</option>
                <option value="Namangan">Namangan</option>
                <option value="Qashqadaryo">Qashqadaryo</option>
            </optgroup>

        </select>
    </p>
    <p>
        <button type="submit" class="submit">Search</button>
    </p>
</form>
<hr>
<?php
//Get
//Post
//Request
$parms = $_REQUEST;

$state_images = [
    'Washington DC' => 'https://cdn.britannica.com/42/93842-050-295D32A0/US-Capitol-place-meeting-Congress-Washington-DC.jpg',
    'New York' => 'https://www.gannett-cdn.com/media/2018/12/15/USATODAY/usatsports/MotleyFool-TMOT-657f0436-21e9af86.jpg',
    'Pennsylvania' => 'https://cache.marriott.com/marriottassets/destinations/hero/pennsylvania-destination.jpg?interpolation=progressive-bilinear',
    'Texas' => 'https://thumbnails.texastribune.org/dzkF7p-7QTf-XLC38QRZN8Ad2-0=/1200x804/smart/filters:quality(95)/https://static.texastribune.org/media/files/e3bd7a15ff52473c07353a752456373e/Dallas%20Skyline%20iStock%20TT.jpg',
    'California' => 'https://image.cnbcfm.com/api/v1/image/103507103-GettyImages-545799947.jpg?v=1532564151&w=1400&h=950',
    'Ohio' => 'https://cdn.mos.cms.futurecdn.net/Btagd5wWqVE7LQu8TKCDJ8.jpg',
    'Tashkent' => 'https://image.shutterstock.com/image-photo/tashkent-uzbekistan-30-october-2019-260nw-1568984092.jpg',
    'Samarkand' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQlU38MImK41lGC1-eGqYiqknKBzzjqgAM2WQ&usqp=CAU',
    'Andijan' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRR6atDaiWbaywuCOxRPAbqkYBGKTU-_76hvw&usqp=CAU',
    'Namangan' => 'https://storage.kun.uz/source/4/WspvaNBYUZ-Do_8ukkMjZ5SaYWX06wpR.jpg',
    'Qashqadaryo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRyY0IbTqAmzZyO05tU6dIU2gbFOL7_3CrbBw&usqp=CAU',
    '' => 'https://cdn.mos.cms.futurecdn.net/Btagd5wWqVE7LQu8TKCDJ8.jpg',
    ];
$states = $parms['states']??[];
?>

<table class="table table-bordered">
    <tr>
        <th><h2>ID</h2></th>
        <th><h2>State Name</h2></th>
        <th><h2>Image</h2></th>
    </tr>
    <?php
    foreach ($states as $id=>$state){
       $id++;
        ?>
        <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $state;?></td>
            <td><img class="state" src="<?php echo $state_images[$state]??$state_images['Ohio'];?>"></td>
        </tr>
        <?php
    }
    ?>

</table>
<style>

    body{
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        text-align: center;

    }
    .US{
        color: cyan;
        background-color: rgba(0,0,0,0.6);
    }
    .submit{
       background-color: rgba(0,0,0,0.4);
        color: white;
    }
    .submit:hover{
        background-color: rgba(0,0,0,0.5);
        color: black;
    }
    .state{
        width: 355px;
        height: 255px;
        background: rgba(0,0,0,0.2);
        padding: 2px;
    }
    .state:hover{
        background-color: rgba(0,0,0,0.4);
        color: #f4f0f0;
    }

    .uzbek{
        color: greenyellow;
        background-color: rgba(0,0,0,0.2);
    }


</style>
</body>
</html>