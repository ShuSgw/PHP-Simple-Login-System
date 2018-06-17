<?php
include("connect.php");

if($_POST["table"] == "users"){
  //new users
  $result = $db->query("insert into users(email, password) values('{$_POST["email"]}', '{$_POST["password"]}');");
}else if($_POST["table"] == "posts"){
  //new post
  $result = $db->query("insert into posts(title, message, users_id) values('{$_POST["title"]}', '{$_POST["message"]}', '{$_POST["id"]}');");
}else if($_POST["table"] == "editProf"){
  //edit profile
  $email = $_POST["email"];
  $password = $_POST["password"];
  $displayName = $_POST["displayName"];
  $message = $_POST["message"];
  $avatar = $_POST["avatar"];
  session_start();
  $stored_Id = $_SESSION["id"];
  $result = $db->query("UPDATE users SET email='$email', password='$password', display_name='$displayName', bio='$message' , avatar='$avatar' WHERE id=$stored_Id");
}else if($_POST["table"] == "editPost"){
  //edit post
  $title = $_POST["title"];
  $usersId = $_POST["users_id"];
  $message = $_POST["message"];
  $id = $_POST["id"];
  $result = $db->query("UPDATE posts SET title='$title', users_id='$usersId', message='$message' WHERE id=" .$id .";");
  echo "UPDATE posts SET title='$title', users_id='$usersId', message='$message' WHERE id=" .$id .";";
}
if ($result) {
  echo "success";
}
?>
