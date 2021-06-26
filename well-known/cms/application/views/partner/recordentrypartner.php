<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2-metronic.css"/>





<script type="text/javascript" src="<?php echo $this->config->item('site_url');?>assets/tinymce/tinymce.min.js"></script>
 
<script type="text/javascript">



 tinymce.init({
      content_css : "<?php echo $this->config->item('site_url');?>assets/tinymce/mcecontent.css",
    selector: "#Detail",
    theme: "modern",
	
	   force_p_newlines : false, 
        force_br_newlines : true, 
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor responsivefilemanager"
    ],
	relative_urls : false,
remove_script_host : false,
convert_urls : true,
paste_as_text: true,
paste_data_images: false,
paste_auto_cleanup_on_paste : true,
    toolbar1: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | |styleselect fontsizeselect | link unlink anchor",   
    toolbar2: "| responsivefilemanager | insertfile image media |  print preview  code | forecolor backcolor emoticons |  pastetext pasteword  selectall",
    image_advtab: true,
	external_filemanager_path:"<?php echo $this->config->item('site_url');?>assets/filemanager/",
   filemanager_title:"Filemanager" ,
   external_plugins: { "filemanager" : "<?php echo $this->config->item('site_url');?>assets/filemanager/plugin.min.js"},
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
}); 
</script>
<style>

    .form-group {
        margin: 10px !important;
        padding-bottom: 10px;
        border-bottom: solid 1px #ebe9e9;
        
    }  
    
    .form-body {
        font-family:solaimanLipi,Verdana, Arial, Helvetica, sans-serif; font-size:15px;
        
        
    }
    
</style>







<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			 
			 
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Partner <small>Entry</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
						 
                         <div class="actions">
								<a href="<?php echo site_url("");?>" class="btn default yellow-stripe">
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
							<a href="<?php echo site_url("partner");?>">
								Partner
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
								<i class="fa fa-reorder"></i>Partner Entry
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


  
 
 

$PartnerName = array(
	'name'	=> 'PartnerName',
	'id'	=> 'PartnerName',
	'value'	=> $PartnerName,
	'maxlength'	=> 100,
	'required'	=> 'required',
	'class'	=> "form-control"
);
 
 

$PartnerLink = array(
	'name'	=> 'PartnerLink',
	'id'	=> 'PartnerLink',
	'value'	=> $PartnerLink,
 	'class'	=> "form-control"
);
   

$Priority = array(
	'name'	=> 'Priority',
	'id'	=> 'Priority',
	'value'	=> $Priority,
	'type'	=> 'number',
    'class'	=> "form-control"
);


  
?>

                                    
<?php echo form_open_multipart($this->uri->uri_string(),array("id"=>"form_sample_1","class"=>"form-horizontal"));
echo  form_hidden('PartnerID',$PartnerID);     
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
										<label class="control-label col-md-3">Caption
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($PartnerName); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($PartnerName['name'])); ?> </span> 
											 
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
											 
										</div>
									</div>     
                              
							  
							   
							  
							  
							  
                                   
                                    
                                    
                                        
                                     
                                     
                           <div class="form-group">
										<label class="control-label col-md-3">PartnerLink
										 
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($PartnerLink); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($PartnerLink['name'])); ?> </span> 
											<span class="help-block">
												 URL/Link
											</span>
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
										<label class="control-label col-md-3">Photo
										<span class="required">
											 *
										</span>
										</label>   
										<div class="col-md-4">
											<input type="file" name="Image" id="exampleInputFile1">
										<p class="help-block">
											 Dimension: 600px x 400px
										</p>
											 
										</div>
									</div>				 
									
									
									
									
									
								 	
									
									
									
									 
									 
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn green">Save</button>
										<?php echo anchor("partner", "Cancel", array("class"=>"btn default"));?> 
                                       
                                       
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
