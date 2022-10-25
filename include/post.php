<?php
session_start();
include_once "./database.php";

$username=$_SESSION["id"];//$_POST["username"];
$msg=$_POST["description"];


$database->query("INSERT INTO posts(userid, msg) VALUES ('".$username."', '".$msg."');");
