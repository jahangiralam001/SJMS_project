<!doctype html>
<html lang="en">
<?php 
include '../constants/settings.php'; 
if (isset($_GET['ref'])) 

$company_id = $_GET['ref'];  

 
?>
<!-- Header -->
<?php require 'dry_code/header.php'; ?>

		<div class="main-wrapper">
		
		
		<div class="breadcrumb-wrapper">
			
			<div class="container">
			
				<ol class="breadcrumb-list booking-step">
					<li><a href="../">Job Guider</a></li>
					<li><span>Change Password</span></li>
				</ol>
				
			</div>
			
		</div>

			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							

<!-- ---------------------------Side-Bar part------------------------------- -->
								<div class="GridLex-col-3_sm-4_xs-12"> 
															
									<?php require "dry_code/sidebarfor-changepass.php" ?> 

								</div>
<!-- ---------------------------Side-Bar Close------------------------------- -->

							</div>
							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2>Change Password</h2>
										
									</div>
									
									<form name="frm" class="post-form-wrapper" action="app/new-pass.php?ref=<?php echo "$company_id"?>" method="POST">
								
											<div class="row gap-20">
                                             <?php include 'constants/check_reply.php'; ?>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>New Password</label>
														<input type="password" class="form-control" name="password" required placeholder="Enter your new password">
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Confirm Password</label>
														<input type="password" class="form-control"  name="confirmpassword" required placeholder="Confirm your new password">
													</div>
													
												</div>
												
												<div class="col-sm-12 mt-10">
													<button type="submit" onclick="return check_passwords();" class="btn btn-primary">Update</button>
													<button type="reset" class="btn btn-primary btn-inverse">Cancel</a>
												</div>

											</div>
											
										</form><br>
										
									
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

<script type="text/javascript">
function check_passwords(){
if(frm.password.value == "")
{
	alert("Enter the Password.");
	frm.password.focus(); 
	return false;
}
if((frm.password.value).length < 8)
{
	alert("Password should be minimum 8 characters.");
	frm.password.focus();
	return false;
}

if(frm.confirmpassword.value == "")
{
	alert("Enter the Confirmation Password.");
	return false;
}
if(frm.confirmpassword.value != frm.password.value)
{
	alert("Password confirmation does not match.");
	return false;
}

return true;
}
</script>


<?php require 'dry_code/jsScript.php'; ?> 

</body>



</html>