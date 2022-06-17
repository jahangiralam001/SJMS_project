

<div class="admin-sidebar">
										
                                        <div class="admin-user-item">
                                        <div class="image">	
                                        
                                            <?php 
                                            if ($myavatar == null) {
                                            print '<center><img class="img-circle autofit2" src="../images/default.jpg" title="'.$myfname.'" alt="image"  /></center>';
                                            }else{
                                            echo '<center><img class="img-circle autofit2" alt="image" title="'.$myfname.'"  src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
                                            }
                                            ?>
                                            </div>
                                            <br>
                                            
                                            
                                            <h4><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
                                            <p class="user-role"><?php echo "$mytitle"; ?></p>
                                            
                                        </div>
                                        
                                        <div class="admin-user-action text-center">
                                        
                                            <a target="_blank" href="./job-list.php" class="btn btn-primary btn-sm btn-inverse">Apply for job</a>
                                            
                                        </div>
                                        
                                        <ul class="admin-user-menu clearfix">
                                            <li  class="active">
                                                <a href="./"><i class="fa fa-user"></i> Profile</a>
                                            </li>
                                            <li class="">
                                            <a href="change-password.php"><i class="fa fa-key"></i> Change Password</a>
                                            </li>
                                            <li>
                                                <a href="qualifications.php"><i class="fa fa-trophy"></i> Professional Qualifications</a>
                                            </li>
                                            <!-- <li>
                                                <a href="language.php"><i class="fa fa-language"></i> Language Proficiency</a>
                                            </li>
                                            <li>
                                                <a href="training.php"><i class="fa fa-gears"></i> Training & Workshop</a>
                                            </li> -->
    
                                            <li>
                                                <a href="referees.php"><i class="fa fa-users"></i> Referees</a>
                                            </li>
                                            <li>
                                                <a href="academic.php"><i class="fa fa-graduation-cap"></i> Academic Qualifications</a>
                                            </li>
                                            <li>
                                                <a href="experience.php"><i class="fa fa-briefcase"></i> Working Experience</a>
                                            </li>
                                           
                                            <li>
                                                <a href="applied-jobs.php"><i class="fa fa-bookmark"></i> Applied Jobs</a>
                                            </li>
                                             <li>
                                             <!-- <a target="_blank" href="view.php" class="clearfix"><i class="fa fa-eye"></i> View As</a> -->
                                               
                                            </li> 
                                            <li>
                                                <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                            </li>
                                        </ul>
                                        
                                    </div>