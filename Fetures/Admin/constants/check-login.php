<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
$myid = $_SESSION['myid'];
$compname = $_SESSION['compname'];

$mymail = $_SESSION['myemail'];


$logo = $_SESSION['avatar'];
$myrole = $_SESSION['role'];

$user_online = true;	
}else{
$user_online = false;
}
?>