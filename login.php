<?php
session_start();
include_once "./database.php";
include_once "./startup.php";
$username=$_POST["username"];
$password=$_POST["password"];

$hashedpw= md5($password);
$pw_check = $database->query(("SELECT * FROM users WHERE username='".$username."' AND pwd ='".$hashedpw."';"));
$result = $pw_check->fetch_assoc();
var_dump($result);
//$count_check = $database->query("SELECT COUNT(*) AS c FROM users WHERE username ='" . $username ."' OR mail='".$email."'");

if(!$result){
    header('Location: ./index.html');
}
$_SESSION["id"] = $result["id"];
//var_dump($_SESSION);
header('Location: ./FeedPlaceholder.html');