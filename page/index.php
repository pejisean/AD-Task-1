<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Forecast</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="/assets/css/example.css">
</head>
<body>
    <?php
        //Weather Forecast Logic
        $weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
        $temperatures = array();
        for($i=0;$i<7;$i++){
            $temperatures[$i] = rand(-10, 40);
        }

        for($i = 0;$i< count($weekdays);$i++){
            echo "<strong>".$weekdays[$i]."</strong>".$temperatures[$i];
            if($temperatures[$i] < 0){
                //freezing
                echo '❄️🥶';
            }elseif ($temperatures[$i] >= 0 && $temperatures[$i] < 10) {
                // Cold
                echo '🧥🌬️';
            } elseif ($temperatures[$i] >= 10 && $temperatures[$i] < 20) {
                // Cool
                echo '🌤️🙂';
            } elseif ($temperatures[$i] >= 20 && $temperatures[$i] < 25) {
                // Mild/Comfortable
                echo '☀️😌';
            } elseif ($temperatures[$i] >= 25 && $temperatures[$i] < 30) {
                // Warm
                echo '😎🔥';
            } else {
                // Hot (30°C and above)
                echo '🥵🔥☀️';
            }

            echo "<br>";
        }

    ?>
</body>
</html>