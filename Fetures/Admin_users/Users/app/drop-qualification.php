<?php
require '../../constants/db_config.php';

if(isset($_GET['ref'])){
    $myid = $_GET['ref'];
 
}
$cert_id =  $_GET['id'];

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("DELETE FROM tbl_professional_qualification WHERE id= :certid AND member_no = '$myid'");
    $stmt->bindParam(':certid', $cert_id);
    $stmt->execute();
	header("location:../qualifications.php?ref=$myid & r=0521");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
?>

