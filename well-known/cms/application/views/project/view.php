<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	<h4 class="modal-title">News</h4>
</div>
<div class="modal-body">
	<div class="row">
		<div class="col-md-12">
			 
			<p>
				<strong> Title:</strong>  <?php echo $ProjectTitle;?>
			</p>
                        
                        <p>
				<strong> User:</strong>  <?php echo $uploader["username"]." | ". $uploader["email"];?>
			</p>
                        
                   <p>
				<strong> Image:</strong>  <img src="<?php echo $this->config->item('site_url').$Image;?>" width="200"/>
			</p>
                        
                        
			<p>
				<strong> Bath:</strong>  <?php echo $Bath;?>
			</p>
			
			<p>
				<strong> Bed:</strong>  <?php echo $Bed;?>
			</p>
			
			<p>
				<strong> Parking:</strong>  <?php echo  $Parking;?>
			</p>
			
			
			<p>
				<strong> Location:</strong>  <?php echo $Location;?>
			</p>
			 
		</div>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn default" data-dismiss="modal">Close</button>
	 
</div>