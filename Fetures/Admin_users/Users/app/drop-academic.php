<?php
require '../../constants/db_config.php';

if(isset($_GET['ref'])){
    $myid = $_GET['ref'];
 
}
$a_id = $_GET['id'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("DELETE FROM tbl_academic_qualification WHERE id=:a_id AND member_no = '$myid'");
$stmt->bindParam(':a_id', $a_id);
$stmt->execute();
header("location:../academic.php?ref=$myid & r=1521");					  
}catch(PDOException $e)
{

}

?>