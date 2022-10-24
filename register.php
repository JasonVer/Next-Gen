<?php
include_once "./database.php";
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$password2=$_POST["password2"];
$agree=$_POST["agree"];

if ($agree != "yes"){
    header('Location: ./test.php');


}

if($password===$password2){}
$count_check = $database->query("SELECT COUNT(*) AS c FROM users WHERE username ='" . $username ."' OR mail='".$email."'");
$count = $count_check->fetch_row();

if ($count[0] != "0")
    die("Nope");

//database checken op entry,  equal stuurt terug
//testing git commit



$hashedpassword = md5($password);
$database->query("INSERT INTO users(username, mail, pwd) VALUES ('".$username."', '".$email."', '".$hashedpassword."');");

header('Location: ./test.php');
