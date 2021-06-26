<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/jquery-nestable/jquery.nestable.css"/>
<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			 
		 
			<!-- BEGIN PAGE HEADER-->
			 <div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					News <small>List</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						 
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo site_url("home");?>">
								Home
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo site_url("category");?>">
								News List
							</a>
							 <i class="fa fa-angle-right"></i>
						</li>
                        
                        <li>
							 
								Order/Sort (<?php echo $CategoryName?>) 
							 
							 
						</li>
                        
                        
                        
                        
						 					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
            
             
             <div class="row">
				<div class="col-md-12">
					<h3>Output</h3>
					 
					<textarea readonly="readonly" id="nestable_list_3_output" class="form-control col-md-12 margin-bottom-10"></textarea>
				</div>
			</div>
             
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-sort"></i>News Sorting
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
                                
								<a href="javascript:;"  data-category="<?php echo $CategoryID;?>"  data-isparent="<?php echo $isParent;?>"  data-url="<?php echo site_url("news/powernewssave");?>" class="save">
								</a>
                                 
								<a href="javascript:;"  class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
                                                     
				 
                                                    
							<div class="dd" id="nestable_list_3">
								<?php 
                                                   if(isset($newslist)):             
                                    
                                                     echo '<ol class="dd-list">'; 
					 foreach($newslist as $key=>$news_list){
						  echo '<li class="dd-item dd3-item" data-id="'.$news_list['NewsID'].'">';
                  		  echo '<div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">'.   ($key+1)." >> ".$news_list['NewsID'] .'/'. $news_list['NewsTitle'] .'/'. $news_list['SubcategoryName'] .'</div>';
						  echo '</li>'; 
					 }
						   echo '</ol>'; 
                                                       
                                                       
                                                       
                                                       
                                                        endif;
                                                                ?>
							</div>
						</div>
					</div>
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
		 2014 &copy; Website
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

    
    
    
    
    
    
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {    
           App.init();
		   
            UINestable.init();
			
			
			
			
		   
        });
		
		
		
		 jQuery('body').on('click', '.portlet > .portlet-title > .tools > a.save', function (e) {
            e.preventDefault();
            var el = jQuery(this).closest(".portlet").children(".portlet-body");
            var url = jQuery(this).attr("data-url");
            var error = $(this).attr("data-error-display");
		
              var category = jQuery(this).attr("data-category");
               var isparent = jQuery(this).attr("data-isparent");
               
             
            if (url) {
		
                
                
             var message = $('textarea#nestable_list_3_output').val();
             
             
	     var dataString = 'news_id='+ message +'&category='+ category +'&isparent='+isparent;
		    
                  
                App.blockUI({target: el, iconOnly: true});
                $.ajax({
                    type: "POST",
                    data: dataString,
                    cache: false,
                    url: url,
                    dataType: "html",
                    success: function(res) 
                    {  
					
					                    
                        App.unblockUI(el);
                        alert(res);
                        //el.html(res);
                    },
                    error: function(xhr, ajaxOptions, thrownError)
                    {
                        App.unblockUI(el);
                        var msg = 'Error on reloading the content. Please check your connection and try again.';
                        if (error == "toastr" && toastr) {
                            toastr.error(msg);
                        } else if (error == "notific8" && $.notific8) {
                            $.notific8('zindex', 11500);
                            $.notific8(msg, {theme: 'ruby', life: 3000});
                        } else {
                            alert(msg);
                        }
                    }
                });
            } else {
                // for demo purpose
                App.blockUI({target: el, iconOnly: true});
                window.setTimeout(function () {
                    App.unblockUI(el);
                }, 1000);
            }            
        });
		
		
		
		
		
		
		
		
    </script>
<!-- END JAVASCRIPTS -->