<?php 
//Create a function that will return the number of minutes, in hours and minutes. 
//The function should accept only one argument.

//E.g. If we call the function and pass the number of minutes 200 
//we should get the message "200 minutes = 3 hour(s) and 20 minute(s)."

function convertMinutes($min) {

    $hours = intdiv($min, 60)." "."hours"." ".($min % 60)." "."minutes";
    return $min." minutes = ".$hours;
}

$returnOutput = convertMinutes(500);
?>

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
echo "<h2>".$returnOutput."</h2>";
?>

</body>
</html>