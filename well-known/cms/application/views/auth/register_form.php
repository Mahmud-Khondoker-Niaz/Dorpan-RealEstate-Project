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
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
							 THEME COLOR
						</span>
						<ul>
							<li class="color-black current color-default" data-style="default">
							</li>
							<li class="color-blue" data-style="blue">
							</li>
							<li class="color-brown" data-style="brown">
							</li>
							<li class="color-purple" data-style="purple">
							</li>
							<li class="color-grey" data-style="grey">
							</li>
							<li class="color-white color-light" data-style="light">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
							 Layout
						</span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Header
						</span>
						<select class="header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar
						</span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar Position
						</span>
						<select class="sidebar-pos-option form-control input-small">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Footer
						</span>
						<select class="footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					User <small>Entry</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>
								Actions
							</span>
							<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li>
									<a href="#">
										Action
									</a>
								</li>
								<li>
									<a href="#">
										Another action
									</a>
								</li>
								<li>
									<a href="#">
										Something else here
									</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">
										Separated link
									</a>
								</li>
							</ul>
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo site_url("home");?>">
								Home
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo site_url("user");?>">
								User List
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a >
								User Entry
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
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>User Entry
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
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'type'=>'text',
		'required'=>'required',
		 
		'data-required'=>1,
		'class'=>'form-control',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth')
	);
}

 
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'type'=>'text',
	'required'=>'required',
	'class'=>'form-control',
	'value'	=> set_value('email'),
	'maxlength'	=> 80 
);

   
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'type'=>'password',
	'required'=>'required',
	'class'=>'form-control',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'type'=>'password',
	'required'=>'required',
	'class'=>'form-control',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth')
);
 
$captcha = array(
	'name'	=> 'captcha',
	'required'=>'required',
	'id'	=> 'captcha',
	'class'=>'form-control',
	'maxlength'	=> 8
);
?>





 <?php echo form_open_multipart($this->uri->uri_string(),array('id'=>'form_sample_1','class'=>'form-horizontal')); ?>
                                    
  
                            
							 
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
										<label class="control-label col-md-3">username
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($username); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($username['name'])); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></span>
											<span class="help-block">
												 Write username
											</span>
										</div>
									</div>
                                    
                                    
                                    
									<div class="form-group">
										<label class="control-label col-md-3">Email
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
                                       <?php echo form_input($email); ?>
                                        
											 <span style="color: red;"><?php echo strip_tags(form_error($email['name'])); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></span>
                                             
										</div>
									</div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                     
                                    
                                    
                                    
                                     
                                    
                                    
                                    
                                    
                                    
									<div class="form-group">
										<label class="control-label col-md-3">Password
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
                                     <?php echo form_password($password); ?>
                                        
											  <span style="color: red;"><?php echo strip_tags(form_error($password['name'])); ?></span>
                                             
										</div>
									</div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    	<div class="form-group">
										<label class="control-label col-md-3">Password Confirm
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
                                    <?php echo form_password($confirm_password); ?>
                                        
											  <span style="color: red;"><?php echo strip_tags(form_error($confirm_password['name'])); ?></span>
                                             
										</div>
									</div>
                                    
                                    
                                    
                                    
                                    
                                    
                                     
                                    
                                    
                                      <?php if ($captcha_registration) {
		if ($use_recaptcha) {?>
                           <div class="form-group">
                           <table bgcolor="#CCCCCC" cellpadding="5" cellspacing="1">
                           <tr bgcolor="#FFFFFF">
		<td colspan="2">
			<div id="recaptcha_image"></div>
		</td>
		<td>
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		</td>
	</tr>
	<tr bgcolor="#FFFFFF">
		<td>
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		</td>
		<td colspan="2"><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
        <span style="color: red;"><?php echo strip_tags(form_error('recaptcha_response_field')); ?></span>
        </td>
		
		<?php echo $recaptcha_html; ?>
	</tr></table>
                              </div>
                           <?php } else { ?>
                             <div class="form-group">
                              <label class="control-label col-md-3"></label>
                              <div class="col-md-4">
                                 
			<?php echo $captcha_html; ?>
                              </div>
                           </div>
                            
                              <div class="form-group">
                              <label class="control-label col-md-3">Enter the code exactly as it appears:<span class="required">*</span></label>
                              <div class="col-md-4">
                               <div class="input-group">
                                
                                  
                                  <?php echo form_input($captcha); ?>
                                  </div>
                                  
        <span style="color: red;"><?php echo strip_tags(form_error($captcha['name'])); ?></span>
                              </div>
                           </div>
                            <?php }
	} ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                     
                                    
                                    
									 
									 
									 
									 
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn green">Submit</button>
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
jQuery(document).ready(function() {   
   // initiate layout and plugins
   App.init();
   FormValidation.init();
});
</script>
