<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	<h4 class="modal-title">Page</h4>
</div>
<div class="modal-body">
	<div class="row">
		<div class="col-md-12">
			 
			<p>
				<strong> PageName:</strong>  <?php echo $PageName;?>
			</p>
                        
                   
                        
                        <p>
				<strong> MetaTag:</strong>  <?php echo $MetaTag;?>
			</p>
                      
                      
               
                       <p>
				<strong> MetaDescription:</strong>  <?php echo $MetaDescription;?>
			</p>
                            
                        
			<p>
				<strong> Detail:</strong>  <?php echo isset($Detail)?$Detail:"";?>
			</p>
			 
		</div>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn default" data-dismiss="modal">Close</button>
	 
</div>