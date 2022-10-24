<?php
$database = new mysqli("127.0.0.1:3306", "root","", "suckit");
if(!$database){
    die("there was an issue connecting to the database!");
}