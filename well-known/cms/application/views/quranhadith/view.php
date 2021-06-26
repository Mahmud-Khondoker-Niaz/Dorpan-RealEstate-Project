<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	<h4 class="modal-title">Page</h4>
</div>
<div class="modal-body">
	<div class="row">
		<div class="col-md-12">
			 
			<p>
				<strong> Caption:</strong>  <?php echo $Caption;?>
			</p>
                        
                   <p>
				<strong> Category:</strong>  <?php  $type = array(1 => "Quran", 2 => "Hadith",0=>"");
  
      echo $type[$Category];?>
			</p>
                      
                         
                        
                        <p>
				<strong> Code:</strong>  <?php echo $Code;?>
			</p>
                      
                      
                  <p>
				<strong> ArabicText:</strong>   
			</p>
                    
                        <p dir="rtl" style="font-size: 25px;">
				  <?php echo $ArabicText;?>
			</p>
                            
                 <p>
				<strong> Date:</strong>  <?php echo $Date;?>
			</p> 
            
            
            
              <p>
				<strong> TranslatedText:</strong>  <?php echo $TranslatedText;?>
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