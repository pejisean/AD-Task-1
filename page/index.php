<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Forecast</title>
</head>
<body>
    <?php
        //Weather Forecast Logic
        $weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
        $temperatures = array();
        for($i=0;$i<7;$i++){
            $temperatures[$i] = rand(34, 150);
        }

        for($i = 0;$i< count($weekdays);$i++){
            echo "<strong>".$weekdays[$i]."</strong>".$temperatures[$i]."<br>";
        }

    ?>
</body>
</html>