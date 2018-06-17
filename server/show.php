<?php
include("connect.php");

$result = $db->query("select * from posts");

if ($result) {
  $allPosts = $result-> fetchAll();

  foreach ($allPosts as $id=>$row) {
    echo "<div class = 'post' >";
    echo "<div>" .$row["title"] ."</div>";
    echo "<div>" .$row["message"] ."</div>";
    echo "<div>" .$row["users_id"] ."</div>";
    echo "<a class='edit' href='#'>Edit</a>";
    echo "</div>";
  }

}
?>