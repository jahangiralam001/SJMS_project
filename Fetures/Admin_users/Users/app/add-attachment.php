<?php
require '../../constants/db_config.php';

if(isset($_GET['ref'])){
    $myid = $_GET['ref'];
 
}
$title = ucwords($_POST['title']);
$issuer = ucwords($_POST['issuer']);
$certificate = addslashes(file_get_contents($_FILES['certificate']['tmp_name']));

if ($_FILES["certificate"]["size"] > 1000000) {
header("location:../attachments.php?ref=$myid & r=2290");
}else{
	
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("INSERT INTO tbl_other_attachments (member_no, title, issuer, attachment) VALUES ('$myid', :title, :issuer, '$certificate')");
$stmt->bindParam(':title', $title);
$stmt->bindParam(':issuer', $issuer);
$stmt->execute();
header("location:../referees.php?ref=$myid & a=6789");				  
}catch(PDOException $e)
{

}

	
}

?>
