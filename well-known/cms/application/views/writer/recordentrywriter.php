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
					Writer <small>Entry</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
						 
                         <div class="actions">
								<a href="<?php echo site_url("writer");?>" class="btn default yellow-stripe">
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
							<a href="<?php echo site_url("writer");?>">
								Writer
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
								<i class="fa fa-reorder"></i>Writer Entry
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

 
 

$WriterName = array(
	'name'	=> 'WriterName',
	'id'	=> 'WriterName',
	'value'	=> $WriterName,
	'maxlength'	=> 100,
	'required'	=> 'required',
	'class'	=> "form-control"
);
 


$Email = array(
	'name'	=> 'Email',
	'id'	=> 'Email',
	'value'	=> $Email,
 	'class'	=> "form-control"
);


$Desigantion = array(
	'name'	=> 'Desigantion',
	'id'	=> 'Desigantion',
	'value'	=> $Desigantion,
 	'class'	=> "form-control"
);


$ContactNumber = array(
	'name'	=> 'ContactNumber',
	'id'	=> 'ContactNumber',
	'value'	=> $ContactNumber,
	 	'class'	=> "form-control"
);


$FaceBook = array(
	'name'	=> 'FaceBook',
	'id'	=> 'FaceBook',
	'value'	=> $FaceBook,
    'class'	=> "form-control"
);
$Twitter = array(
	'name'	=> 'Twitter',
	'id'	=> 'Twitter',
	'value'	=> $Twitter,
    'class'	=> "form-control"
);
$GooglePlus = array(
	'name'	=> 'GooglePlus',
	'id'	=> 'GooglePlus',
	'value'	=> $GooglePlus,
    'class'	=> "form-control"
);


$Detail = array(
	'name'	=> 'Detail',
	'id'	=> 'Detail',
	'value'	=> $Detail,
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
echo  form_hidden('WriterID',$WriterID);     
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
										<label class="control-label col-md-3">Category
										 
										</label>
										<div class="col-md-4">
                                        
                                         
                                          
											 <?php echo form_dropdown($Caterogy['name'], $Caterogy['list'], $Caterogy['selected'], 'id="form_2_select2" class="form-control select2me"'); ?>
                                             
                                      
											 
										</div>
									</div>
                                    
                                      
                                    
                                    
                                    
                                    
                                     
				<div class="form-group">
										<label class="control-label col-md-3">Name
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($WriterName); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($WriterName['name'])); ?> </span> 
											<span class="help-block">
												 Write Name
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
											 
										</div>
									</div>     
                              
							  
							  <div class="form-group">
										<label class="control-label col-md-3">ContactNumber
										 
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($ContactNumber); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($ContactNumber['name'])); ?> </span> 
											 
										</div>
									</div>
							  
							  
							  
                                  <div class="form-group">
										<label class="control-label col-md-3">Email
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($Email); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($Email['name'])); ?> </span> 
											<span class="help-block">
												 Write Email
											</span>
										</div>
									</div>
                                    
                                    
                              <div class="form-group">
										<label class="control-label col-md-3">Desigantion
										 
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($Desigantion); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($Desigantion['name'])); ?> </span> 
											 
										</div>
									</div>         
                                     
                                     
                           <div class="form-group">
										<label class="control-label col-md-3">Facebook
										 
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($FaceBook); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($FaceBook['name'])); ?> </span> 
											<span class="help-block">
												 URL/Link
											</span>
										</div>
									</div>
									
									
									<div class="form-group">
										<label class="control-label col-md-3">Twitter
										 
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($Twitter); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($Twitter['name'])); ?> </span> 
											<span class="help-block">
												 URL/Link
											</span>
										</div>
									</div>
									
									
									<div class="form-group">
										<label class="control-label col-md-3">GooglePlus
										 
										</label>
										<div class="col-md-4">
                                        
                                        <?php echo form_input($GooglePlus); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($GooglePlus['name'])); ?> </span> 
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
