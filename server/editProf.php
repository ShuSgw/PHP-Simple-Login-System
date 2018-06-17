<?php
include("connect.php");
session_start();
$stored_Id = $_SESSION["id"];
$result = $db->query("select * from users where id='$stored_Id'");
if ($result) {
  $alUsers = $result-> fetchAll();
  foreach ($alUsers as $id=>$row) {
    echo "<div class = 'profile'>";
    echo '<input id="email" type="text" placeholder="Email" value=' .'"' . $row["email"] .'"' .'/>';
    echo "<input id='password' type='text' placeholder='password' value=" ."'" . $row["password"] ."'".">";
    echo "<input id='displayName' type='text' placeholder='display_name' value=" ."'" . $row["display_name"] ."'" . "</input>";
    echo "<textarea id='message' rows='4' cols='19'>" . $row["bio"]."</textarea>";
    echo "<input id='avatar' type='text' placeholder='ImageURL' value=" ."'" . $row["avatar"] ."'" . "</input>";
    echo "<div><img width='100px' height='100px'src=" ."'" . $row["avatar"] ."'" . "</input><div>";
    echo '<div id="hello"></div>';
    echo "</div>";
  }

}
?>