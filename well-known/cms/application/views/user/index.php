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
			 
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					User <small> List</small>
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
								<i class="fa fa-globe"></i>User List &nbsp;  <?php echo "<span style='color:red'>".$message."</span>";?>
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
                                                                            <a href="<?php echo site_url("siteadmin/register");?>">Add New</a> <i class="fa fa-plus"></i>
									</button>
								</div>
								<div class="btn-group pull-right">
									<button class="btn dropdown-toggle" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="#" class="deleteuser">
												 Delete
											</a>
										</li>
										 
									</ul>
								</div>
							</div>
                            
                            
                            <?php echo form_open_multipart(site_url("user/userdelete"),array("id"=>"userlist","class"=>""));    
 ?>  
                            
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
								</th>
								<th>
									 username
								</th>
								<th>
									 email
								</th>
								<th>
									 Active
								</th>
                                
                                <th>
									 Banned
								</th>
								 
								<th>
									Edit
								</th>
							</tr>
							</thead>
							<tbody>
							
                                                          <?php foreach($userlist as $row) {?>  
                                                            
                                                            <tr class="odd gradeX">
								<td>
                                                                        <input type="checkbox" name="id[]" class="checkboxes" value="<?php echo $row["id"];?>"/>
								</td>
								<td>
									 <?php echo $row["username"];?>
								</td>
								<td>
									 
										<?php echo $row["email"];?>
									 
								</td>
								<td>
									<?php echo $row["activated"];?>
								</td>
								 
                                 <td>
									<?php echo $row["banned"];?>
								</td>
								 
                                 
								<td>
								 	
                                                                  <?php echo anchor("user/edit/".$row["id"],"Edit"); ?>  
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
   <?php if(isset($codemanage)&& $codemanage== "user_list") {?>
    TableManaged.init();
   
   $('.deleteuser').click(function(e) {
    if(window.confirm("Are You Sure?")) {
    $('#userlist').submit(); // trigget the submit handler
    }
	e.preventDefault(); // prevent the link's default behaviour
});
   
    
   <?php }?>
   
   
   
   
});
</script>
<!-- END JAVASCRIPTS -->
