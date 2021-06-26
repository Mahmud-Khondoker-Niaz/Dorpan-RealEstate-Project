<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2-metronic.css"/>

<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			 
			 
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					News Paper <small>Entry</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
						 
                         <div class="actions">
								<a href="<?php echo site_url("newspaper");?>" class="btn default yellow-stripe">
									<i class="fa fa-plus"></i>
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
							<a href="<?php echo site_url("newspaper");?>">
								News Paper
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a >
								Entry
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
								<i class="fa fa-reorder"></i>News Paper Entry
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


  
 
 $Caterogy = array(   
	'name'	=> 'Category',
	'list'  => $categorylist,
	'selected' => $selected_item
);

 $Type = array(   
	'name'	=> 'NewPaperType',
	'list'  => $typelist,
	'selected' => $selected_item2
);

 

$NewsPaperName = array(
	'name'	=> 'NewsPaperName',
	'id'	=> 'NewsPaperName',
	'value'	=> $NewsPaperName,
	'maxlength'	=> 100,
	'required'	=> 'required',
	'class'	=> "form-control"
);
 


$Priority = array(
	'name'	=> 'Priority',
	'id'	=> 'Priority',
        'type'	=> 'number',
        'required'	=> 'required',
	'value'	=> $Priority,
	 
	 
	'class'	=> "form-control"
);
  
?>

                                    
<?php echo form_open_multipart($this->uri->uri_string(),array("id"=>"form_sample_1","class"=>"form-horizontal"));
echo  form_hidden('NewsPaperID',$NewsPaperID);     
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
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($NewsPaperName); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($NewsPaperName['name'])); ?> </span> 
											<span class="help-block">
												 Paper Name
											</span>
										</div>
									</div>
									
                                     
                                     
                              
                                  <div class="form-group">
										<label class="control-label col-md-3">Priority
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($Priority); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($Priority['name'])); ?> </span> 
											<span class="help-block">
												 Write Priority
											</span>
										</div>
									</div>   
                                     
                                     
                           
                                    
                                                                    
                                          <div class="form-group">
										<label class="control-label col-md-3">Category
										 
										</label>
										<div class="col-md-4">
                                        
                                         
                                          
											 <?php echo form_dropdown($Caterogy['name'], $Caterogy['list'], $Caterogy['selected'], 'id="form_2_select2" class="form-control select2me"'); ?>
                                             
                                      
											 
										</div>
									</div>
                                    
                                      
                                    <div class="form-group">
										<label class="control-label col-md-3">Type
										 
										</label>
										<div class="col-md-4">
                                        
                                         
                                          
											 <?php echo form_dropdown($Type['name'], $Type['list'], $Type['selected'], 'id="form_3_select2" class="form-control select2me"'); ?>
                                             
                                      
											 
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
												<label  class="radio-inline">
												<?php echo form_radio($active1); ?> Yes </label>
												<label  class="radio-inline">
												<?php echo form_radio($active2); ?> No </label>
											</div>
											 
										</div>
									</div>
                                    
                                    
									 
				     <div class="form-group">
										<label class="control-label col-md-3">Logo
										<span class="required">
											 *
										</span>
										</label>   
										<div class="col-md-4">
											<input type="file" name="Image" id="exampleInputFile1">
										<p class="help-block">
											 Dimension
										</p>
											 
										</div>
									</div>				 
									 
									 
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn green">Save</button>
										<?php echo anchor("writer", "Cancel", array("class"=>"btn default"));?> 
                                       
                                       
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
