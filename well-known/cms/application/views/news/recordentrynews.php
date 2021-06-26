<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('cdn');?>assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('cdn');?>assets/plugins/select2/select2-metronic.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('cdn');?>assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
 
 
 
 



<script type="text/javascript" src="<?php echo $this->config->item('site_url');?>assets/tinymce/tinymce.min.js"></script>
 
<script type="text/javascript">
tinyMCE.init({
    content_css : "<?php echo $this->config->item('site_url');?>assets/rte/mcecontent.css",
          selector : "#NewsSource, #NewsSummary",
		   plugins: [
        "advlist autolink link charmap hr anchor pagebreak",
        "searchreplace visualblocks visualchars ",
        "nonbreaking contextmenu directionality",
        "template paste textcolor "
    ],
	 menubar : false,
	 toolbar1: "bold italic | forecolor backcolor | styleselect fontsizeselect | link unlink"
});



tinymce.init({
    content_css : "<?php echo $this->config->item('site_url');?>assets/tinymce/mcecontent.css",
    selector: "#DetailNews2",
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
    toolbar2: "| insertfile image media |  print preview  code | forecolor backcolor emoticons |  pastetext pasteword  selectall",
    image_advtab: true,
	 document_base_url: "<?php echo $this->config->item('site_url');?>assets/uploaded",
});



 tinymce.init({
      content_css : "<?php echo $this->config->item('site_url');?>assets/tinymce/mcecontent.css",
    selector: "#DetailNews",
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
<!--	<div id="TabbedPanels1" class="TabbedPanels">
	  <ul class="TabbedPanelsTabGroup">
	    <li class="TabbedPanelsTab" tabindex="0">Tab 1</li>
	    <li class="TabbedPanelsTab" tabindex="0">Tab 2</li>
      </ul>
	  <div class="TabbedPanelsContentGroup">
	    <div class="TabbedPanelsContent">Content 1</div>
	    <div class="TabbedPanelsContent">Content 2</div>
      </div>
    </div>-->
	<div class="page-content-wrapper">
		<div class="page-content">
			 
			 
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					News/Event <small>Entry</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
						 
                         <div class="actions">
								<a href="<?php echo site_url("news");?>" class="btn default yellow-stripe">
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
							<a href="<?php echo site_url("news");?>">
								News/Event
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a >
								Entry
							</a>
						</li>
                                                
                                                <li>
							 <?php echo $message; ?>
							 
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
								<i class="fa fa-reorder"></i>News/Event Entry
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


 
 
       

$NewsTitle = array(
	'name'	=> 'NewsTitle',
	'id'	=> 'NewsTitle',
	'value'	=> $NewsTitle,
	'required'	=> "required",
	 	'class'	=> "form-control"
);

$DetailNews2 = array(
	'name'	=> 'DetailNews',
	'id'	=> 'DetailNews',
	'value'	=> $DetailNews,
	 
	'class'	=> "form-control"
);
 
 
 $DetailNews = array(
	'name'	=> 'DetailNews',
	'id'	=> 'DetailNews',
	'value'	=> $DetailNews,
	'rows'	=> "12",
	 'data-error-container'	=> "#editor1_error",
	'class'	=> "form-control"
);
  
										
 
 
 
 
 
 
  


$NewsSummary = array(
	'name'	=> 'NewsSummary',
	//'id'	=> 'NewsSummary',
	'value'	=> $NewsSummary,
	'rows'	=> "3",
	
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
 

   
$ImageTitle = array(
	'name'	=> 'ImageTitle',
	'id'	=> 'ImageTitle',
	'value'	=> $ImageTitle,
	'rows'	=> "2",
	 'class'	=> "form-control"
); 
 
 
 
 

 

  
?>
									
                                    
<?php echo form_open_multipart($this->uri->uri_string(),array("id"=>"form_sample_1","class"=>"form-horizontal"));
 echo  form_hidden('NewsID',$NewsID);    
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
										<label class="control-label col-md-2"><b>Heading</b>
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-6">
                                        
                                        <?php echo form_input($NewsTitle); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($NewsTitle['name'])); ?> </span> 
											 
										</div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
									 
										 
									 
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
									</div>  
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                      <div class="form-group">
                                         
										 
                                
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                                 <label class="control-label col-md-2"><b>Date</b></label>
										<div class="col-md-6">
											 <div class="input-group date form_datetime">
												
                                                <?php echo form_input($Date); ?>
                                                 
                                              
												<span class="input-group-btn">
													<button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
                                             
											<!-- /input-group -->
											<span class="help-block">
												 Select date
											</span>
										</div>
                                        
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                        
									</div>                              
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                      
                                    
                                <div class="form-group">
										<label class="control-label col-md-2"><b>Active</b>
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-3">
                                        
                                        <div class="radio-list">
											 
											<label class="radio-inline">
											<?php echo form_radio($active1); ?> Yes
                                            </label>
											<label class="radio-inline">
											<?php echo form_radio($active2); ?> No </label>
										</div>
                                        	 
										</div>
                                    
                                    
                                    
                                    
                        
                                    
                                    
									</div>
                                    
                                  
                                                           
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                    
                                   <!----> 
                                   <div class="form-group">
										<label class="control-label col-md-1">Detail
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-10">
                                        
                                      	
                                        
                                         <?php echo form_textarea($DetailNews); ?>
                                        
											 <div id="editor1_error">
											</div>
                                             <span style="color: red;"><?php echo strip_tags(form_error($DetailNews['name'])); ?> </span> 
											 
										</div>
									</div>
                                    
                                    
                                     
                                    <div class="form-group">
										<label class="control-label col-md-2">Summary
										 <span class="required">
											 *
										</span>
										</label>
										<div class="col-md-8">
                                        
                                        <?php echo form_textarea($NewsSummary); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($NewsSummary['name'])); ?> </span>  
										</div>
									</div>
                                    
                               
                                    
                                    
                                    
                                    
                                 
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
										<label class="control-label col-md-2">Image
										<span class="required">
											 *
										</span>
										</label>   
										<div class="col-md-4">
											<input type="file" name="Image" id="exampleInputFile1">
										<p class="help-block">
											 Recommended (w:  px  h: px) 
										</p>
											 
										</div>
                                        
                                                                              <div class="col-md-2">
											
                                                                                  <?php  if(isset($Image) && strlen($Image)> 15) {?>        
                                                                                  <img height="50" src="<?php echo $this->config->item('site_url').$Thumbimage;?>" />
                                                                                  <a href="##" data-url="<?php echo site_url("news/imageremove/".$NewsID);?>" id="removeimage">Remove</a>
                                                                                  
                                                                                 <?php }?> 
                                                                                  
                                                                                 
										</div>
                                        
                                        
                                   
                                        
                                        
                                        
                                        
                                        
									</div>
                                    
                                    
                                    
                                    <div class="form-group">
										<label class="control-label col-md-2">ImageTitle
										  
										</label>
										<div class="col-md-8">
                                        
                                        <?php echo form_input($ImageTitle); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($ImageTitle['name'])); ?> </span>  
 
										</div>
									</div>
                                    
                                    
                                    
                                    
                                    
                                    
                        
                                     
                                   
                                   
                                    
                                     
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn green">Save</button>
										<?php echo anchor("news", "Cancel", array("class"=>"btn default"));?> 
                                       
                                       
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
   $("#form_3_select2").chained("#form_2_select2"); /* or $("#series").chainedTo("#mark"); */
   
   $( "#removeimage" ).click(function(event) {
 
  $.ajax({
      url: jQuery(this).attr("data-url"),
      type: "get",
      dataType: "html",
      success: function( response ){
			 $("#removeimage").parent().html( response );
			}
         });               
      
  
                    event.preventDefault();
                });
   
   
});
 
</script>
<!-- END JAVASCRIPTS -->