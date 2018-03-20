<?php
session_start();
$_SESSION = array();
if(!isset($_SESSION['usrnam'])) {
    include_once("Administratorlogin.php");
     exit;}
 session_destroy();
?>
