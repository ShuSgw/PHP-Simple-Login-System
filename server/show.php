<?php
include("connect.php");

//to show all users
if($_POST["table"] == "showAllUser"){
$result = $db->query("select * from users");
  if ($result) {
    $allUsers = $result-> fetchAll();
    foreach ($allUsers as $id=>$row) {
      echo "<div class = 'users' >";
      echo "<div>" .$row["email"] ."</div>";
      echo "<div>" .$row["password"] ."</div>";
      echo "<div>" .$row["display_name"] ."</div>";
      echo "<div>" .$row["bio"] ."</div>";
      echo "<img width='50px' height='50px'src=" ."'" . $row["avatar"] ."'" . "</input>";
      echo "</div>";
    }
  }
}

//to show all posts
if($_POST["table"] == "showPosts"){
  $result = $db->query("select * from posts");

  if ($result) {
    $allPosts = $result-> fetchAll();

    foreach ($allPosts as $id=>$row) {
      echo "<div class = 'post' >";
      echo "<div>" .$row["title"] ."</div>";
      echo "<div>" .$row["message"] ."</div>";
      echo "<div>" .$row["users_id"] ."</div>";
      echo "<a class='edit' href='index.php?p=post_edit&id=" .$row["id"]."'" .">Edit</a>";
      echo "<a class='edit' href='index.php?p=post_display&id=" .$row["id"]."'" .">Delete</a>";
      echo "</div>";
    }
  }
}
?>