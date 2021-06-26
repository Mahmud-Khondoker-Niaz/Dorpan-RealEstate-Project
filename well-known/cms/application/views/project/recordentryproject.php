<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('cdn');?>assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('cdn');?>assets/plugins/select2/select2-metronic.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('cdn');?>assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
 
 
 
 



<script type="text/javascript" src="<?php echo $this->config->item('site_url');?>assets/tinymce/tinymce.min.js"></script>
 
<script type="text/javascript">
 

 

 tinymce.init({
      content_css : "<?php echo $this->config->item('site_url');?>assets/tinymce/mcecontent.css",
    selector: "#Amenities, #Description, #Detail, #ProjectImages",
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
					Project <small>Entry</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
						 
                         <div class="actions">
								<a href="<?php echo site_url("project");?>" class="btn default yellow-stripe">
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
							<a href="<?php echo site_url("project");?>">
								Project
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
								<i class="fa fa-reorder"></i>Project Entry
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
							   

 $IsSelected1 = array(   
	'name'	=> 'IsSelected',
	'value'	=> 1,
	'checked'     => ($IsSelected ==1 ) ? TRUE : FALSE 
 
);

 $IsSelected2 = array(   
	'name'	=> 'IsSelected',
	 
	'value'	=> 0,
	'checked'     => ($IsSelected == 0 ) ? TRUE : FALSE,
);


 
 
 
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
      

$ProjectTitle = array(
	'name'	=> 'ProjectTitle',
	'id'	=> 'ProjectTitle',
	'value'	=> $ProjectTitle,
	'required'	=> "required",
	 	'class'	=> "form-control"
);


       

$AreaSF = array(
	'name'	=> 'AreaSF',
	'id'	=> 'AreaSF',
	'value'	=> $AreaSF,
	 'type'	=> "number",
	 	'class'	=> "form-control"
);


  $Price = array(
	'name'	=> 'Price',
	'id'	=> 'Price',
	'value'	=> $Price,
	 'type'	=> "number",
	 	'class'	=> "form-control"
);     

$Bath = array(
	'name'	=> 'Bath',
	'id'	=> 'Bath',
	'value'	=> $Bath,
	'type'	=> "number",
	 	'class'	=> "form-control"
);


       

$Bed = array(
	'name'	=> 'Bed',
	'id'	=> 'Bed',
	'value'	=> $Bed,
	'type'	=> "number",
	 	'class'	=> "form-control"
);
$Location = array(
	'name'	=> 'Location',
	'id'	=> 'Location',
	'value'	=> $Location,
	  	'class'	=> "form-control"
);


$Parking = array(
	'name'	=> 'Parking',
	'id'	=> 'Parking',
	'value'	=> $Parking,
	'type'	=> "number",
	 	'class'	=> "form-control"
);




$Amenities = array(
	'name'	=> 'Amenities',
	'id'	=> 'Amenities',
	'value'	=> $Amenities,
	 
	'class'	=> "form-control"
);
 
 
 $Description = array(
	'name'	=> 'Description',
	'id'	=> 'Description',
	'value'	=> $Description,
	'rows'	=> "12",
	 'data-error-container'	=> "#editor1_error",
	'class'	=> "form-control"
);
  
										
 
 
$Detail = array(
	'name'	=> 'Detail',
	'id'	=> 'Detail',
	'value'	=> $Detail,
	'rows'	=> "12",
	 'data-error-container'	=> "#editor2_error",
	'class'	=> "form-control"
); 
 

$ProjectImages = array(
	'name'	=> 'ProjectImages',
	'id'	=> 'ProjectImages',
	'value'	=> $ProjectImages,
	'rows'	=> "12",
	 'data-error-container'	=> "#editor3_error",
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
 
 
 
 


$ParentCategoryID = array(   
	'name'	=> 'ParentCategoryID',
	'list'  => $categorylist,
        
	'selected' => $selected_item_category
);

 

$ProjectType = array(   
	'name'	=> 'ProjectType',
	'list'  => $Typelist,
        
	'selected' => $selected_item_ProjectType
);

$ProjectStatus = array(   
	'name'	=> 'ProjectStatus',
	'list'  => $Statuslist,
        
	'selected' => $selected_item_ProjectStatus
);
  
?>
									
                                    
<?php echo form_open_multipart($this->uri->uri_string(),array("id"=>"form_sample_1","class"=>"form-horizontal"));
 echo  form_hidden('ProjectID',$ProjectID);    
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
                                                               <label class="control-label col-md-2"><b>Category</b>
										 
										</label>
										<div class="col-md-5">
                                        
                                         
                                          
											 <?php echo form_dropdown($ParentCategoryID['name'], $ParentCategoryID['list'], $ParentCategoryID['selected'], 'id="form_2_select2" class="form-control select2me" required="required"'); ?>
                                             
                                             
                                             
                                      
											 
										</div>
                                                               
                                                               
                                                               
                                                               
                                                               <label class="control-label col-md-2"><b>Sub Category</b>
										 
										</label>
										<div class="col-md-2">
                                        <select id="form_3_select2" name="SubCategoryID" class="form-control select2me">
                                             <option value="">Select</option>
                                             <?php foreach($subcategorylist  as $row) {?>
                                             <option <?php echo ($selected_item_subcategory==$row["ID"]) ? "selected" : "";?> value="<?php echo $row["ID"];?>" class="<?php echo $row["ParentID"];?>"><?php echo $row["Name"];?></option>
                                             <?php } ?>
                                             </select>
										</div>
                                                               
                                                               
                                                               
									</div>
                        
                        
                        
                         <div class="form-group">
                                                               <label class="control-label col-md-2"><b>Type </b>
										 
										</label>
										<div class="col-md-5">
                                        
                                         
                                          
											 <?php echo form_dropdown($ProjectType['name'], $ProjectType['list'], $ProjectType['selected'], 'class="form-control select2me" required="required"'); ?>
                                             
                                             
                                             
                                      
											 
										</div>
                                                               
                                                               
                                                               
                                                               
                                                               <label class="control-label col-md-2"><b>Status</b>
										 
										</label>
										<div class="col-md-2">
                                          <?php echo form_dropdown($ProjectStatus['name'], $ProjectStatus['list'], $ProjectStatus['selected'], 'class="form-control select2me" required="required"'); ?>
										</div>
                                                               
                                                               
                                                               
									</div>
                                    
                                    
                                    
                                     
                        		 	 
									
                                <div class="form-group">
										<label class="control-label col-md-2"><b>Title</b>
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-6">
                                        
                                        <?php echo form_input($ProjectTitle); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($ProjectTitle['name'])); ?> </span> 
											 
										</div>
                                    
                                     
                                    
									</div>  
                                             
											 
											                        
                                 <div class="form-group">
										<label class="control-label col-md-2"><b>Location</b>
										 
										</label>
										<div class="col-md-6">
                                        
                                        <?php echo form_input($Location); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($Location['name'])); ?> </span> 
											 
											 	
											
										</div>
                                    
                                          
									</div>  
									
									<div class="form-group">
										<label class="control-label col-md-2"><b>Price</b>
									 
										</label>
										<div class="col-md-6">
                                        
                                        <?php echo form_input($Price); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($Price['name'])); ?> </span> 
											
											 
										</div>
                                    
                                          
									</div>
									                                 
                                <div class="form-group">
										<label class="control-label col-md-2"><b>Area</b>
									 
										</label>
										<div class="col-md-6">
                                        
                                        <?php echo form_input($AreaSF); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($AreaSF['name'])); ?> </span> 
											
											<span class="help-block">
												 in Square foot
											</span> 
										</div>
                                    
                                          
									</div>                                    
                                                                    
                                                                    
                                             
                                             
                                             
                               <div class="form-group">
										<label class="control-label col-md-2"><b>Bath</b>
										 
										</label>
										<div class="col-md-6">
                                        
                                        <?php echo form_input($Bath); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($Bath['name'])); ?> </span> 
											 
										</div>
                                    
                                          
									</div>              
                                             
                                             
                                             
                                             
                               <div class="form-group">
										<label class="control-label col-md-2"><b>Bed</b>
										 
										</label>
										<div class="col-md-6">
                                        
                                        <?php echo form_input($Bed); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($Bed['name'])); ?> </span> 
											 
										</div>
                                    
                                          
									</div>              
                                             
                                             
                                             
                                             
                                             
                                             
                           <div class="form-group">
										<label class="control-label col-md-2"><b>Parking</b>
										 
										</label>
										<div class="col-md-6">
                                        
                                        <?php echo form_input($Parking); ?>
											 
                                             <span style="color: red;"><?php echo strip_tags(form_error($Parking['name'])); ?> </span> 
											 
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
                                    
                                  
                                                           
                                                                    
                                    <div class="form-group">
										<label class="control-label col-md-2"><b>Selected:</b>
										<span class="required">
											 
										</span>
										</label>
										<div class="col-md-3">
                                        
                                        <div class="radio-list">
											 
											<label class="radio-inline">
											<?php echo form_radio($IsSelected1); ?> Yes
                                            </label>
											<label class="radio-inline">
											<?php echo form_radio($IsSelected2); ?> No </label>
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
                                        
                                      	
                                        
                                         <?php echo form_textarea($Detail); ?>
                                        
											 <div id="editor1_error">
											</div>
                                             <span style="color: red;"><?php echo strip_tags(form_error($Detail['name'])); ?> </span> 
											 
										</div>
									</div>
                                    
                                    
                                     
                                   <div class="form-group">
										<label class="control-label col-md-1">Description
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-10">
                                        
                                      	
                                        
                                         <?php echo form_textarea($Description); ?>
                                        
											 <div id="editor1_error">
											</div>
                                             <span style="color: red;"><?php echo strip_tags(form_error($Description['name'])); ?> </span> 
											 
										</div>
									</div>
                                    
                               
                                    <div class="form-group">
										<label class="control-label col-md-1">Amenities
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-10">
                                        
                                      	
                                        
                                         <?php echo form_textarea($Amenities); ?>
                                        
											 <div id="editor1_error">
											</div>
                                             <span style="color: red;"><?php echo strip_tags(form_error($Amenities['name'])); ?> </span> 
											 
										</div>
									</div>
                                    
                                    
                                     
                                    
                                    
                                    <div class="form-group">
										<label class="control-label col-md-1">ProjectImages
										 
										</label>
										<div class="col-md-10">
                                        
                                      	
                                        
                                         <?php echo form_textarea($ProjectImages); ?>
                                        
											 <div id="editor1_error">
											</div>
                                             <span style="color: red;"><?php echo strip_tags(form_error($ProjectImages['name'])); ?> </span> 
											 
											 <span class="help-block">
												 Location Map, Floorplan, 3D View,......
											</span>
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
											 Recommended (w:  540px  h: 360px) 
										</p>
											 
										</div>
                                        
                                                                              <div class="col-md-2">
											
                                                                                  <?php  if(isset($Image) && strlen($Image)> 15) {?>        
                                                                                  <img height="50" src="<?php echo $this->config->item('site_url').$Thumbimage;?>" />
                                                                                  <a href="##" data-url="<?php echo site_url("project/imageremove/".$ProjectID);?>" id="removeimage">Remove</a>
                                                                                  
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
										<?php echo anchor("project", "Cancel", array("class"=>"btn default"));?> 
                                       
                                       
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