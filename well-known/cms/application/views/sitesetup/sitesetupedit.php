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
								<a href="<?php echo site_url("sitesetup");?>" class="btn default yellow-stripe">
									<i class="fa fa-arrow-left"></i>
									<span class="hidden-480">
										 Back
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
								<i class="fa fa-sort"></i>Setup Item
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
					<!--<h2>Demo</h2>-->
					<div>
						 <strong><?php echo $message; ?></strong>
                         
                        
					</div>
				</section>
                <?php
 
      
 
$SiteName = array(
	'name'	=> 'SiteName',
	'id'	=> 'SiteName',
	'value'	=> $SiteName,
	 
	'size'	=> 100,
);

$HomePageTitle = array(
	'name'	=> 'HomePageTitle',
	'id'	=> 'HomePageTitle',
	'value'	=> $HomePageTitle,
	 
	'size'	=> 100,
);

$MetaTag = array(
	'name'	=> 'MetaTag',
	'id'	=> 'MetaTag',
	'value'	=> $MetaTag,
	 
	'size'	=> 100,
);




$MetaDescription = array(
	'name'	=> 'MetaDescription',
	'id'	=> 'MetaDescription',
	'value'	=> $MetaDescription,
	'cols'	=> 100,
	'rows'	=> 8,
);


$SiteContact = array(
	'name'	=> 'SiteContact',
	'id'	=> 'SiteContact',
	'value'	=> $SiteContact
);


$SiteEmail = array(
	'name'	=> 'SiteEmail',
	'id'	=> 'SiteEmail',
	'value'	=> $SiteEmail
);

$SiteFaceBook = array(
	'name'	=> 'SiteFaceBook',
	'id'	=> 'SiteFaceBook',
	'value'	=> $SiteFaceBook
);


$SiteTwitter = array(
	'name'	=> 'SiteTwitter',
	'id'	=> 'SiteTwitter',
	'value'	=> $SiteTwitter
);

$SiteGooglePlus = array(
	'name'	=> 'SiteGooglePlus',
	'id'	=> 'SiteGooglePlus',
	'value'	=> $SiteGooglePlus
);

$SiteYouTube = array(
	'name'	=> 'SiteYouTube',
	'id'	=> 'SiteYouTube',
	'value'	=> $SiteYouTube
);




$GoogleAnalytics = array(
	'name'	=> 'GoogleAnalytics',
	'id'	=> 'GoogleAnalytics',
	'value'	=> $GoogleAnalytics,
	'cols'	=> 100,
	'rows'	=> 8,
);







?>

		 <section class="box">
					<!--<h2>Demo</h2>-->
					<div>
						 <strong><?php    echo $message; ?></strong>
                         <span style="color: red;"><?php  echo strip_tags(form_error($SiteName['name'])); ?> </span>
                         <span style="color: red;"><?php  echo strip_tags(form_error($HomePageTitle['name'])); ?> </span>
                         <span style="color: red;"><?php  echo strip_tags(form_error($MetaTag['name'])); ?> </span>
                         <span style="color: red;"><?php  echo strip_tags(form_error($MetaDescription['name'])); ?> </span>
                         <span style="color: red;"><?php  echo strip_tags(form_error($GoogleAnalytics['name'])); ?> </span>
                      
					</div>
				</section>
                
                 
                <section class="box">
                
				 
					<div>
                    
                    <?php echo form_open_multipart($this->uri->uri_string()); 
					   
					   echo  form_hidden('ID',$ID);   
 ?> 
 
							<p>
								 
								
                                 <label for="menu-title"><?php echo form_label('Site Name', $SiteName['id']); ?></label>
								<?php echo form_input($SiteName); ?>
                                
							</p>
							 
                            <hr />
                            
							
                              
                            
							<p>
								<label for="menu-url"><?php echo form_label('HomePage Title', $HomePageTitle['id']); ?></label>
								<?php echo form_input($HomePageTitle); ?>
								
                                 
                                
							</p>
							 
                            <hr />
                            
                            
                            <p>
								<label for="menu-class"><?php echo form_label('Meta Tag', $MetaTag['id']); ?></label>
								<?php echo form_input($MetaTag); ?>
								
                                 
                                
							</p>
							 
                            <hr />
                            
                                   
                             
                             
                             <p>
								<label for="menu-class"><?php echo form_label('Meta Description', $MetaDescription['id']); ?></label>
								<?php echo form_textarea($MetaDescription); ?>
                                 
							</p>
                              <hr />
							  
							  
							  
							  
							  
							   <p>
								<label for="menu-class"><?php echo form_label('Site Contact', $SiteContact['id']); ?></label>
								<?php echo form_input($SiteContact); ?>
                                 
							</p>
                              <hr />
							  
							  
							  
							   <p>
								<label for="menu-class"><?php echo form_label('Site Email', $SiteEmail['id']); ?></label>
								<?php echo form_input($SiteEmail); ?>
                                 
							</p>
                              <hr />
							  
							  
							  
							  
							  
							  
							  
							  
							  
							     <p>
								<label for="menu-class"><?php echo form_label('Site FaceBook', $SiteFaceBook['id']); ?></label>
								<?php echo form_input($SiteFaceBook); ?>
                                 
							</p>
                              <hr />
							  
							     <p>
								<label for="menu-class"><?php echo form_label('Site Twitter', $SiteTwitter['id']); ?></label>
								<?php echo form_input($SiteTwitter); ?>
                                 
							</p>
                              <hr />
							  
							  
							     <p>
								<label for="menu-class"><?php echo form_label('Site GooglePlus', $SiteGooglePlus['id']); ?></label>
								<?php echo form_input($SiteGooglePlus); ?>
                                 
							</p>
                              <hr />
							  
							  
							     <p>
								<label for="menu-class"><?php echo form_label('Site YouTube', $SiteYouTube['id']); ?></label>
								<?php echo form_input($SiteYouTube); ?>
                                 
							</p>
                              <hr />
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
                             <p>
								<label for="menu-class"><?php echo form_label('Google Analytics', $GoogleAnalytics['id']); ?></label>
								<?php echo form_textarea($GoogleAnalytics); ?>
                                 
							</p>
                              
                                 <hr /> 
                            
                            <p>
								<label for="menu-class"><?php echo form_label('SiteBanner'); ?></label>
								 
                                <?php echo form_upload(array("name"=>'SiteBanner',"accept"=>'image/*')); ?> 
							</p>
                            
                              <hr />
                            <p>
								<label for="menu-class"><?php echo form_label('Logo'); ?></label>
								 
                                <?php echo form_upload(array("name"=>'Logo',"accept"=>'image/*')); ?> 
							</p>
                              <hr />
                           
                            <p>
								<label for="menu-class"><?php echo form_label('FavIcon'); ?></label>
								 
                                <?php echo form_upload(array("name"=>'FavIcon',"accept"=>'image/*')); ?> 
							</p>
							 
                           <p class="buttons">
                            <br/>
								   
                                
                                
								<button id="add-menu" type="submit" class="button green small">Save</button>
							</p>
						<?php echo form_close(); ?>

                             
                            
                            
						 

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
		   
            UINestable.init();
			
			
			
			
		   
        });
		
		
		
		 jQuery('body').on('click', '.portlet > .portlet-title > .tools > a.save', function (e) {
            e.preventDefault();
            var el = jQuery(this).closest(".portlet").children(".portlet-body");
            var url = jQuery(this).attr("data-url");
            var error = $(this).attr("data-error-display");
			
            if (url) {
		
                
                
             var message = $('textarea#nestable_list_3_output').val();
             
             
	     var dataString = 'menu_id='+ message ;
		    
                  
                App.blockUI({target: el, iconOnly: true});
                $.ajax({
                    type: "POST",
                    data: dataString,
                    cache: false,
                    url: url,
                    dataType: "html",
                    success: function(res) 
                    {  
					
					                    
                        App.unblockUI(el);
                        alert("Done");
                        //el.html(res);
                    },
                    error: function(xhr, ajaxOptions, thrownError)
                    {
                        App.unblockUI(el);
                        var msg = 'Error on reloading the content. Please check your connection and try again.';
                        if (error == "toastr" && toastr) {
                            toastr.error(msg);
                        } else if (error == "notific8" && $.notific8) {
                            $.notific8('zindex', 11500);
                            $.notific8(msg, {theme: 'ruby', life: 3000});
                        } else {
                            alert(msg);
                        }
                    }
                });
            } else {
                // for demo purpose
                App.blockUI({target: el, iconOnly: true});
                window.setTimeout(function () {
                    App.unblockUI(el);
                }, 1000);
            }            
        });
		
		
		
		
		
		
		
		
    </script>
<!-- END JAVASCRIPTS -->