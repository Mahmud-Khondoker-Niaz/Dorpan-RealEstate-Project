<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	<h4 class="modal-title">News</h4>
</div>
<div class="modal-body">
	<div class="row">
		<div class="col-md-12">
			 
			<p>
				<strong> Title:</strong>  <?php echo $NewsTitle;?>
			</p>
                        
                        <p>
				<strong> User:</strong>  <?php echo $uploader["username"]." | ". $uploader["email"];?>
			</p>
                        
                        <p>
				<strong> Visitor:</strong>  <?php echo $visitor;?>
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