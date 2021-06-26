 
<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				 
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN STYLE CUSTOMIZER -->
				 
				<!-- END STYLE CUSTOMIZER -->
				<!-- BEGIN PAGE HEADER-->
                
                
                
				<div class="row">
					<div class="col-md-12">
                    
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
						Welcome <small>Home Page</small>
						</h3>
						 
					</div>
				</div>
				<!-- END PAGE HEADER-->
                
                
           
                
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
                
                
                
					<div class="col-md-6">
						 
                        
                                         
                                          
                                         
                                         
                                         
                                         
                                         
                         
                                            
                                            
					</div>
                      
                      <div class="col-md-6">
					 
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                   
                     
                    
                    
                    
                    
                    
				</div>
                      
                      
                      
				</div>
				<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->
	</div>
	<!-- END CONTAINER -->
	
        
        <!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			  <?php echo date("Y");?> &copy; <?php echo $site_name;?>
		</div>
		<div class="footer-tools">
			<span class="go-top">
				<i class="fa fa-angle-up"></i>
			</span>
		</div>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->

 
 
 <?php  foreach($javascriptfile as $javascript_file) {?>
   <script src="<?php echo $javascript_file;?>" type="text/javascript"></script>
   <?php }
   
    ?>
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   Index.init();
 
   
 
});
</script>
<!-- END JAVASCRIPTS -->
