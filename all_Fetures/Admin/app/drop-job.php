<?php
require '../../constants/db_config.php';
// require '../constants/check-login.php';
if (isset($_GET['id'])) 

$job_id = $_GET['id'];  
// $job_id = $_GET['id'];

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT company FROM tbl_jobs WHERE company = '$job_id'");
$stmt->execute();
$result = $stmt->fetch();
$rec = $result;


try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("DELETE FROM tbl_jobs WHERE job_id= :jobid");
$stmt->bindParam(':jobid', $job_id);
$stmt->execute();

$stmt = $conn->prepare("DELETE FROM tbl_job_application WHERE job_id= :jobid");
$stmt->bindParam(':jobid', $job_id);
$stmt->execute();


// header("location:../change-password.php?ref=$myid");	

header("location:../my-jobs.php?ref=$rec");	

// header("location:../my-jobs.php?ref=");	
// header("location:../my-jobs.php?r=0173");					  
}catch(PDOException $e)
{

}
	
?>