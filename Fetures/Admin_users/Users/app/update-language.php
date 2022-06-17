<?php
require '../../constants/db_config.php';

if(isset($_GET['ref'])){
    $myid = $_GET['ref'];
 
}
$language = ucwords($_POST['language']);
$read = ucwords($_POST['read']);
$speak = ucwords($_POST['speak']);
$write = ucwords($_POST['write']);
$lang = $_POST['langid'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("UPDATE tbl_language SET language = :language, speak = :speak, reading = :reading, writing = :writing WHERE id= :langid AND member_no = '$myid'");
$stmt->bindParam(':language', $language);
$stmt->bindParam(':speak', $speak);
$stmt->bindParam(':reading', $read);
$stmt->bindParam(':writing', $write);
$stmt->bindParam(':langid', $lang);
$stmt->execute();
					
header("location:../qualifications.php?ref=$myid & y=8763");
					
}catch(PDOException $e)
{

}
	
?>