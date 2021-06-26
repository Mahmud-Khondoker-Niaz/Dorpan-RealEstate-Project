<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('cdn');?>assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('cdn');?>assets/plugins/select2/select2-metronic.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('cdn');?>assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
 
 



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
								<a href="<?php echo site_url("quranhadith");?>" class="btn default yellow-stripe">
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
							<a href="<?php echo site_url("quranhadith");?>">
								Quran & Hadith
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
								<i class="fa fa-reorder"></i>Quran & Hadith Entry
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


  
 
 
 					 
					

$Caption = array(
	'name'	=> 'Caption',
	'id'	=> 'Caption',
	'value'	=> $Caption,
	 
	'required'	=> 'required',
	'class'	=> "form-control"
);
 
 
 
 $Code = array(
	'name'	=> 'Code',
	'id'	=> 'Code',
	'value'	=> $Code,
	 
	'required'	=> 'required',
	'class'	=> "form-control"
);

$ArabicText = array(
	'name'	=> 'ArabicText',
	'id'	=> 'ArabicText',
	'value'	=> $ArabicText,
	'dir'=>'rtl', 
    'style'=>'font-size:25px;',
	 
	'class'	=> "form-control"
);

$Date = array(
	'name'	=> 'Date',
	'id'	=> 'Date',
	'size'	=> '16',
	'readonly'	=> 'readonly',
	'value'	=> $Date,
	 'class'	=> "form-control"
);
 

 
 

$TranslatedText = array(
	'name'	=> 'TranslatedText',
	'id'	=> 'TranslatedText',
	'value'	=> $TranslatedText,
	 'rows'	=> "6",
	 
	'class'	=> "form-control"
);
	 
					 
 $Caterogy = array(   
	'name'	=> 'Category',
	'list'  => $categorylist,
	'required'	=> 'required',
	'selected' => $selected_category
);

 	 



$Detail = array(
	'name'	=> 'Detail',
	'id'	=> 'Detail',
	'value'	=> $Detail,
	'rows'	=> "12",
	 'data-error-container'	=> "#editor1_error",
	'class'	=> "form-control"
);






  
?>

                                    
<?php echo form_open_multipart($this->uri->uri_string(),array("id"=>"form_sample_1","class"=>"form-horizontal"));
echo  form_hidden('QuranHadithID',$QuranHadithID);     
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
										<div class="col-md-8">
                                        
                                        <?php echo form_input($Caption); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($Caption['name'])); ?> </span> 
											<span class="help-block">
												 Write Caption
											</span>
										</div>
									</div>
									
                                     
                                     
                              
                                      
                                     
                                   <div class="form-group">
										<label class="control-label col-md-3">Code
										<span class="required">
											 
										</span>
										</label>
										<div class="col-md-8">
                                        
                                        <?php echo form_input($Code); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($Code['name'])); ?> </span> 
											<span class="help-block">
												 
											</span>
										</div>
									</div>  
                                    
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">ArabicText
										<span class="required">
											 
										</span>
										</label>
										<div class="col-md-8">
                                        
                                        <?php echo form_textarea($ArabicText); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($ArabicText['name'])); ?> </span> 
											<span class="help-block">
												( For Quran)
											</span>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Date
										<span class="required">
											 
										</span>
										</label>
                                        
                                        
                                        <div class="col-md-5">
											 <div class="input-group date form_datetime">
												
                                                <?php echo form_input($Date); ?>
                                                 
                                              
												<span class="input-group-btn">
													<button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
                                             
											<!-- /input-group -->
											<span class="help-block">
												  
											</span>
										</div>
                                        
										 
                                          
									</div>
                                    
                                    
                                    
                                     
                                    
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Category
										 
										</label>
										<div class="col-md-8">
                                        
                                         
                                          
											 <?php echo form_dropdown($Caterogy['name'], $Caterogy['list'], $Caterogy['selected'], 'id="form_2_select2" class="form-control select2me"'); ?>
                                             
                                        <span style="color: red;"><?php echo strip_tags(form_error($Caterogy['name'])); ?> </span> 
					
											 
										</div>
									</div>
                                    
                                    
                                    
                                   
                                    <div class="form-group">
										<label class="control-label col-md-3">TranslatedText
										<span class="required">
											 
										</span>
										</label>
										<div class="col-md-8">
                                        
                                        <?php echo form_textarea($TranslatedText); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($TranslatedText['name'])); ?> </span> 
											<span class="help-block">
												 
											</span>
										</div>
									</div>
                                    
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">IsActive
										<span class="required">
											 *
										</span>
										</label>   
										<div class="col-md-8">
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
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
									 
				      				 
									 
									 
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn green">Save</button>
										<?php echo anchor("quranhadith", "Cancel", array("class"=>"btn default"));?> 
                                       
                                       
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
   ComponentsPickers.init();

});
</script>
<!-- END JAVASCRIPTS -->
