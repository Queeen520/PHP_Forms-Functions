<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--Create a PHP script which will accept two parameters from the form (name and surname). 
The user must insert name and surname into the form to get the output: "Welcome Name Surname!" 
otherwise you will output the message: please insert your name, or please insert your surname.-->

<form method="POST">
Name: <input type="text" name="name"/>
Surname: <input type="text" name="surname"/>
<input type="submit" name="submit"/>
</form>

<?php
if(isset($_POST['submit'])) {
    if($_POST["name"] && $_POST["surname"])
    
    echo "<br>Welcome ".$_POST['name']."".$_POST['surname'];

}else{

    echo "<br>Please insert your Full Name!";
}
?>

</body>
</html>