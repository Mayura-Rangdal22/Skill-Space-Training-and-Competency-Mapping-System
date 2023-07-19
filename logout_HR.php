<?php
include 'conn.php';


session_start();
unset($_SESSION["uname"]);
unset($_SESSION["pass"]);
header("Location:login_HR.php");

?>