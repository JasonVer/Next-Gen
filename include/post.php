<?php
session_start();
include_once INCLUDE_PATH ."database.php";

$username=$_SESSION["id"];//$_POST["username"];
$msg=$_POST["description"];


$database->query("INSERT INTO posts(userid, msg) VALUES ('".$username."', '".$msg."');");
