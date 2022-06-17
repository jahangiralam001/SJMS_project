<?php
require '../../constants/db_config.php';

if(isset($_GET['ref'])){
    $myid = $_GET['ref'];
 
}
$title = ucwords($_POST['title']);
$issuer = ucwords($_POST['issuer']);
$certificate = addslashes(file_get_contents($_FILES['certificate']['tmp_name']));
$certid = $_POST['attid'];

if ($certificate == "") {
	
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("UPDATE tbl_other_attachments SET title = :title, issuer = :issuer WHERE id=:certid AND member_no = '$myid'");
$stmt->bindParam(':title', $title);
$stmt->bindParam(':issuer', $issuer);
$stmt->bindParam(':certid', $certid);
$stmt->execute();
header("location:../referees.php?ref=$myid & a=7764");					  
}catch(PDOException $e)
{

}
	
}else{
	
if ($_FILES["certificate"]["size"] > 1000000) {
header("location:../referees.php?ref=$myid & a=2290");
}else{
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("UPDATE tbl_other_attachments SET title = :title, issuer = :issuer, attachment = '$certificate' WHERE id=:certid AND member_no = '$myid'");
$stmt->bindParam(':title', $title);
$stmt->bindParam(':issuer', $issuer);
$stmt->bindParam(':certid', $certid);
$stmt->execute();
header("location:../referees.php?ref=$myid & a=7764");					  
}catch(PDOException $e)
{

}

}
	
}

?>