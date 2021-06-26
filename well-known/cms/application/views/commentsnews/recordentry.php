<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2-metronic.css"/>

<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			 
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			 
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Comments <small>Edit/Approve</small>
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
								<i class="fa fa-reorder"></i>Comments Edit
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
							   

 
$active1 = array(   
	'name'	=> 'IsActive',
	 
	'value'	=> 1,
	'checked'     => ($IsActive ==1 ) ? TRUE : FALSE 
 
);
 $active2 = array(   
	'name'	=> 'IsActive',
	 
	'value'	=> 0,
	'checked'     => ($IsActive == 0 ) ? TRUE : FALSE,
);

 
  
$IsApprove1 = array(   
	'name'	=> 'IsApprove',
	 
	'value'	=> 'Yes',
	'checked'     => ($IsApprove =='Yes' ) ? TRUE : FALSE 
 
);
 $IsApprove2 = array(   
	'name'	=> 'IsApprove',
	 
	'value'	=> 'No',
	'checked'     => ($IsApprove == 'No') ? TRUE : FALSE,
);
 
 
 
//
//$ExtraCurricularActivity = array(
//	'name'	=> 'ExtraCurricularActivity',
//	'value'	=> $ExtraCurricularActivity,
//	'row'	=> "2",  
//	'class'	=> "form-control"
//);


 
 


$CommentsMessage = array(
	'name'	=> 'CommentsMessage',
	'value'	=> $CommentsMessage,
	 'row'	=> "2",
     'required'	=> "required",
	'class'	=> "form-control"
);

  

$CommentsOriginal = array(
	'name'	=> 'CommentsOriginal',
	'value'	=> $CommentsOriginal,
	 'row'	=> "2", 
     'required'	=> "required",
	'class'	=> "form-control"
);




?>

                                    
<?php echo form_open_multipart($this->uri->uri_string(),array("id"=>"form_sample_1","class"=>"form-horizontal"));    echo  form_hidden('CommentsnewsID',$CommentsnewsID);  
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
										<label class="control-label col-md-3">Name
										 
										</label>
										<div class="col-md-4">
                                        <?php echo $Name ?>
                                        
											 
                                             
										</div>
									</div>
                                                                    
                                                                    
                                   <div class="form-group">
										<label class="control-label col-md-3">Email
										 
										</label>
										<div class="col-md-4">
                                        <?php echo $Email; ?>
                                        
											
                                             
										</div>
									</div>
                                    
                                    
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Date
										 
										</label>
										<div class="col-md-4">
                                        <?php echo $Date; ?>
                                        
											 
                                             
										</div>
									</div>
                                    
                                   
                                    
                                    
                                     
                                    
                                   
                                
                                    
                                               
                                    
                                     
                                                                <div class="form-group">
										<label class="control-label col-md-3">Comments  
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
                                                                <?php echo form_textarea($CommentsMessage); ?>
                                        
											 <span style="color: red;"><?php echo strip_tags(form_error($CommentsMessage['name'])); ?> </span> 
                                             
										</div>
									</div>                 
                                    
                                     
                 
       

 
                                                                <div class="form-group">
										<label class="control-label col-md-3">Comments Original  
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
                                                                <?php echo form_textarea($CommentsOriginal); ?>
                                        
											 <span style="color: red;"><?php echo strip_tags(form_error($CommentsOriginal['name'])); ?> </span> 
                                             
										</div>
									</div>                 
                                    
                                     

                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Approve?
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
											<div class="radio-list">
												<label>
												<?php echo form_radio($IsApprove1); ?> Yes </label>
												<label>
												<?php echo form_radio($IsApprove2); ?> No </label>
											</div>
											 
										</div>
									</div>
                                    
                                    
									 
					       
                                    <div class="form-group">
										<label class="control-label col-md-3">IsActive
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
											<div class="radio-list">
												<label>
												<?php echo form_radio($active1); ?> Yes </label>
												<label>
												<?php echo form_radio($active2); ?> No </label>
											</div>
											 
										</div>
									</div>
                                    
                                    				 
									 
									 
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn green">Submit</button>
                                                                                
                                                                                <a href="<?php echo site_url("comments");?>" class="btn default">Cancel</a>
										 
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
});
</script>
<!-- END JAVASCRIPTS -->
