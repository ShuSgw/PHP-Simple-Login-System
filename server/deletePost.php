<?php
// include("connect.php");

if ( isset ( $_POST["id"] ) ) {
    include("connect.php");
    $id = $_POST['id'];
    $result = $db->query("DELETE FROM posts WHERE id=$id");
    if($result){
        echo "DELETE SUCCESS!!";
    }
}
?>