<!-- <?php

// session_start();
?> -->


<!doctype html>
<html lang="en">
<?php 
include '../constants/settings.php'; 
	?>


<?php
 require '../constants/db_config.php';

 
	//  function taker($id){
	// 	require '../constants/db_config.php';
	// 	// $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// 	// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	// 	// $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE member_no='$id'");
	// 	// $stmt->bindParam(':id',$id);
	// 	// $stmt->execute();
	// 	// $result = $stmt->fetch();
	// 	// echo "$result";
	// 	// return $result;

	// 	$db_host = 'localhost';
	// 	$db_user = 'root';
	// 	$db_pass = "";
	// 	$db_name = 'job_portal';


	// 	$connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

	// 	$sql = "SELECT * FROM tbl_users WHERE member_no='$id'";

	// 	$result = mysqli_query($connect,$sql);
	// 	if($result === false){
	// 		echo mysqli_errno($connect);
	// 	}
	// 	else{
	// 		$x = mysqli_fetch_all($result,MYSQLI_ASSOC);
	// 		// var_dump($ramen);
	// 		return $x;
		 
	// 	} 

		 
	// }
 

  if(isset($_GET['ref'])){
	  $id = $_GET['ref'];
	  
	//   $result = taker($id);
	   
	  
	  
  }
  else{
	  echo "rndddddddddddddddddddddde";
  }
								  
	 try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' AND member_no='$id'");
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach($result as $row)
   {									 
	$compname = $row['first_name'];
	$esta = $row['byear'];
	$mymail = $row['email'];
	$myphone = $row['phone'];
	$city = $row['city'];
	$street = $row['street'];
	$zip = $row['zip'];
	$country = $row['country'];
	$desc = $row['about'];
	$logo = $row['avatar'];
	$myrole = $row['role'];
	$myserv = $row['services'];
	$myex = $row['expertise'];	
	$title = $row['title'];
	$myweb = $row['website'];
	$mypeople = $row['people'];
										
								 
									
     ?>
	<?php
		}
								  
								 
		
 
	                              
	}catch(PDOException $e)
       {

     } ?>
<!-- Header -->
<?php require 'dry_code/header.php'; ?>

		<div class="main-wrapper">
		
		<div class="breadcrumb-wrapper">
			
			<div class="container">
			
				<ol class="breadcrumb-list booking-step">
					<li><a href="../">Job Guider</a></li>
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
							
                         		<?php require 'dry_code/sidebar.php'; ?> 

							</div>
<!-- ---------------------------Side-Bar Close------------------------------- -->
							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">

<!-- <button type="submit" class="btnx btn-primaryx">Delete Acount</button> -->

									
										<h2>Profile</h2>
										<!-- "$compname" -->
										<p>Welcome To <span class="text-primary"><?php echo "$compname" ; ?></span> Dashabord</p>
										
									</div>
									
									<form class="post-form-wrapper" action="app/update-profile.php?ref=<?php echo "$id"?>" method="POST" autocomplete="off">
								
											<div class="row gap-20">
												<?php include 'constants/check_reply.php'; ?>
												<div class="clear"></div>
												
												<div class="col-sm-12 col-md-8">
												
													<div class="form-group">
														<label>Company Name</label>
														<input name="company" placeholder="Enter company name" type="text" class="form-control" value="<?php echo "$compname"; ?>" required>
													</div>
													
												</div>
												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Established In</label>
                                                    <input name="year" placeholder="Enter year eg: 2021, 2022" type="text" class="form-control" value="<?php echo "$esta"; ?>" required>
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Type</label>
                                                    <input class="form-control" placeholder="Eg: IT, Development" name="type" required type="text" value="<?php echo "$title"; ?>" required> 
													</div>
													
												</div>
												
												<div class="clear"></div>

												<div class="form-group">
													
													<div class="col-sm-6 col-md-4">
														<label>People</label>
														<select name="people" required class="selectpicker show-tick form-control mb-15" data-live-search="false">
															<option <?php if ($mypeople == "1-10") { print ' selected '; } ?> value="1-10">1-10</option>
															<option <?php if ($mypeople == "11-100") { print ' selected '; } ?> value="11-100">11-100</option>
															<option <?php if ($mypeople == "200+") { print ' selected '; } ?> value="200+" >200+</option>
															<option <?php if ($mypeople == "300+") { print ' selected '; } ?> value="300+">300+</option>
															<option <?php if ($mypeople == "1000+") { print ' selected '; } ?>value="1000+">1000+ </option>
														</select>
													</div>

													<div class="col-sm-6 col-md-4">
														<label>Website</label>
														<input type="text" class="form-control" value="<?php echo "$myweb"; ?>" name="web" placeholder="Enter your website">
													</div>
														
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>City/town</label>
														<input name="city" required type="text" class="form-control" value="<?php echo "$city"; ?>" placeholder="Enter your city">
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Street</label>
														<input name="street" required type="text" class="form-control" value="<?php echo "$street"; ?>" placeholder="Enter your street">
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Zip Code</label>
														<input name="zip" required type="text" class="form-control" value="<?php echo "$zip"; ?>" placeholder="Enter your zip">
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Country</label>
														<select name="country" required class="selectpicker show-tick form-control" data-live-search="true">
															<option disabled value="">Select</option>
						                                   <?php
														   require '../constants/db_config.php';
														   try {
                                                           $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                                                           $stmt = $conn->prepare("SELECT * FROM tbl_countries ORDER BY country_name");
                                                           $stmt->execute();
                                                           $result = $stmt->fetchAll();
  
                                                           foreach($result as $row)
                                                           {
		                                                    ?> <option <?php if ($country == $row['country_name']) { print ' selected '; } ?> value="<?php echo $row['country_name']; ?>"><?php echo $row['country_name']; ?></option> <?php
	 
	                                                        }

					  
	                                                       }catch(PDOException $e)
                                                           {

                                                           }
	
														   ?>
														</select>
													</div>
													
												</div>

												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Phone Number</label>
														<input type="text" name="phone" required class="form-control" value="<?php echo "$myphone"; ?>" placeholder="Enter your phone">
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Email Address</label>
														<input type="email" name="email" required class="form-control" value="<?php echo "$mymail"; ?>" placeholder="Enter your email">
													</div>
													
												</div>
												


												<div class="clear"></div>
												


												<div class="clear"></div>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group bootstrap3-wysihtml5-wrapper">
														<label><b>Company background</b></label>
														<textarea name="background" class="bootstrap3-wysihtml5 form-control" placeholder="Enter company background ..." style="height: 200px;"><?php echo "$desc"; ?></textarea>
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group bootstrap3-wysihtml5-wrapper">
														<label><b>Services</b></label>
														<textarea name="services" class="bootstrap3-wysihtml5 form-control" placeholder="Enter company services ..." style="height: 200px;"><?php echo "$myserv"; ?></textarea>
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group bootstrap3-wysihtml5-wrapper">
														<label><b>Expertise</b></label>
														<textarea name="expertise" class="bootstrap3-wysihtml5 form-control" placeholder="Enter company expertise ..." style="height: 200px;"><?php echo "$myex"; ?></textarea>
													</div>
													
												</div>
												
												<div class="clear"></div>

												<div class="col-sm-12 mt-10">
													<button type="submit" class="btn btn-primary">Save</button>
													<button type="reset" class="btn btn-warning">Cancel</button>
												</div>

											</div>
											
										</form><br>
										
										<form action="app/new-dp.php?ref=<?php echo "$id"?>" method="POST" enctype="multipart/form-data">
										<div class="row gap-20">
										<div class="col-sm-12 col-md-12">
												
										<div class="form-group bootstrap3-wysihtml5-wrapper">
										<label>Company Logo</label>
										<input accept="image/*" type="file" name="image"  required >
										</div>
													
										</div>
												
										<div class="clear"></div>

										<div class="col-sm-12 mt-10">
										<button type="submit" class="btn btn-primary">Update</button>
										<?php 
										if ($logo == null) {

										}else{
										?><a onclick = "return confirm('Are you sure you want to delete your logo ?')" class="btn btn-primary btn-inverse" href="app/drop-dp.php?ref=<?php echo $id;?>">Delete</a> <?php
										}
										?>
										</div>
										<div class="col-sm-12 mt-25">
											<div class="bottom-footerx">
											<br>
								
											<a onclick = "return confirm('Are you sure you want to delete your account ?')" class="btnx btn-primaryx" href="app/drop-company.php?ref=<?php echo "$id"?>">Delete Account</a>
										


											
											
											<!-- <button type="submit" class="btnx btn-primaryx">Delete Acount</button> -->
												<p>This account will no longer be available, and all your saved data will be permanently deleted.</p>
											</div>

									 
										  
										</div>
										</div>
										</form>

<!-- say one more time please unt</button> -->

									
								</div>

							</div>
							
							
						</div>
						

					</div>

				</div>
			
			</div>
			

<!-- --------------------------- Footer ------------------------------- -->
		
							
							<?php require 'dry_code/footer.php'; ?> 

				
<!-- ---------------------------Footer Close------------------------------- -->
			
		</div>


 
 
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<?php require 'dry_code/jsScript.php'; ?> 

</body>



</html>