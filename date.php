<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "Calendar.php";
    $calender = new Calendar();
    $month = $_POST["month"];
    $day = $_POST["day"];
    $date = $calender->showDay($day,$month);

    echo "วันที่"." ".$day." "."เป็นวัน".$date." "."เดือน"." ".$month;
    ?>
    <h1 id='result'>

</body>

</html>