<?php
require '../../constants/db_config.php';

if(isset($_GET['ref'])){
    $myid = $_GET['ref'];
 
}

$lang_id = $_GET['id'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("DELETE FROM tbl_language WHERE id=:langid AND member_no = '$myid'");
$stmt->bindParam(':langid', $lang_id);
$stmt->execute();
header("location:../qualifications.php?ref=$myid & y=0591");				  
}catch(PDOException $e)
{

}

?>

