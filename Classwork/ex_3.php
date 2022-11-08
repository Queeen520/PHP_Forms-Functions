<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- 

Make a function that will accept 3 parameters, 
which are the grades from Math, Physics and English. 

then make the calculation and print them on the screen. 
Make sure that the variables are numbers.

E.g. If you put the following grades 3, 4, 5 the result should be:
Sum:12
Average: 4

-->

<?php 

function calculateGrade($mathGrade, $physicsGrade, $englishGrade){
    
    $sum = $mathGrade + $physicsGrade + $englishGrade;
    
    $average = $sum / 3;

    echo "Your grade is ".$average;
}

calculateGrade(3,4,5);

?>
</body>
</html>