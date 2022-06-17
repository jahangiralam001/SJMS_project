<?php
require '../../constants/db_config.php';

if(isset($_GET['ref'])){
    $myid = $_GET['ref'];
 
}
$country  = $_POST['country'];
$course = ucwords($_POST['course']);
$institution = ucwords($_POST['institution']);
$timeframe = ucwords($_POST['timeframe']);
$sid = ($_POST['sid']);
$certificate = addslashes(file_get_contents($_FILES['certificate']['tmp_name']));
$level  = $_POST['level'];

if ($_FILES["certificate"]["size"] > 1000000) {
    header("location:../academic.php?ref=$myid & r=2290");
    }else{
	
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("INSERT INTO tbl_academic_qualification (member_no, country, institution, course, level, timeframe,certificate, sid) 
                        VALUES (:member, :country, :institution, :course, :level, :timeframe,:certificate, :sid)");
$stmt->bindParam(':member', $myid);
$stmt->bindParam(':country', $country);
$stmt->bindParam(':institution', $institution);
$stmt->bindParam(':course', $course);
$stmt->bindParam(':level', $level);
$stmt->bindParam(':timeframe', $timeframe);
$stmt->bindParam(':certificate', $certificate);
$stmt->bindParam(':sid', $sid);
$stmt->execute();
header("location:../academic.php?ref=$myid & r=2303");					  
}catch(PDOException $e)
{

}
}


?>