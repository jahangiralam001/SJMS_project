<?php
require '../../constants/db_config.php';

if(isset($_GET['ref'])){
    $myid = $_GET['ref'];
 
}
$skill = ucwords($_POST['skill']);
$experience = ucwords($_POST['experience']);
$skl = $_POST['skillid'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("UPDATE tbl_skill SET skill = :skill, experience = :experience WHERE id= :skillid AND member_no = '$myid'");
$stmt->bindParam(':skill', $skill);
$stmt->bindParam(':experience', $experience);
$stmt->bindParam(':skillid', $skl);
$stmt->execute();
					
header("location:../qualifications.php?ref=$myid & s=2650");
					
}catch(PDOException $e)
{

}
	
?>