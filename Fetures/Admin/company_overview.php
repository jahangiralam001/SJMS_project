<!doctype html>
<html lang="en">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "admin") {
}else{
header("location:../");		//location:../
}
}else{
header(" ");	
}

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*10)-10;
}					
}else{
$page1 = 0;
$page = 1;	
}
?>
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
						<li><a href="../">Admin</a></li>
						<li><span>Company_overview</span></li>
					</ol>
					
				</div>
				
			</div>
		
			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							
								<!-- ---------------------------Side-Bar part------------------------------- -->
							
							<?php require 'dry_code_forAdmin/sidebar.php'; ?> 

</div>
<!-- ---------------------------Side-Bar Close------------------------------- -->

							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2>All Listed Companies</h2>
					
										
									</div>
									
									<div class="resume-list-wrapper">
									
									<?php require 'constants/check_reply.php'; ?>
									<div class="recent-job-wrapper">
								  <?php
                                  require '../constants/db_config.php';

								  
								  
								  try {
                                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                  $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY first_name LIMIT $page1,10");
                                  $stmt->execute();
                                  $result = $stmt->fetchAll();
                                  foreach($result as $row)
                                  {
	
									
									$compname = $row['first_name'];
									$complogo = $row['avatar'];	
									$title    = $row['title'];
									$country = $row['country'];
									$clogin = $row['last_login'];
									$cmember_no = $row['member_no'];
										
								 
									
									?>

							 
									   <a target="_blank" href="Com_index.php?ref=<?php echo "$cmember_no" ?>" class="recent-job-item clearfix">
								<div class="GridLex-grid-middle">
									<div class="GridLex-col-6_xs-12">
										<div class="job-position">
											<div class="image">
											<?php 
										    if ($complogo == null) {
										    print '<center><img class="autofit3" alt="image"  src="images/blank.png"/></center>';
										    }else{
										    echo '<center><img class="autofit3" alt="image" title="'.$compname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
										    }
										     ?>
											</div>
											<div class="content">
												<h4><?php echo "$compname"; ?></h4>
												<p><?php echo "$title"; ?></p>
												
											</div>
										</div>
									</div>
									<div class="GridLex-col-3_xs-8_xss-12 mt-10-xss">
										<div class="job-location">
											<i class="fa fa-map-marker text-primary"></i> <?php echo "$country"; ?>
										</div>
									</div>
									<div class="GridLex-col-3_xs-4_xss-12">
										
										<div class="job-label label label-warning">
											<p>Edit-Access</p>
											</div>
										<p class="font12 block spacing1 font400 text-center"><?php echo "$clogin"; ?></p>
									</div>
								</div>
							</a>
							
							<?php
									}
								  
								 
		
 
	                              
								}catch(PDOException $e)
                                  {

                                  } ?>
	
								  </div>

									<div class="pager-wrapper">
								
						            <ul class="pager-list">
								<?php
								$total_records = 0;
								require '../constants/db_config.php';
								try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY first_name");
                                $stmt->execute();
                                $result = $stmt->fetchAll();
                                foreach($result as $row)
                                {
	                              $total_records++;
	                            }

					  
	                            }catch(PDOException $e)
                                {
                 
                                }
	
								$records = $total_records/10;
                                $records = ceil($records);
				                if ($records > 1 ) {
								$prevpage = $page - 1;
								$nextpage = $page + 1;
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="company_overview?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li  class="paging-nav" ><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?> href="company_overview?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="company_overview?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
					             }

								
								?>

						            </ul>	
					
					                </div>

										
		
										
									</div>
									
									
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
</div>


 
 
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<?php require 'dry_code_forAdmin/jsScript.php'; ?> 

</body>



</html>