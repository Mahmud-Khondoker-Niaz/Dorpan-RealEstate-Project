<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	<h4 class="modal-title">Content</h4>
</div>
<div class="modal-body">
	<div class="row">
		<div class="col-md-12">
			<h4>Management</h4>
				<p>
				<strong> Title:</strong>  <?php echo $PartnerName;?>
			</p>
                 
				 
				 
                 
				 
				     <p>
				<strong> Image:</strong>  <img src="<?php echo $this->config->item('site_url').$Image;?>" width="100"/>
			</p>
			
			
			
			 <p>
				<strong> URL:</strong>  <?php echo $PartnerLink;?>
			</p>
                 
				 
				 
		</div>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn default" data-dismiss="modal">Close</button>
	<button type="button" class="btn blue">Save changes</button>
</div>