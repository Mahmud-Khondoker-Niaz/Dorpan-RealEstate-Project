<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2-metronic.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/data-tables/DT_bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
							 THEME COLOR
						</span>
						<ul>
							<li class="color-black current color-default" data-style="default">
							</li>
							<li class="color-blue" data-style="blue">
							</li>
							<li class="color-brown" data-style="brown">
							</li>
							<li class="color-purple" data-style="purple">
							</li>
							<li class="color-grey" data-style="grey">
							</li>
							<li class="color-white color-light" data-style="light">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
							 Layout
						</span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Header
						</span>
						<select class="header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar
						</span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar Position
						</span>
						<select class="sidebar-pos-option form-control input-small">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Footer
						</span>
						<select class="footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Branch <small> List</small>
					</h3>
					
                                        
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box light-grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Branch List
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
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="btn-group">
									<button id="sample_editable_1_new" class="btn green">
                                                                            <a href="<?php echo site_url("basicsetup/branchentry");?>">Add New</a> <i class="fa fa-plus"></i>
									</button>
								</div>
								<div class="btn-group pull-right">
									<button class="btn dropdown-toggle" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="#" class="deletebranch">
												 Delete
											</a>
										</li>
										 
									</ul>
								</div>
							</div>
                            
                            
                            <?php echo form_open_multipart(site_url("basicsetup/branchdelete"),array("id"=>"branchlist","class"=>""));    
 ?>  
                            
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
								</th>
								<th>
									 Branch
								</th>
								<th>
									 CreateDate
								</th>
								<th>
									 Active
								</th>
								<th>
									 Priority
								</th>
								<th>
									Edit
								</th>
							</tr>
							</thead>
							<tbody>
							
                                                          <?php foreach($branchlist as $row) {?>  
                                                            
                                                            <tr class="odd gradeX">
								<td>
                                                                        <input type="checkbox" name="BranchID[]" class="checkboxes" value="<?php echo $row["BranchID"];?>"/>
								</td>
								<td>
									 <?php echo $row["BranchName"];?>
								</td>
								<td>
									 
										<?php echo $row["CreateDate"];?>
									 
								</td>
								<td>
									<?php echo $row["IsActive"];?>
								</td>
								<td class="center">
									<?php echo $row["Priority"];?>
								</td>
								<td>
								 	
                                                                  <?php echo anchor("basicsetup/branchentry/".$row["BranchID"],"Edit"); ?>  
                                                                  <!--  <span class="label label-sm label-success">
                                                                            
									</span>-->
								</td>
							</tr>
							
                                                          <?php } ?>
							 
							</tbody>
							</table>
                            
                            </form>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
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
			 2014 &copy; DU.
		</div>
		<div class="footer-tools">
			<span class="go-top">
				<i class="fa fa-angle-up"></i>
			</span>
		</div>
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
   App.init();
   <?php if(isset($codemanage)&& $codemanage== "branch_list") {?>
    TableManaged.init();
   
   $('.deletebranch').click(function(e) {
    
    $('#branchlist').submit(); // trigget the submit handler
	e.preventDefault(); // prevent the link's default behaviour
});
   
    
   <?php }?>
   
   
   
   
});
</script>
<!-- END JAVASCRIPTS -->
