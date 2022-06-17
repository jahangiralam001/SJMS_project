<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';

	
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("DELETE FROM tbl_users WHERE member_no='$myid'");
    $stmt->execute();
	
	$stmt = $conn->prepare("SELECT * FROM tbl_users WHERE member_no='$myid'");
    $stmt->execute();
    $result = $stmt->fetchAll();


    session_destroy();
	 header("location:./");
 
	
					  
	}catch(PDOException $e)
    {

    }


?>