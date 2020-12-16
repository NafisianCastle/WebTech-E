<?php
session_start();
if ($_SESSION['username'] == "") {
    header("location:adminLogin.php");
}
$_SESSION['username'] = "";
session_destroy();
header("location: adminLogin.php");
