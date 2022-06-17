<?php
require '../../constants/db_config.php';

if(isset($_GET['ref'])){
    $myid = $_GET['ref'];
 
}

$skill = ucwords($_POST['skill']);
$experience = ucwords($_POST['experience']);


try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("INSERT INTO tbl_skill (skill,experience,member_no) VALUES (:skill, :experience,:member)");

$stmt->bindParam(':skill', $skill);
$stmt->bindParam(':experience', $experience);
$stmt->bindParam(':member', $myid);
$stmt->execute();
 header("location:../qualifications.php?ref=$myid & s=2648");					  
}catch(PDOException $e)
{

}
	

?>