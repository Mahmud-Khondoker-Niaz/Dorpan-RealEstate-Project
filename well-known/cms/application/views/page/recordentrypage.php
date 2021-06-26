<!-- BEGIN PAGE LEVEL STYLES -->
  
 



<script type="text/javascript" src="<?php echo base_url();?>assets/tinymce/tinymce.min.js"></script>
 
<script type="text/javascript">
 

 

 tinymce.init({
      content_css : "<?php echo base_url();?>assets/tinymce/mcecontent.css",
    selector: "#Detail",
    theme: "modern",
	
	   force_p_newlines : false, 
        force_br_newlines : true, 
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor responsivefilemanager youtube"
    ],
	relative_urls : false,
remove_script_host : false,
convert_urls : true,
paste_as_text: true,
paste_data_images: false,
paste_auto_cleanup_on_paste : true,
    toolbar1: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | |styleselect fontsizeselect | link unlink anchor",   
    toolbar2: "| responsivefilemanager | insertfile image media |  print preview  code | forecolor backcolor emoticons |  pastetext pasteword  selectall | youtube",
    image_advtab: true,
	external_filemanager_path:"<?php echo base_url();?>assets/filemanager/",
   filemanager_title:"Filemanager" ,
   external_plugins: { "filemanager" : "<?php echo base_url();?>assets/filemanager/plugin.min.js"},
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
					Page <small>Entry</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
						 
                         <div class="actions">
								<a href="<?php echo site_url("page");?>" class="btn default yellow-stripe">
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
							<a href="<?php echo site_url("page");?>">
								Page
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
								<i class="fa fa-reorder"></i>Page Entry
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


  
 
 
 					 
					

$PageName = array(
	'name'	=> 'PageName',
	'id'	=> 'PageName',
	'value'	=> $PageName,
	 
	'required'	=> 'required',
	'class'	=> "form-control"
);
 
	 
					 
					
						

$MetaTag = array(
	'name'	=> 'MetaTag',
	'id'	=> 'MetaTag',
	'value'	=> $MetaTag,
	 
	'class'	=> "form-control"
);


$MetaDescription = array(
	'name'	=> 'MetaDescription',
	'id'	=> 'MetaDescription',
	'value'	=> $MetaDescription,
	 'rows'	=> 3,
	'class'	=> "form-control"
);

$Priority = array(
	'name'	=> 'Priority',
	'id'	=> 'Priority',
	'value'	=> $Priority,
	 
	'class'	=> "form-control"
);

$TagWord = array(
	'name'	=> 'TagWord',
	'id'	=> 'TagWord',
	'value'	=> $TagWord,
	 
	'class'	=> "form-control"
);

 
$ProjectLink = array(
	'name'	=> 'ProjectLink',
	'id'	=> 'ProjectLink',
	'value'	=> $ProjectLink,
	 
	'class'	=> "form-control"
);

 


$Detail = array(
	'name'	=> 'Detail',
	'id'	=> 'Detail',
	'value'	=> $Detail,
	'rows'	=> "12",
	 'data-error-container'	=> "#editor1_error",
	'class'	=> "form-control"
);




$Summary = array(
	'name'	=> 'Summary',
	'id'	=> 'Summary',
	'value'	=> $Summary,
	'rows'	=> "12",
	 
	'class'	=> "form-control"
);



  
?>

                                    
<?php echo form_open_multipart($this->uri->uri_string(),array("id"=>"form_sample_1","class"=>"form-horizontal"));
echo  form_hidden('PageID',$PageID);     
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
                                        
                                        <?php echo form_input($PageName); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($PageName['name'])); ?> </span> 
											<span class="help-block">
												 Write Caption
											</span>
										</div>
									</div>
									
                                     
                                     
                              
                                      
                                     
                                   <div class="form-group">
										<label class="control-label col-md-3">MetaTag
										<span class="required">
											 
										</span>
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($MetaTag); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($MetaTag['name'])); ?> </span> 
											<span class="help-block">
												 
											</span>
										</div>
									</div>  
                                    
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">MetaDescription
										<span class="required">
											 
										</span>
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_textarea($MetaDescription); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($MetaDescription['name'])); ?> </span> 
											<span class="help-block">
												 
											</span>
										</div>
									</div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                     <div class="form-group">
										<label class="control-label col-md-3">Priority
										<span class="required">
											 
										</span>
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($Priority); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($Priority['name'])); ?> </span> 
											<span class="help-block">
												 
											</span>
										</div>
									</div>
                                      
                                    
                                    
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">TagWord
										<span class="required">
											 
										</span>
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($TagWord); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($TagWord['name'])); ?> </span> 
											<span class="help-block">
												 
											</span>
										</div>
									</div>
                                    
                                  
								  
								  
								    <div class="form-group">
										<label class="control-label col-md-3">ProjectLink
										<span class="required">
											 
										</span>
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($ProjectLink); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($ProjectLink['name'])); ?> </span> 
											<span class="help-block">
												Only for Project Silde 
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
										<label class="control-label col-md-1">Detail
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-10">
                                        
                                      	
                                        
                                         <?php echo form_textarea($Detail); ?>
                                        
											 <div id="editor1_error">
											</div>
                                             <span style="color: red;"><?php echo strip_tags(form_error($Detail['name'])); ?> </span> 
											 
										</div>
									</div>  
                                    
                                    
                                    
                                    
                                    <div class="form-group">
										<label class="control-label col-md-1">Summary
										<span class="required">
											  
										</span>
										</label>
										<div class="col-md-10">
                                        
                                      	
                                        
                                         <?php echo form_textarea($Summary); ?>
                                        
											 <div id="editor1_error">
											</div>
                                             <span style="color: red;"><?php echo strip_tags(form_error($Summary['name'])); ?> </span> 
											 
										</div>
									</div>
                                    
                                    
                                    
                                    
                                    
                                    
									 
				      				 
									 
									 
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn green">Save</button>
										<?php echo anchor("page", "Cancel", array("class"=>"btn default"));?> 
                                       
                                       
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
