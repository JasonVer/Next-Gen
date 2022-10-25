<?php
$database = new mysqli("127.0.0.1:3306", "root","", "iamsocial");
//$database = new mysqli("com-linweb710.srv.combell-ops.net:3306", "ID388827_iamsocial","wachtwoordimslab2020", "ID388827_iamsocial");
if(!$database){
    die("there was an issue connecting to the database!");
}