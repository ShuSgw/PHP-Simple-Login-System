<?php
include("connect.php");

if($_POST["table"] == "users"){
  $result = $db->query("insert into users(email, password) values('{$_POST["email"]}', '{$_POST["password"]}');");
}else if($_POST["table"] == "posts"){
  $result = $db->query("insert into posts(title, message, users_id) values('{$_POST["title"]}', '{$_POST["message"]}', '{$_POST["id"]}');");
}else if($_POST["table"] == "editProf"){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $displayName = $_POST["displayName"];
  $message = $_POST["message"];
  session_start();
  $stored_Id = $_SESSION["id"];
   $result = $db->query("UPDATE users SET email='$email', password='$password', display_name='$displayName', bio='$message' WHERE id=$stored_Id");
}
if ($result) {
  echo "success";
}
?>
