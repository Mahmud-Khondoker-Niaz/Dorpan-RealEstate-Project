<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2-metronic.css"/>

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
					User <small>Update</small>
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
								User Update
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
                     <div class="caption"><i class="icon-reorder"></i>User Info Update</div>
                     <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                      
                        
                        <a href="javascript:;" class="remove"></a>
                     </div>
                  </div>
                   <div class="portlet-body form">
                     <!-- BEGIN FORM-->
                     
                     <?php
$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => $username,
		'type'=>'text',
		'data-required'=>1,
		'class'=>'form-control',
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth')
	);
$banned1 = array(   
	'name'	=> 'banned',
	 
	'value'	=> 1,
	'checked'     => ($banned ==1 ) ? TRUE : FALSE 
 
);
 $banned2 = array(   
	'name'	=> 'banned',
	 
	'value'	=> 0,
	'checked'     => ($banned == 0 ) ? TRUE : FALSE,
);


 


$email = array(   
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> $email,
	 'type'=>'text',
	'class'=>'form-control'
);

 
$image_upload = array(
	'name'	=> 'image',
	'class'=>'form-control',
	'id'	=> 'image'
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'class'=>'form-control',
	'maxlength'	=> 8
);
$infoid = array(
	'name'	=> 'id',
	 
	'value'	=> $id
);

?>

 
                     <?php echo form_open_multipart('user/save',array('id'=>'form_sample_1','class'=>'form-horizontal'));   echo  form_hidden('id',$id);  ?>
                         <div class="form-body">
                           <div class="alert alert-danger display-hide">
                              <button class="close" data-dismiss="alert"></button>
                              You have some form errors. Please check below.
                           </div>
                           <div class="alert alert-success display-hide">
                              <button class="close" data-dismiss="alert"></button>
                              Your form validation is successful!
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Username<span class="required">*</span></label>
                              
                              <div class="col-md-4">
                                  <div class="input-group">
                                   <span class="input-group-addon"><i class="icon-user"></i></span>
                                <?php echo form_input($username); ?>
       
                                
                                 
                                 </div>
                                  <span style="color: red;"><?php echo strip_tags(form_error($username['name'])); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></span> 
                              </div>
                              
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Email<span class="required">*</span></label>
                              <div class="col-md-4">
                               <div class="input-group">
                                 <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                 <?php echo form_input($email); ?>
                                  </div>
                                   <span style="color: red;"><?php echo strip_tags(form_error($email['name'])); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></span>
                              </div>
                           </div>
                           
                         
                            <div class="form-group">
                              <label  class="col-md-3 control-label">Ban?</label>
                              <div class="col-md-9">
                                 <div class="radio-list">
                                    <label class="radio-inline">
                                    <?php echo form_radio($banned1); ?>  Yes
                                    </label>
                                    <label class="radio-inline">
                                    <?php  echo form_radio($banned2); ?> No
                                    </label>  
                                 </div>
                              </div>
                           </div>
                            
                             
                            
                            
                            
                            
                            
                            
                            
                            
                            
                           
                            <div class="form-group">
                              <label class="control-label col-md-3">Image</label>
                              <div class="col-md-4">
                               <div class="input-group">
                                 <?php echo form_upload($image_upload); ?>
                                 
                                  </div>
                              </div>
                           </div>
                           
                                       
                           
                           
                           
                    
         
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
