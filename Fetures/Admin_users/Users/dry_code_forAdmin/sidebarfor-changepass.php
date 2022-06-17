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
                                        
                                            <a href="index.php" class="btn btn-primary btn-sm btn-inverse"> <i class="fa fa-angle-double-left"></i> Back</a>
                                            
                                        </div>
 
                                        
</div>