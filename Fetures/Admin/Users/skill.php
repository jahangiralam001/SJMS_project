

						
						<!-- <div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper"> -->

                                <div class="admin-section-title">
									
                                    <h2>Skills</h2>
                
                                    
                                </div>
                                
                                <div class="resume-list-wrapper">
                                <?php require 'constants/check_reply5.php'; ?>
                                <?php
                                require '../constants/db_config.php';
                                try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $stmt = $conn->prepare("SELECT * FROM tbl_skill WHERE member_no = '$myid' ORDER BY id LIMIT $page1,5");
                                $stmt->execute();
                                $result = $stmt->fetchAll();

                                foreach($result as $row)
                                {
                                    ?>
                                        <div class="resume-list-item">
                                    
                                        <div class="row">
                                        
                                            <div class="col-sm-12 col-md-10">
                                            
                                                <div class="content">
                                                
                                                    <a >

                                                        <!-- <div class="image">
                                                        <?php 
                                                        if ($myavatar == null) {
                                                        print '<center><img src="../images/default.jpg" title="'.$myfname.'" alt="image" width="100" height="100" /></center>';
                                                        }else{
                                                        echo '<center><img alt="image" title="'.$myfname.'" width="100" height="100" src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
                                                        }
                                                          ?>
                                                        </div> -->
                                                        
                                                        <h4><?php echo $row['skill']; ?></h4>
                                                        
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12">
                                                                <i class="fa fa-user mr-5"></i> Experience - <strong class="mr-10"><?php echo $row['experience']; ?> Year</strong>
                                                            </div>

                                                        </div>

                                                    </a>
                                                
                                                </div>
                                            
                                            </div>
                                            
                                            <div class="col-sm-12 col-md-2">
                                                
                                                <div class="resume-list-btn">
                                                
                                                    <a data-toggle="modal" href="#edit<?php echo $row['id']; ?>" class="btn btn-primary btn-sm mb-5 mb-0-sm">Edit</a>
                                                    <a href="app/drop-skill.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('Are you sure you want to delete this skill ?')" class="btn btn-primary btn-sm btn-inverse">Delete</a>
                                                    
                                                    <div id="edit<?php echo $row['id']; ?>" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
        
                                                    <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title text-center">Edit - <?php echo $row['skill']; ?></h4>
                                                    </div>
            
                                                    <div class="modal-body">
                                                    <form action="app/update-skill.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                                                    <div class="row gap-20">
                                                    <div class="col-sm-12 col-md-12">
            
                                                    <div class="form-group"> 
                                                    <label>Skill</label>
                                                    <input class="form-control" value="<?php echo $row['skill']; ?>" placeholder="Enter skill" type="text" name="skill" required> 
                                                    </div>
                    
                                                    </div>

                    
                                                    <div class="col-sm-12 col-md-12">
            
                                                    <div class="form-group"> 
                                                    <label>Experience</label>
                                                    <select name="experience" required class="selectpicker show-tick form-control" data-live-search="false">
                                                    <option <?php if ($row ['experience'] == "1 year") { print ' selected '; } ?> value="1 year">1 year</option>
                                                    <option <?php if ($row ['experience'] == "2 year") { print ' selected '; } ?> value="2 year">2 year</option>
                                                    <option <?php if ($row ['experience'] == "3 year") { print ' selected '; } ?> value="3 year">3 year</option>
                                                    <option <?php if ($row ['experience'] == "4 year") { print ' selected '; } ?> value="4 year">4 year</option>
                                                    <option <?php if ($row ['experience'] == "5 year") { print ' selected '; } ?> value="5 year">5 year</option>
                                                     
                                                    </select>
                                                    </div>
                    
                                                   </div>
                    
                                                   
                    
                                                  </div>
                                                  </div>
                                                   <input type="hidden" name="skillid" value="<?php echo $row['id']; ?>">
                                                   <div class="modal-footer text-center">
                                                    <button type="submit" class="btn btn-primary">Update</button>
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
                                $stmt = $conn->prepare("SELECT * FROM tbl_skill WHERE member_no = '$myid' ORDER BY id");
                                $stmt->execute();
                                $result = $stmt->fetchAll();

                                foreach($result as $row)
                                {
                                    $total_records++;
                                    
                                }

                                }catch(PDOException $e)
                                {
 
                                }
                            $records = $total_records/5;
                            $records = ceil($records);
                            if ($records > 1 ) {
                            $prevpage = $page - 1;
                            $nextpage = $page + 1;
                            
                            print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="skill.php?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
                            for ($b=1;$b<=$records;$b++)
                             {
                             
                            ?><li  class="paging-nav"><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?>  href="skill.php?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                             }	
                             print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="skill.php?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
                             }

                            
                            ?>

                                </ul>	
                
                                </div>

                                    
    
                                    
                                </div>

                                <!-- fhhhhhhhhhhhhhhhhhhhhhhhhhhhh -->
                                
                                <div class="mt-30">
                                
                                    <a data-toggle="modal" href="#QualifModals" class="btn btn-primary btn-lg">Add new</a>
                                    
                                </div>
                                <div id="QualifModals" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
        
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                 <h4 class="modal-title text-center">Add Skill</h4>
                                </div>
            
                                <div class="modal-body">
                                <form action="app/add-skill.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                                <div class="row gap-20">
                                <div class="col-sm-12 col-md-12">
            
                                <div class="form-group"> 
                                <label>Skill</label>
                                <input class="form-control" placeholder="Enter Skill" type="text" name="skill" required> 
                                </div>
                    
                                 </div>

                    
                                <div class="col-sm-12 col-md-12">
            
                                <div class="form-group"> 
                                <label>Experience (in Years)</label>
                                <select name="experience" required class="selectpicker show-tick form-control" data-live-search="false">
                                <option value="1 year">1 year</option>
                                <option value="2 year">2 years</option>
                                <option value="3 year">3 years</option>
                                <option value="4 year">4 years</option>
                                <option value="5 year">5 years</option>

                                 
                                </select>
                                </div>
                    
                                 </div>
                    
                            

                                <div class="col-sm-12 col-md-12">
            
                            
                    
                                 </div>
                    
                               </div>
                               </div>
            
                               <div class="modal-footer text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                               <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                               </div>
                               </form>
                               </div>
                                
                            <!-- </div>

                        </div> -->
                        
                    