<!doctype html>
<html lang="en">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employee") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*5)-5;
}					
}else{
$page1 = 0;
$page = 1;	
}
?>
<!-- Header -->
<?php require 'dry_code/header.php'; ?>
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
						<li><span>Academic Qualifications</span></li>
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
									
										<h2>Academic Qualifications</h2>
					
										
									</div>
									
									<div class="resume-list-wrapper">
									<?php require 'constants/check_reply.php'; ?>
									<?php
									require '../constants/db_config.php';
									
									try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT * FROM tbl_academic_qualification WHERE member_no = '$myid' ORDER BY id LIMIT $page1,5");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();
                                    foreach($result as $row)
                                    {
		                             $ccountry = $row['country'];
									 $institution = $row['institution'];
									 $course = $row['course'];
									 $timeframe = $row['timeframe'];
									 $sid = $row['sid'];
									 $level = $row['level'];
									 
									 ?>
										<div class="resume-list-item">
										
											<div class="row">
											
												<div class="col-sm-12 col-md-10">
												
													<div class="content">
													
												
															
															<h4><?php echo $row['course']; ?></h4>
															<h6>Student ID : <?php echo $row['sid']; ?></h6>
															
															<div class="row">
																<div class="col-sm-12 col-md-9">
																	<i class="fa fa-graduation-cap text-primary mr-5"></i><strong class="mr-10"><?php echo $row['institution']; ?></strong> <i class="fa fa-map-marker text-primary mr-5"></i> <?php echo $row['country']; ?>.
																</div>
																<div class="col-sm-12 col-md-3 mt-10-sm">
																 <h6><i class="fa fa-calendar  text-primary mr-5"></i> Passing Year : <?php echo $row['timeframe']; ?> </h6>   
																</div>
															</div>

														</a>
													
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-2">
													
													<div class="resume-list-btn">
														<a data-toggle="modal" href="#edit<?php echo $row['id']; ?>" class="btn btn-primary btn-sm mb-5 mb-0-sm">Edit</a>
									<a href="app/drop-academic.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('Are you sure you want to delete this qualification ?')" class="btn btn-primary btn-sm btn-inverse">Delete</a>
									<div id="edit<?php echo $row['id']; ?>" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				                    <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                 <h4 class="modal-title text-center">Edit Qualifications</h4>
				                    </div>
				
				                    <div class="modal-body">
									<form action="app/update-academic-qualification.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                <div class="row gap-20">
									<div class="col-sm-12 col-md-12">
												
									<div class="form-group">
									<label>Degree Type</label>
									<select name="level" required class="selectpicker show-tick form-control" data-live-search="false">
									<option disabled value="">Select</option>
									<option <?php if ($level == "Bachelors Degree") { print ' selected '; } ?>  value="Bachelors Degree">Bachelors Degree</option>
									<option <?php if ($level == "Primary O Levels or equivalent") { print ' selected '; } ?> value="Primary O Levels or equivalent">Primary O Levels or equivalent</option>
                                    <option <?php if ($level == "A Levels") { print ' selected '; } ?>  value="A Levels">A Levels</option>
                                    <option <?php if ($level == "Professional Certifications") { print ' selected '; } ?>  value="Professional Certifications">Professional Certifications</option>
                                    <option <?php if ($level == "Degree/Advance Deploma") { print ' selected '; } ?>  value="Degree/Advance Deploma">Degree/Advance Deploma</option>
                                    <option <?php if ($level == "Master Degree") { print ' selected '; } ?>  value="Master Degree">Master Degree</option>
                                    <option <?php if ($level == "Postgraduate Diploma") { print ' selected '; } ?>  value="Postgraduate Diploma">Postgraduate Diploma</option>
                                    <option <?php if ($level == "Ph.D/Doctrate") { print ' selected '; } ?>  value="Ph.D/Doctrate">Ph.D/Doctrate</option>
                                    <option <?php if ($level == "Post Graduate Diploma") { print ' selected '; } ?>  value="Post Graduate Diploma">Post Graduate Diploma</option>
						         
									</select>
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
														?> <option <?php if ($mycountry == $row['country_name']) { print ' selected '; } ?> value="<?php echo $row['country_name']; ?>"><?php echo $row['country_name']; ?></option> <?php
 
														}

				  
													   }catch(PDOException $e)
													   {

													   }

													   ?>
													</select>
												</div>
												
											</div>

						
						            <div class="col-sm-12 col-md-6">
				
							        <div class="form-group"> 
								    <label>Institution Name</label>
								    <input class="form-control" value="<?php echo "$institution"; ?>" placeholder="Enter institution name" type="text" name="institution" required> 
							        </div>
						
						             </div>
						
						             <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Course Title</label>
								    <input class="form-control" value="<?php echo "$course"; ?>" placeholder="Enter course name" type="text" name="course" required> 
							        </div>
						
						           </div>
								   
								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Year Graduated</label>
								    <input class="form-control" value="<?php echo "$timeframe"; ?>" placeholder="Eg: 2021 To 2022" type="text" name="timeframe" required> 
							        </div>
						
						           </div>

								   <div class="col-sm-12 col-md-6">
						
									<div class="form-group"> 
									<label>Student ID</label>
									<input class="form-control" value="<?php echo "$sid"; ?>" placeholder="Eg: 011201304" type="text" name="sid" required> 
									</div>
			
					  			 </div>

								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Curriculum Vitae (CV) </label>
								    <input class="form-control" accept="application/pdf" type="file" name="certificate"> 
							        </div>
						
						           </div>
								   	<!-- <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Transcript <i>(Leave blank if you dont want to update)</i></label>
								    <input class="form-control" accept="application/pdf" type="file" name="transcript"> 
							        </div>
						
						           </div> -->
						
					               </div>
				                   </div>
				                   
				                   <div class="modal-footer text-center">
				 	               <button type="submit" class="btn btn-primary">Submit</button>
					               <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				                   </div>
				                   </form>
			                       </div>

													</div>
													
	
													
												</div>
												
											</div>
										
										</div>
										
										
										<?php
		
 
	                                }

					  
	                                }catch(PDOException $e)
                                    {
                                 
                                    }

									
									?>

									<div class="pager-wrapper">
								
						            <ul class="pager-list">
								<?php
								$total_records = 0;
								require '../constants/db_config.php';
								try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $stmt = $conn->prepare("SELECT * FROM tbl_academic_qualification WHERE member_no = '$myid' ORDER BY id");
                                $stmt->execute();
                                $result = $stmt->fetchAll();

                                foreach($result as $row)
                                {
		                        $total_records++;
 
                               	}

					  
	                            }catch(PDOException $e)
                                {
                                echo "Connection failed: " . $e->getMessage();
                                }
	
								$records = $total_records/5;
                                $records = ceil($records);
				                if ($records > 1 ) {
								$prevpage = $page - 1;
								$nextpage = $page + 1;
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="academic.php?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li  class="paging-nav" ><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?> href="academic.php?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="academic.php?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
					             }

								
								?>

						            </ul>	
					
					                </div>

										
		
										
									</div>
									
									<div class="mt-30">
									
										<a data-toggle="modal" href="#QualifModal" class="btn btn-primary btn-lg">Add new</a>
										
									</div>
									<div id="QualifModal" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				                    <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                 <h4 class="modal-title text-center">Add academic qualifications</h4>
				                    </div>
				
				                    <div class="modal-body">
									<form action="app/add-academic-qualification.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                <div class="row gap-20">
									<div class="col-sm-12 col-md-12">
												
									<div class="form-group">
									<label>Degree Type</label>
									<select name="level" required class="selectpicker show-tick form-control" data-live-search="false">
									<option disabled value="">Select</option>
									<option value="Bachelors Degree">Bachelors Degree</option>
									<option value="Primary/N/O Levels or equivalent">Primary/N/O Levels or equivalent</option>
                                    <option value="A Levels">A Levels</option>
                                    <option value="Professional Certifications">Professional Certifications</option>
                                  
                                    <option value="Degree/Advance Deploma">Degree/Advance Deploma</option>
                                    <option value="Master Degree">Master Degree</option>
                                    <option value="Postgraduate Diploma">Postgraduate Diploma</option>
                                    <option value="Ph.D/Doctrate">Ph.D/Doctrate</option>
                                    <option value="Post Graduate Diploma">Post Graduate Diploma</option>
						         
									</select>
									</div>
													
									</div>
									
									<div class="col-sm-6 col-md-6">
												
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

						
						            <div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label>Institution Name</label>
								    <input class="form-control" placeholder="Enter institution name" type="text" name="institution" required> 
							        </div>
						
						             </div>
						
						             <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Course Title</label>
								    <input class="form-control" placeholder="Enter course name" type="text" name="course" required> 
							        </div>
						
						           </div>
								   
								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Year Graduated</label>
								    <input class="form-control" placeholder="Eg: 2021 To 2022" type="text" name="timeframe" required> 
							        </div>
						
						           </div>

								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Student ID</label>
									<input class="form-control" placeholder="Eg: 011201304" type="text" name="sid" required> 
							        </div>
						
						           </div>
								   
								    
						       
								   <div class="col-sm-12 col-md-6">
								  
									<div class="form-group"> 
								 
									<label>Add Curriculum vitae (CV)</label>
									<input class="form-control" accept="application/pdf" type="file" name="certificate" required> 
									</div>
						
								</div>
					
						
					         
				                   </div>
				
				                   <div class="modal-footer text-center">
				 	               <button type="submit" class="btn btn-primary">Submit</button>
					               <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				                   </div>
				                   </form>
			                       </div>
									
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