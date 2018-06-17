<?php
session_start();
include("header.php");
if(isset($_SESSION["id"])){
    include("partials/menu.html");
    if(isset($_GET["p"])){
        include("partials/".$_GET['p'].".html");
    }
}else{
    if(isset($_GET["p"])){
        if(($_GET["p"]) == 2){
            include("partials/register.html");
        }else{
            include("partials/login.html");
        }
    }else{
        include("partials/login.html");
    }
}
// include("partials/gallery.html");
// include("partials/register.html");
include("footer.php");
?>

