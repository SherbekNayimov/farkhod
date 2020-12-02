<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holiday Templates</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="jon_aka/css/style.css">
    <script src="../jquery-3.5.1.js"></script>
    <script src="jon_aka/js/scripts.js"></script>
</head>
<body>
<div id="holiday_cards">

    <div class="card_body">
        <div id="mymodal" class="modal">
            <h5>Please select the following:</h5>
            <hr>
            <p>
                Do you want to send it now?
                <select id="when_send_card">
                    <option value="-1">SELECT</option>
                    <option value="1">YES</option>
                    <option value="0">NO</option>
                </select>
            </p>
            <p class="pick_date">
                <input id="inp_year" name="year" placeholder="<?php echo date('Y');?>">
                <input id="inp_month" name="month" placeholder="<?php echo date('m');?>">
                <input id="inp_date" name="date" placeholder="<?php echo date('d');?>">
            </p>
            <p class="send_button">
                <button id="btn_send" class="btn btn-success">SEND</button>
            </p>
        </div>
        <!---<div class="img_envelope"><img  src="img/envelope.png"></div> -->
        <div class="mytable"><table class="table">
                <tr><td contenteditable="true" class="td_title">We wish you happy holidays!</td></tr>
                <tr><td contenteditable="true" class="td_person_name">Dear Jessica Smith!</td></tr>
                <tr>
                    <td contenteditable="true" class="td_wish">
                        What is Lorem Ipsum?
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                    </td>
                </tr>
                <tr>
                    <td contenteditable="true" class="td_signature">Jon Toshmatov</td>
                </tr>
            </table></div>
    </div>
    <img class="template" src="img/holiday_cards_template.png">
</div>
</body>
</html>
