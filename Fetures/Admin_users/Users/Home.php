<!doctype html>
<html lang="en">
<?php 
require '../constants/settings.php'; 
 
?>
<!-- Header -->
<style>
  
  .autofit2 {
  height:100px;
  width:100px;
  object-fit:cover; 
}

</style>
<?php require 'dry_code/header.php'; ?>

		<div class="main-wrapper">
		
			<div class="hero" style="background-image:url('../images/x.jpg');">
				<div class="container">

					<h1>Find your next job, fast.</h1>
					<p>Search by skills. View salaries. One-click apply.</p>

					<div class="main-search-form-wrapper">
					
						<form action="job-list.php" method="GET" autocomplete="off">
					
							<div class="form-holder">
								<div class="row gap-0">
								
									<div class="col-xss-6 col-xs-6 col-sm-6">
										<select class="form-control" name="category" required/>
										<option value="">-Select category-</option>
										 <?php
										 require '../constants/db_config.php';
										 try {
                                         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                                         $stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
                                         $stmt->execute();
                                         $result = $stmt->fetchAll();

                                         foreach($result as $row)
                                         {
                                        ?>
										
										<option style="color:black" value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
										<?php
	                                     }
                                         $stmt->execute();
					  
	                                     }catch(PDOException $e)
                                         {
        
                                         }
	
										?>
														   
										</select>
									</div>
									
									<div class="col-xss-6 col-xs-6 col-sm-6">
										<select class="form-control"  name="country" required/>
										<option value="">-Select country-</option>
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
                                        ?>
										
										<option style="color:black" value="<?php echo $row['country_name']; ?>"><?php echo $row['country_name']; ?></option>
										<?php
	                                     }
                                         $stmt->execute();
					  
	                                     }catch(PDOException $e)
                                         {
               
                                         }
	
										?>

										</select>
									</div>
									
								</div>
							
							</div>
							
							<div class="btn-holder">
								<button name="search" value="✓" type="submit" class="btn"><i class="ion-android-search"></i></button>
							</div>
						
						</form>
						
					</div>

				</div>
				
			</div>

			
			<div class="post-hero bg-light">
			
				<div class="container">

					<div class="process-item-wrapper mt-20">
							
						<div class="row">
						
							<div class="col-sm-4">
								
								<div  style="transition: box-shadow .25s, -webkit-box-shadow .25s;
											padding: 24px;
											margin: .5rem 0 1rem 0;
											border-radius: 2px;
											background-color: #ffffff;
											text-align: center;
											font-size: 14px;
											line-height: 1.5;
											font-family: 'Roboto', 'sans-serif';
											color: rgba(0,0,0,0.87);
											box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);
											padding-bottom:20px;

											
															">

												<div class="icon">
												<i style="color: #fdc94f ; font-size: 7rem;" class="material-icons large teal-text">search</i>
													</div>
							
							<h4 style="font-size: 2.28rem;
										line-height: 110%;
										margin: 1.14rem 0 .912rem 0;
										font-family: 'Roboto', 'sans-serif';
										">
							Search For jobs</h4>
							<p style=" 
									
										font-weight: normal;
										padding-bottom:15px;
										
										">
											We can recommend you jobs based on your previous searches, applications, CV and employment history making your search for the perfect role even easier.</p>
       					   </div>
							
		  
		  <!--sdk sdhflsdkfhdfhpdsohgpiudghdrpsogherghearoghwrgowrhjgwe4otghwearogherog -->
							</div>
							
							<div class="col-sm-4">
							
							<div  style="transition: box-shadow .25s, -webkit-box-shadow .25s;
											padding: 24px;
											margin: .5rem 0 1rem 0;
											border-radius: 2px;
											background-color: #ffffff;
											text-align: center;
											font-size: 14px;
											line-height: 1.5;
											font-family: 'Roboto', 'sans-serif';
											color: rgba(0,0,0,0.87);
											box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);
											padding-bottom:20px;

											
															">

												<div class="icon">
												<i style="color: #fdc94f ; font-size: 7rem;" class="material-icons large teal-text">access_time</i>
													</div>
							
							<h4 style="font-size: 2.28rem;
										line-height: 110%;
										margin: 1.14rem 0 .912rem 0;
										font-family: 'Roboto', 'sans-serif';
										">
							Quick Apply a Job</h4>
							<p style=" 
									
										font-weight: normal;
										padding-bottom:15px;
										
										">
											Quick Apply shows you recommended jobs based off your most recent search and allows you to apply to 25+ jobs in a matter of seconds! Its easily and simple.</p>
       					   </div>

								  <!--sdk ghwearogherog -->
								
							</div>
							
							<div class="col-sm-4">
								
							<div  style="transition: box-shadow .25s, -webkit-box-shadow .25s;
											padding: 24px;
											margin: .5rem 0 1rem 0;
											border-radius: 2px;
											background-color: #ffffff;
											text-align: center;
											font-size: 14px;
											line-height: 1.5;
											font-family: 'Roboto', 'sans-serif';
											color: rgba(0,0,0,0.87);
											box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);
											padding-bottom:30px;

											
															">

												<div class="icon">
												<i style="color: #fdc94f ; font-size: 7rem;" class="material-icons large teal-text">card_travel</i>
													</div>
							
							<h4 style="font-size: 2.28rem;
										line-height: 110%;
										margin: 1.14rem 0 .912rem 0;
										font-family: 'Roboto', 'sans-serif';
										">
							Start Working</h4>
							<p style=" 
									
										font-weight: normal;
										padding-bottom:6px;
										
										">
											Keep track of positions that you're interested in by signing up for job alert emails.When your application will be granted start working.You can apply for multiple jobs</p>
       					   </div>

							  	  <!--sdk sdhflsdkfhdfhpdsohgpiudghdrpsogherghearoghwrgowrhjgwe4otghwearogherog -->
								
							</div>
							
						</div>
					
					</div>
					
				</div>
			
			</div>


			<div class="pt-0 pb-50">
			
				<div class="container">

					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
							
								<br><h5 style="text-align: center; color:#5d677a;font-weight: 400; font-family: 'Roboto', 'sans-serif';">THOUSANDS OF JOBS</h5>
								<h2 style="text-align: center; color:black;font-weight: 400; font-family: 'Montserrat', 'sans-serif';"> 
								<span style="color: #009688 !important;">Top Hiring</span>
								Companies</h2>
								
							</div>
						
						</div>
					
					</div>
					
					<div class="row top-company-wrapper with-bg">

							
					<?php
					require '../constants/db_config.php';
					try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY rand() LIMIT 8");
                    $stmt->execute();
                    $result = $stmt->fetchAll();

                    foreach($result as $row) {
					$complogo = $row['avatar'];
					?>
					<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
							
					<div class="top-company">
					<div class="image">
					<?php 
					if ($complogo == null) {
					print '<center><img class="autofit2" alt="image"  src="images/blank.png"/></center>';
					}else{
					echo '<center><img class="autofit2" alt="image"  src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
					}
					?>
					</div>
					<h6><?php echo $row['first_name'];?></h6>
					<a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">View Company</a>
					</div>
							
					</div>
					<?php
					
                    {

	                }
					  
	                }}catch(PDOException $e)
                    {

                    }
	
					?>
						

						
						
					</div>

				</div>

			</div>
			
			<div class="bg-light pt-80 pb-80">
			
				<div class="container">
				
					<div class="row">
						
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
							<h5 style="text-align: center; color:#5d677a;font-weight: 400; font-family: 'Roboto', 'sans-serif';">Quick Apply For</h5>
							<h2 style="text-align: center; color:black;font-weight: 400; font-family: 'Montserrat', 'sans-serif';"> 
								<span style="color: black">Latest Jobs</span>
								</h2>
								
							</div>
						
						</div>
					
					</div>
					
					<div class="row">
						
						<div class="col-md-12">
						
							<div class="recent-job-wrapper alt-stripe mr-0">
							<?php
							require '../constants/db_config.php';
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM tbl_jobs ORDER BY enc_id DESC LIMIT 8");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
  

                            foreach($result as $row) {
							$jobcity = $row['city'];
							$jobcountry = $row['country'];
							$type = $row['type'];
							$title = $row['title'];
							$closingdate = $row['closing_date'];
							$company_id = $row['company'];
							$post_date = date_format(date_create_from_format('d/m/Y', $closingdate), 'd');
                            $post_month = date_format(date_create_from_format('d/m/Y', $closingdate), 'F');
                            $post_year = date_format(date_create_from_format('d/m/Y', $closingdate), 'Y');
										   
							$stmtb = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$company_id' and role = 'employer'");
                            $stmtb->execute();
                            $resultb = $stmtb->fetchAll();
							foreach($resultb as $rowb) {
							$complogo = $rowb['avatar'];
							$thecompname = $rowb['first_name'];	
								
							}
							
							if ($type == "Freelance") {
							$sta = '<div class="job-label label label-success">
									Freelance
									</div>';
											  
							}
							if ($type == "Part-time") {
							$sta = '<div class="job-label label label-danger">
									Part-time
									</div>';
											  
							}
							if ($type == "Full-time") {
							$sta = '<div class="job-label label label-warning">
									Full-time
									</div>';
											  
							}
							?>
							<a class="recent-job-item clearfix" target="_blank" href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
							<div class="GridLex-grid-middle">
							<div class="GridLex-col-5_xs-12">
							<div class="job-position">
							<div class="image">
							<?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
							</div>
							<div class="content">
							<h4><?php echo "$title"; ?></h4>
							<p><?php echo "$thecompname"; ?></p>
							</div>
							</div>
							</div>
							<div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
							<div class="job-location">
							<i class="fa fa-map-marker text-primary"></i> <?php echo "$jobcountry" ?></strong> - <?php echo "$jobcity" ?>
							</div>
							</div>
							<div class="GridLex-col-2_xs-4_xss-12">
							<?php echo "$sta"; ?>
							<span class="font12 block spacing1 font400 text-center">Due - <?php echo "$post_month"; ?> <?php echo "$post_date"; ?>, <?php echo "$post_year"; ?></span>
							</div>
							</div>
							</a>
								
							<?php

                            }
	                        }catch(PDOException $e)
                            { 
                   
                             }
                             ?>
						



							
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