<?php   
include_once '../GLOBALS.php';
include_once INCLUDE_PATH . "database.php";

function login($username,$password){
    $hashedpw= md5($password);
    $pw_check = database->query(("SELECT * FROM users WHERE username='".$username."' AND pwd ='".$hashedpw."';"));
    $result = $pw_check->fetch_assoc();
    return $result;
}

function register($username,$password,$password2,$email,$agree){
    if($agree!="yes") return false;
    if($password!=$password2) return false;
    $count_check = database->query("SELECT COUNT(*) AS c FROM users WHERE username ='" . $username ."' OR mail='".$email."'");
    $count = $count_check->fetch_row();

    if ($count[0] != "0") return false;
    $hashedpassword = md5($password);
    database->query("INSERT INTO users(username, mail, pwd) VALUES ('".$username."', '".$email."', '".$hashedpassword."');") ;
    return true; 
}
