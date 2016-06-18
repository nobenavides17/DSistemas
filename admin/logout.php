<?php
session_start();
include("log.php");
$log = new Log("log", "log/");
$log->insert("Usuario ".$_SESSION["log"]." cerro sesion", false, false, false);	
session_destroy();	
echo "<script>location.replace('login.php');</script>";
?>
