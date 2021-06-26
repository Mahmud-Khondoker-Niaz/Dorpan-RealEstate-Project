<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/jquery-nestable/jquery.nestable.css"/>
<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			 
		 
			<!-- BEGIN PAGE HEADER-->
			 <div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Site <small>Setup</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
						 
                         <div class="actions">
								<a href="<?php echo site_url("sitesetup/sitesetupedit/".$ID);?>" class="btn default yellow-stripe">
									<i class="fa fa-edit"></i>
									<span class="hidden-480">
										 Edit
									</span>
								</a>
                             
                            
								 
							</div>
							 
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo site_url("home");?>">
								Home
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						 
                        
                        <li>
							<a>
								Site Setup
							</a>
							 
						</li>
                        
                        
                        
                        
						 					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
            
             
              
             
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-sort"></i>Setup Item  &nbsp;  <strong><?php echo $message; ?></strong>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
                                
							 
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
                                                   
                                                   
                                                   
                                     
          <section class="box">
					 
				</section>
                
                 
                <section class="box">
				 
					<div>
                    
                   
 
							<p>
								<label for="menu-title"><strong>Site Name</strong></label>:  <?php echo $SiteName;?>
								
                                 
                                
							</p>
							 
                            <hr />
                            
							
                              
                            
							<p>
								<label for="menu-title"><strong>Home Page Title</strong></label>:  <?php echo $HomePageTitle;?>
								
                                 
                                
							</p>
							 
                            <hr />
                            
                            
                            <p>
								<label for="menu-title"><strong>MetaTag</strong></label>:  <?php echo $MetaTag;?>
								
                                 
                                
							</p>
							 
                            <hr />
                            
                                   
                             
                             
                             <p>
								<label for="menu-title"><strong>MetaDescription</strong></label>:  <?php echo $MetaDescription;?>
								
                                 
                                
							</p>
							 
                            <hr />
							
							
							 
                             <p>
								<label for="menu-title"><strong>SiteContact</strong></label>:  <?php echo $SiteContact;?>
								
                                 
                                
							</p>
							 
                            <hr />
							
							
							 
                             <p>
								<label for="menu-title"><strong>SiteEmail</strong></label>:  <?php echo $SiteEmail;?>
								
                                 
                                
							</p>
							 
                            <hr />
							
                            
                            
                               
                            <p>
								<label for="menu-title"><strong>GoogleAnalytics</strong></label>: <br /> <code style="white-space: pre-wrap;"><?php echo htmlspecialchars($GoogleAnalytics);?></code>
								
                                 
                                
							</p>
							 
                            <hr />
                               
                            
                            <p>
								<label for="menu-title"><strong>SiteBanner</strong></label>: <br /> <img  style="max-width:100%" src="<?php echo $this->config->item('site_url').$SiteBanner;?>" />
								
                                 
                                
							</p>
							 
                            <hr />
                            
                            
                           
                             
                              <p>
								<label for="menu-title"><strong>Logo</strong></label>: <br /> <img  style="max-width:100%"  src="<?php echo $this->config->item('site_url').$Logo;?>" /> 
								
                                 
                                
							</p>
							 
                            <hr />
                            
                             
                              <p>
								<label for="menu-title"><strong>FavIcon</strong></label>: <br /><img   style="max-width:100%" src="<?php echo $this->config->item('site_url').$FavIcon;?>" /> 
								 
								
                                 
                                
							</p>
							 
                            <hr />
                             
                            
                            
						 

					</div>
				</section>
                        
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                    
							 
						</div>
					</div>
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
		 2014 &copy; Website
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
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

    
    
    
    
    
    
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {    
           App.init();
		   
          	
			
			
		   
        });
		
		
	 
		
		
		
		
		
    </script>
<!-- END JAVASCRIPTS -->