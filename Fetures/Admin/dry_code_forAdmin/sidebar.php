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
                                        
                                            <a href="#" class="btn btn-primary btn-sm btn-inverse">Administrator</a>
                                            
                                        </div>
                                        
                                        <ul class="admin-user-menu clearfix">
                                            <li  class="active">
                                                <a href="./"><i class="fa fa-user-plus"></i> Profile</a>
                                            </li>
                                            <li class="">
                                            <a href="#"><i class="fa fa-key"></i> Notifications</a>
                                            </li>
                
                                            <li>
                                                <a href="./company_overview.php"><i class="fa fa-briefcase"></i> Company Overview</a>
                                            </li>
                                            <li>
                                                <a href="./students_overview.php"><i class="fa fa-user"></i> Students Overview</a>
                                            </li>
                                            <li>
                                                <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                            </li>
                                        </ul>
                                        
</div>