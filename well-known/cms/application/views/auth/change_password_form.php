<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2-metronic.css"/>


 
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
 


<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			 
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Change <small>Password</small>
					</h3>
				 
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			 
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Change Password
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
                            
                            <?php
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'value' => set_value('old_password'),
    'class'=>'form-control',
	'size' 	=> 30,
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
     'class'=>'form-control',
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
     'class'=>'form-control',
);
?>

                                    
<?php echo form_open_multipart($this->uri->uri_string(),array("id"=>"form_sample_1","class"=>"form-horizontal"));      
 ?>  
                            
							 
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
									 
									
                                    
                           
                                                                    
                                                                          
                          
                                    <div class="form-group">
										<label class="control-label col-md-5"><?php echo form_label('Old Password', $old_password['id']); ?>
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
										 
                                              
                                             <?php echo form_password($old_password); ?>
                                                                                    
                                                                                    <span style="color:#f00;">
                                                                                        <?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?> 
                                                                                        
                                                                                    </span>                               
										</div>
                                        
                                        
                                                      
                                        
									</div>
                                    
                                    
                                     
                                    
                                     
                                     
                              
                                                                    
                           
                                    <div class="form-group">
										<label class="control-label col-md-5"><?php echo form_label('New Password', $new_password['id']); ?>
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
										 
                                              
                                           <?php echo form_password($new_password); ?>
                                                                                    
                                                                                    <span style="color:#f00;">
                                                                                        <?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?>
                                                                                        
                                                                                    </span>                               
										</div>
                                        
                                        
                                                      
                                        
									</div>
                                    
                                        
                              
                              
                               
                              
                              
                              
                              
                              
                                <div class="form-group">
										<label class="control-label col-md-5"><?php echo form_label('Confirm New Password', $confirm_new_password['id']); ?>
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
										 
                                              
                                           <?php echo form_password($confirm_new_password); ?>
                                                                                    
                                                                                    <span style="color:#f00;">
                                                                                        <?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?>
                                                                                        
                                                                                    </span>                               
										</div>
                                        
                                        
                                                      
                                        
									</div>
                                     
 
 				  
 
                                    
   
                                  
                                    
									 
									 
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
                                                                            
                                                                            <?php echo form_button(array('content' => 'Change Password',"type"=>"submit","class"=>"btn green")); ?>
										 
										<button type="button" class="btn default">Cancel</button>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
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
		 2014 &copy; Website.
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




<script>

function updateTextInput(val) {
      document.getElementById('textInput').value=val; 
    }

jQuery(document).ready(function() {   
   // initiate layout and plugins
   App.init();
   FormValidation.init();
    ComponentsPickers.init();
});
</script>
<!-- END JAVASCRIPTS -->
