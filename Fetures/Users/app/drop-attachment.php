<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$attid = $_GET['id'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("DELETE FROM tbl_other_attachments WHERE id=:certid AND member_no = '$myid'");
$stmt->bindParam(':certid', $attid);
$stmt->execute();
header("location:../referees.php?a=6784");					  
}catch(PDOException $e)
{

}
	
?>