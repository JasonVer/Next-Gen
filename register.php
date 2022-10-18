<?php
print_r($_POST);
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$password2=$_POST["password2"];
$agree=$_POST["agree"];


if ($agree != "yes"){
    header('Location: ./test.php');


}

if($password===$password2){}

//database checken op entry,  equal stuurt terug
//testing git commit



$hashedpassword = md5($password);
echo($hashedpassword);

