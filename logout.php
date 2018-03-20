<?php
session_start();
$_SESSION = array();
if(!isset($_SESSION['usrnam'])) {
     include_once("IOT.html");
     exit; 
}
 session_destroy();
?>
