<?php
if (isset($_GET['ref'])) 

$company_id = $_GET['ref'];  

require 'db_config.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' AND member_no='$company_id'");
     $stmt->execute();
     $result = $stmt->fetchAll();
     foreach($result as $row)
    {									 
     $compname = $row['first_name'];
     $logo = $row['avatar'];
                                  

         }
                                
     }catch(PDOException $e)
        {
 
      } 
      
?>




<div class="admin-sidebar">
										
										
                                        <div class="admin-user-item for-employer">
                                            
                                            <div class="image">
                                            <?php 
                                            if ($logo == null) {
                                            print '<center>Company Logo Here</center>';
                                            }else{
                                            echo '<center><img alt="image" title="'.$compname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($logo).'"/></center>';	
                                            }
                                            ?><br>
                                            </div>
                                            
                                            <h4><?php echo "$compname"; ?></h4>
                                            
                                        </div>
                                        
                                        <div class="admin-user-action text-center">
                                        
                                            <a href="Com_index.php?ref=<?php echo $company_id;?>" class="btn btn-primary btn-sm btn-inverse"> <i class="fa fa-angle-double-left"></i> Back</a>
                                            
                                        </div>
 
                                        
</div>