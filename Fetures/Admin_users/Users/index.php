<!doctype html>
<html lang="en">
<?php 
include '../constants/settings.php'; 
	?>


<?php
 require '../constants/db_config.php';

 

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
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employee' AND member_no='$id'");
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach($result as $row)
   {									 

		$myfname = $row['first_name'];
		$mylname = $row['last_name'];
		$mygender =$row['gender'];
		$myemail = $row['email'];
		$mydate = $row['bdate'];
		$mymonth = $row['bmonth'];
		$myyear = $row['byear'];
		$myphone = $row['phone'];
		$myedu = $row['education'];
		$mytitle = $row['title'];
		$mycity = $row['city'];
		$mystreet =$row['street'];
		$myzip = $row['zip'];
		$mycountry = $row['country'];
		$mydesc = $row['about'];
		$myavatar = $row['avatar'];
	 
		 
										
								 
									
     ?>
	<?php
		}
								  
								 
		
 
	                              
	}catch(PDOException $e)
       {

     } ?>
<!-- Header -->
<?php require 'dry_code_forAdmin/header.php'; ?>
<style>
  
  .autofit2 {
  height:80px;
  width:100px;
  object-fit:cover; 
}

</style>

		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="../">User</a></li>
						<li><span>Profile</span></li>
					</ol>
					
				</div>
				
			</div>

			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							
<!-- ---------------------------Side-Bar part------------------------------- -->
							
							<?php require 'dry_code/sidebar.php'; ?> 

					   </div>
<!-- ---------------------------Side-Bar Close------------------------------- -->

							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2>Profile</h2>
										<p>Welcome To <span class="text-primary"><?php echo "$myfname"; ?></span>'s Dashabord</p>
										
									</div>
									
									<form class="post-form-wrapper" action="app/update-profile.php?ref=<?php echo "$id"?>" method="POST" autocomplete="off">
								
											<div class="row gap-20">
											<?php require 'constants/check_reply.php'; ?>

												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>First Name</label>
														<input name="fname" required type="text" class="form-control" value="<?php echo "$myfname"; ?>" placeholder="Enter your first name">
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Last Name</label>
														<input name="lname" required type="text" class="form-control" value="<?php echo "$mylname"; ?>" placeholder="Enter your last name">
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Born</label>
														<div class="row gap-5">
															<div class="col-xs-3 col-sm-3">
																<select name="date" required class="selectpicker form-control" data-live-search="false">
																	<option disabled value="">day</option>
                                                                     <?php 
                                                                      $x = 1; 

                                                                      while($x <= 31) {
                                         
												                      if ($x < 10) {
														              $x = "0$x";
													                  print '<option '; if ($mydate == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
													                  }else{
													                  print '<option '; if ($mydate == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
													                  }
                                                                      $x++;
                                                                       } 
                                                                     ?>
																</select>
															</div>
															<div class="col-xs-5 col-sm-5">
																<select name="month" required class="selectpicker form-control" data-live-search="false">
                                                                     <?php 
                                                                      $x = 1; 

                                                                      while($x <= 12) {
                                         
												                      if ($x < 10) {
														              $x = "0$x";
													                  print '<option '; if ($mymonth == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
													                  }else{
													                  print '<option '; if ($mymonth == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
													                  }
                                                                      $x++;
                                                                       } 
                                                                     ?>
																</select>
															</div>
															<div class="col-xs-4 col-sm-4">
																<select name="year" class="selectpicker form-control" data-live-search="false">
													            <?php 
                                                                 $x = date('Y'); 
                                                                 $yr = 60;
													             $y2 = $x - $yr;
                                                                 while($x > $y2) {
                                         
													             print '<option '; if ($myyear == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
                                                                 $x = $x - 1;
                                                                  } 
                                                                  ?>
																</select>
															</div>
														</div>
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Email</label>
														<input type="email" name="email" required class="form-control" value="<?php echo "$myemail"; ?>" placeholder="Enter your email address">
													</div>
													
												</div>
												
												<div class="clear"></div>

												<div class="form-group">
												
													<div class="col-sm-12">
														<label>Education Level</label>
													</div>
													
													<div class="col-sm-6 col-md-4">
                                                    <input value="<?php echo "$myedu"; ?>" name="education" type="text" required class="form-control" placeholder="Eg: Diploma, Degree...etc">
													</div>
													
													<div class="col-sm-6 col-md-4">
														<input value="<?php echo "$mytitle"; ?>" name="title" required type="text" class="form-control mb-15" placeholder="Eg: Computer Science, IT...etc">
													</div>
														
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Gender</label>
														<select name="gender" required class="selectpicker show-tick form-control" data-live-search="false">
															<option disabled value="">Select</option>
															<option <?php if ($mygender == "Male") { print ' selected '; } ?> value="Male">Male</option>
															<option <?php if ($mygender == "Female") { print ' selected '; } ?>value="Female">Female</option>
														</select>
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>City/town</label>
														<input name="city" required type="text" class="form-control" value="<?php echo "$mycity"; ?>">
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Street</label>
														<input name="street" required type="text" class="form-control" value="<?php echo "$mystreet"; ?>">
													</div>
													
												</div>
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Zip Code</label>
														<input name="zip" required type="text" class="form-control" value="<?php echo "$myzip"; ?>">
													</div>
													
												</div>

												<div class="clear"></div>
												

												
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
		                                                    ?> <option <?php if ($mycountry == $row['country_name']) { print ' selected '; } ?> value="<?php echo $row['country_name']; ?>"><?php echo $row['country_name']; ?></option> <?php
	 
	                                                        }

					  
	                                                       }catch(PDOException $e)
                                                           {

                                                           }
	
														   ?>
														</select>
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Phone Number</label>
														<input type="text" name="phone" required class="form-control" value="<?php echo "$myphone"; ?>">
													</div>
													
												</div>

												


												<div class="clear"></div>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group bootstrap3-wysihtml5-wrapper">
														<label>About me</label>
														<textarea name="about" class="bootstrap3-wysihtml5 form-control" placeholder="Enter your short description ..." style="height: 200px;"><?php echo "$mydesc"; ?></textarea>
													</div>
													
												</div>
												
												<div class="clear"></div>

												<div class="col-sm-12 mt-10">
													<button type="submit" class="btn btn-primary">Update</button>
													<button type="reset" class="btn btn-primary btn-inverse">Cancel</button>
												</div>

											</div>
											
										</form><br>
										
										<form action="app/new-dp.php?ref=<?php echo "$id"?>" method="POST" enctype="multipart/form-data">
										<div class="row gap-20">
										<div class="col-sm-12 col-md-12">
												
										<div class="form-group bootstrap3-wysihtml5-wrapper">
										<label>Display Image</label>
										<input accept="image/*" type="file" name="image"  required >
										</div>
													
										</div>
												
										<div class="clear"></div>

										<div class="col-sm-12 mt-10">
										<button type="submit" class="btn btn-primary">Update</button>
										<?php 
										if ($myavatar == null) {

										}else{
										?><a onclick = "return confirm('Are you sure you want to delete your avatar ?')" class="btn btn-primary btn-inverse" href="app/drop-dp.php">Delete</a> <?php
										}
										?>
										</div>
										<div class="col-sm-12 mt-25">
											<div class="bottom-footerx">
											<br>
								
											<a onclick = "return confirm('Are you sure you want to delete your account ?')" class="btnx btn-primaryx" href="app/drop-Users.php?ref=<?php echo "$id"?>">Delete Account</a>
										


											
											
											<!-- <button type="submit" class="btnx btn-primaryx">Delete Acount</button> -->
												<p>This account will no longer be available, and all your saved data will be permanently deleted.</p>
											</div>

									 
										  
										</div>
										</div>
										</form>
									
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
</div>


 
 
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<?php require 'dry_code/jsScript.php'; ?> 

</body>



</html>