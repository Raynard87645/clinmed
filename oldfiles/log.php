<?php 
include ('server.php');
if(isset($_SESSION['username'])){
    header('location: logout.php'); }
    else{
        header('location: login.php');
    }

?>