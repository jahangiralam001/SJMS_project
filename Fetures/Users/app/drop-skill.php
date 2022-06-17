<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$skill_id = $_GET['id'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("DELETE FROM tbl_skill WHERE id=:skillid AND member_no = '$myid'");
$stmt->bindParam(':skillid', $skill_id);
$stmt->execute();
header("location:../qualifications.php?s=2649");				  
}catch(PDOException $e)
{

}

?>

