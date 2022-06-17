<!doctype html>
<html lang="en">
<?php 
include '../constants/settings.php'; 
include 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "admin") {
}else{
header("location:../ ");		
}
}else{
header("location:../ ");	//location:../
}
?>

<?php

// $db_host = 'localhost';
// $db_user = 'root';
// $db_pass = "";
// $db_name = 'job_portal';


// $connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

// $sql = "SELECT COUNT(*) FROM tbl_jobs
         
//          ";
//     //  var_dump(($sql));     //this give us the querry details/lines;


// $result = mysqli_query($connect,$sql);
// if($result === false){
//     echo mysqli_errno($connect);
// }
// else{
//     $ramen = mysqli_fetch_all($result,MYSQLI_ASSOC);
//     var_dump($ramen);
// } 

?>

<!-- Header -->
<?php require 'dry_code_forAdmin/header_admin.php'; ?>

		<div class="main-wrapper">
		
		<div class="breadcrumb-wrapper">
			
			<div class="container">
			
				<ol class="breadcrumb-list booking-step">
					<li><a href="../">Job Guider Administrator</a></li>
					<li><span>Profile</span></li>
				</ol>
				
			</div>
			
		</div>

			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">

<!-- ---------------------------Side-Bar part------------------------------- -->
							<div class="GridLex-col-3_sm-4_xs-12"> 
							
                         		<?php require 'dry_code_forAdmin/sidebar.php'; ?> 

							</div>
<!-- ---------------------------Side-Bar Close------------------------------- -->
							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2>Profile</h2>
										<p>Welcome To <span class="text-primary"><?php echo "$compname"; ?></span> Dashabord</p>
										
									</div>
<!-- ---------------------------End Line------------------------------- -->
									<div class="com_user_box">
										<div class="card">
											<div class="card-icon">
												<i class="fa fa-users"></i>
												 
											</div>
											<p >Total Users</p>
											<?php
												require '../constants/db_config.php';
												try {
												$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
												$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						
												$stmt = $conn->prepare("SELECT *
												 						FROM tbl_users");
												$stmt->execute();
												$result = $stmt->fetchAll();
												$x = $result;
												$x = count($result)-1;
												}catch(PDOException $e)
												{

												} ?>
											<h5><?php echo "$x"?></h5>
										</div>
										<div class="card">
											<div class="card-icon">
												<i class="fa fa-briefcase"></i>
												<!-- <i class="fa fa-ellipsis-v"></i> -->
												 
											</div>
											<p >Total number of Company</p>
											<?php
												require '../constants/db_config.php';
												try {
												$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
												$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						
												$stmt = $conn->prepare("SELECT *
												 						FROM tbl_users
																		 WHERE role='employer'");
												$stmt->execute();
												$result = $stmt->fetchAll();
												$x = $result;
												$x = count($result);
												}catch(PDOException $e)
												{

												} ?>
											<h5><?php echo "$x"?></h5>
										</div>
										<div class="card">
											<div class="card-icon">
												<i class="fa fa-user"></i>
												 
											</div>
											<p >Total number of Students</p>
											<?php
												require '../constants/db_config.php';
												try {
												$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
												$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						
												$stmt = $conn->prepare("SELECT *
												 						FROM tbl_users 
																		 WHERE role='employee'");
												$stmt->execute();
												$result = $stmt->fetchAll();
												$x = $result;
												$x = count($result);
												}catch(PDOException $e)
												{

												} ?>
											<h5><?php echo "$x"?></h5>
										</div>
									</div>

									<div class="com_user_box">
										<div class="card">
											<div class="card-icon">
												<i class="fa fa-flag"></i>
													
											</div>
											<p >Total number of Jobs</p>
											<?php
												require '../constants/db_config.php';
												try {
												$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
												$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						
												$stmt = $conn->prepare("SELECT *
												 						FROM tbl_jobs");
																		 
												$stmt->execute();
												$result = $stmt->fetchAll();
												
												$x = count($result);
											
												}catch(PDOException $e)
												{

												} ?>
											<h5><?php echo "$x +" ?></h5>
										</div>
									</div>
									
								










		
<!-- ---------------------------End Line------------------------------- -->
									
								</div>

							</div>
							
							
						</div>
						

					</div>

				</div>
			
			</div>
			

<!-- --------------------------- Footer ------------------------------- -->
		
							
							<?php require 'dry_code_forAdmin/footer.php'; ?> 

				
<!-- ---------------------------Footer Close------------------------------- -->
			
		</div>


 
 
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<?php require 'dry_code_forAdmin/jsScript.php'; ?> 

</body>



</html>