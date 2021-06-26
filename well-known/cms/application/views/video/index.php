
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2-metronic.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/data-tables/DT_bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			 
		 
			<!-- BEGIN PAGE HEADER-->
			 <div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Video <small>List</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
						 
                         <div class="actions">
								<a href="<?php echo site_url("video/videoentry");?>" class="btn default yellow-stripe">
									<i class="fa fa-plus"></i>
									<span class="hidden-480">
										 Add
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
							<a>
								Video List
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
					<!-- Begin: life time stats -->
					<div class="portlet">
						<div class="portlet-title">
							
							 
						</div>
						<div class="portlet-body">
							<div class="table-container">
								<div class="table-actions-wrapper">
									<span>
									</span>
									<select class="table-group-action-input form-control input-inline input-small input-sm">
										<option value="">Select...</option>
										<option value="Cancel">Delete</option>
                                                                                <option value="IsActive">Active</option>
                                                                                <option value="InActive">InActive</option>
										 
									</select>
									<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
								</div>
								<table class="table table-striped table-bordered table-hover" id="datatable_ajax"  data-url="<?php echo site_url("video/getlist");?>">
								<thead>
								<tr role="row" class="heading">
									<th width="5%">
										<input type="checkbox" class="group-checkable">
									</th>
									<th width="5%">
										 ID&nbsp;#
									</th>  
									<th width="15%">
										 Name
									</th>
									 
                                                                        
                                                                       
                                                                        
                                                                         <th width="15%">
										 IsActive
									</th>
                                                                        
                                                                     
                                                                       
                                                                        
                                                                        
                                                                        
									<th width="10%">
										 Actions
									</th>
									 
								</tr>
 								<tr role="row" class="filter">
									<td>
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="VideoID">
									</td>
									 
									<td>
										<input type="text" class="form-control form-filter input-sm" name="VideoName">
									</td>
									 									 
									 
                                                                        
                                                                          
                                                                        
								 
                                                                                                                        
                                                                                                                        
                                                                        <td>
                                                                            
                                                                           <select name="IsActive" class="form-control form-filter input-sm">
											<option value="">Select...</option>
											
                                            <option value="1">Yes</option> 
                                            <option value="0">No</option>
											 
										</select>
										 
									</td>
									<td>
										 
											<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
                                            <button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
										
										
									</td>
								</tr>
								</thead>
								<tbody>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
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
    
    
    
    
    <div class="modal fade" id="ajax" role="basic" aria-hidden="true">
								<div class="page-loading page-loading-boxed">
									<img src="<?php echo base_url();?>assets/img/loading-spinner-grey.gif" alt="" class="loading">
									<span>
										&nbsp;&nbsp;Loading...
									</span>
								</div>
								<div class="modal-dialog">
									<div class="modal-content">
									</div>
								</div>
							</div>
    
    
<?php  foreach($javascriptfile as $javascript_file) {?>
   <script src="<?php echo $javascript_file;?>" type="text/javascript"></script>
   <?php }
   
    ?>

    
    
    
    
    
    
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {    
           App.init();
		   
           TableAjax.init();
		   
        });
    </script>
<!-- END JAVASCRIPTS -->