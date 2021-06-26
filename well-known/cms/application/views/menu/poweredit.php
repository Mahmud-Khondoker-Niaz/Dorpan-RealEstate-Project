<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/jquery-nestable/jquery.nestable.css"/>
<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			 
		 
			<!-- BEGIN PAGE HEADER-->
			 <div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Menu <small>Item</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
						 
                         <div class="actions">
								<a href="<?php echo site_url("menu/menuentry");?>" class="btn default yellow-stripe">
									<i class="fa fa-plus"></i>
									<span class="hidden-480">
										 Add
									</span>
								</a>
                             
                             <a href="<?php echo site_url("menu/".$nestedsubmenu);?>" class="btn default yellow-stripe">
									<i class="fa fa-edit"></i>
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
							<a href="<?php echo site_url("menu/".$nestedsubmenu);?>">
								Menu Item
							</a>
							 <i class="fa fa-angle-right"></i>
						</li>
                        
                        <li>
							<a>
								Order/Sort
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
					<h3>Output</h3>
					 
					<textarea readonly="readonly" id="nestable_list_3_output" class="form-control col-md-12 margin-bottom-10"></textarea>
				</div>
			</div>
             
			<div class="row">
				<div class="col-md-6">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-sort"></i>Category Item
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
                                
								<a href="javascript:;" data-url="<?php echo site_url("menu/powermenusave");?>" class="save">
								</a>
                                 
								<a href="javascript:;"  class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
                                                    <?php 
					   foreach($powermenulist as $data)   { 
                                            $thisref = &$refs[ $data['sect_id'] ]; 
                                            $thisref['sect_parent'] = $data['sect_parent']; 
                                            $thisref['sect_name'] = $data['sect_name']; 
                                            $thisref['sect_id'] = $data['sect_id']; 

                                            if ($data['sect_parent'] == 0) { 
                                                $list[ $data['sect_id'] ] = &$thisref; 
                                            } else { 
                                                $refs[ $data['sect_parent'] ]['children'][ $data['sect_id'] ] = &$thisref; 
                                            } 
                                        }				

				
				 function printTree($arr) { 
                                    if(!is_null($arr) && count($arr) > 0) { 
                                        echo '<ol class="dd-list">'; 
                                        foreach($arr as $node) { 

                                                                    echo '<li class="dd-item dd3-item" data-id="'.$node['sect_id'].'">';
                                               echo '<div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">'.  $node['sect_name'] .'</div>';



                                            if (array_key_exists('children', $node)) { 
                                                printTree($node['children']); 
                                            } 
                                            echo '</li>'; 
                                        } 
                                        echo '</ol>'; 
                                    } 
                                } 
                                     
                                function parseTree($root, $arr) { 
        $return = array(); 
        # Traverse the tree and search for direct children of the root 
        foreach($arr as $child => $parent) { 
            # A direct child is found 
            if($parent == $root) { 
                # Remove item from tree (we don't need to traverse this again) 
                unset($arr[$child]); 
                # Append the child into result array and parse it's children 
                $return[] = array( 
                    'name' => $child, 
                    'children' => $this->parseTree($child, $arr) 
                ); 
            } 
        } 
        return empty($return) ? null : $return;     
    } 
    
                                        
				 
				
				 
		 
				?>
                                                    
                                                    
							<div class="dd" id="nestable_list_3">
								<?php 
                                                   if(isset($list)):             
                                    printTree($list); 
                                    $result1 = parseTree(null, $list); 
                                    printTree($result1); 
                                    endif;
                                                                ?>
							</div>
						</div>
					</div>
				</div>
                
                <div class="col-md-6">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-sort"></i>Other
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
                                
							 
                                 
								<a href="javascript:;"  class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							 other
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
			
            if (url) {
		
                
                
             var message = $('textarea#nestable_list_3_output').val();
             
             
	     var dataString = 'menu_id='+ message ;
		    
                  
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
                        alert("Done");
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