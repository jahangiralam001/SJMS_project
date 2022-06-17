

<?php
 

  if(isset($_GET['ref'])){
	  $id = $_GET['ref'];
   
  }

  require 'db_config.php';
  try{
     
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' AND member_no='$id'");
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
     }
    }
    catch(PDOException $e){
        
    }
     ?>






<div class="admin-sidebar">
										
										
                                        <div class="admin-user-item for-employer">
                                            
                                            <div class="image">
                                            <?php 
                                            if ( $complogo == null) {
                                            print '<center>Company Logo Here</center>';
                                            }else{
                                            echo '<center><img alt="image" title="'.$compname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode( $complogo).'"/></center>';	
                                            }
                                            ?><br>
                                            </div>
                                            
                                            <h4><?php echo "$compname"; ?></h4>
                                            
                                        </div>
                                        
                                        <div class="admin-user-action text-center">
                                        
                                            <a href="post-job.php" class="btn btn-primary btn-sm btn-inverse">Post a Job</a>
                                            
                                        </div>
                                        
                                        <ul class="admin-user-menu clearfix">
                                            <li  class="active">
                                                <a href="./Com_index.php?ref=<?php echo "$cmember_no"; ?>"><i class="fa fa-user"></i> Profile</a>
                                            </li>
                                            <li class="">
                                            <a href="change-password.php?ref=<?php echo "$cmember_no"; ?>"><i class="fa fa-key"></i> Change Password</a>
                                            </li>
                
                                            <li>
                                                <a href="./company.php?ref=<?php echo "$cmember_no"; ?>"><i class="fa fa-briefcase"></i> Company Overview</a>
                                            </li>
                                            <li>
                                                <a href="my-jobs.php?ref=<?php echo "$cmember_no"; ?>"><i class="fa fa-bookmark"></i> Posted Jobs</a>
                                            </li>
                                            <li>
                                                <a href="../"><i class="fa fa-sign-out"></i> Logout</a>
                                            </li>
                                        </ul>
                                        
</div>