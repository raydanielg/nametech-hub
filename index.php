<?php
date_default_timezone_set("Africa/Dar_es_Salaam");
$time = date("H:i:s");
$date = date("d-m-Y");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Namtech Hub</title>
    <style>
        body {
            background: #0f172a;
            color: white;
            font-family: Arial;
            text-align: center;
            padding-top: 100px;
        }
        .box {
            background: #1e293b;
            padding: 30px;
            margin: auto;
            width: 60%;
            border-radius: 12px;
            box-shadow: 0px 0px 20px #000;
        }
        h1 {
            color: #38bdf8;
        }
        .time {
            color: #a3e635;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>🚀 Namtech Hub Server is Running</h1>
    <p>System successfully deployed on aaPanel VPS</p>
    <p class="time">Date: <?php echo $date; ?> | Time: <?php echo $time; ?></p>
</div>

</body>
</html>