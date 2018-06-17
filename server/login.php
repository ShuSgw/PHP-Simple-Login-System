<?php
include("connect.php");
$email = $_POST["email"];
$password = $_POST["password"];
$result = $db->query("select * from users where email='$email' and password='$password'");
if ($result) {
    $myuser=$result->fetchAll();
    var_dump($myuser);
    if(count($myuser) > 0){
        session_start();
        $_SESSION["id"] = $myuser[0]["id"];
        $_SESSION["display_name"] = $myuser[0]["display_name"];
        echo "Yes You've logged in";
    }else{
        echo "Get out you bum";
    }
}else{
    echo "something went wrong";
}
?>