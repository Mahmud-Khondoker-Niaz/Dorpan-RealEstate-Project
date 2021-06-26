<div id="bottombg"> 
   <div id="content">
      <div id="content_left">
	      <div class="aRow" style="padding:10px;">
	     
		  <script type='text/javascript' src='<?php echo base_url();?>js/jquery-1.10.1.min.js'></script>
		 <script type='text/javascript' src='<?php echo base_url();?>js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery.autocomplete.css" />
<script type="text/javascript">
$().ready(function() {
	
	$("#Email").autocomplete("<?php echo base_url();?>basicsetup/email_ajax", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	
	
	 
});

</script>
         <?php
 
$active1 = array(   
	'name'	=> 'IsActive',
	 
	'value'	=> 1,
	'checked'     => ($IsActive ==1 ) ? TRUE : FALSE 
 
);
 $active2 = array(   
	'name'	=> 'IsActive',
	 
	'value'	=> 0,
	'checked'     => ($IsActive == 0 ) ? TRUE : FALSE,
);


 
$email = array(   
	'name'	=> 'Email',
	'id'	=> 'Email',
	'value'	=> $Email,
	'maxlength'	=> 100,
	'size'	=> 30,
);


 
$contact = array(   
	'name'	=> 'ContactNumber',
	'id'	=> 'ContactNumber',
	'value'	=> $ContactNumber,
	'maxlength'	=> 100,
	'size'	=> 30,
);

 

$Representative = array(   
	'name'	=> 'RepresentativeName',
	'id'	=> 'RepresentativeName',
	'value'	=> $RepresentativeName,
	'maxlength'	=> 100,
	'size'	=> 30,
);

 
 
 
$serial = array(
	'name'	=> 'Priority',
	'id'	=> 'Priority',
	'value'	=> $Priority,
	'maxlength'	=> 100,
	'size'	=> 30,
);

?>

          
<?php echo form_open_multipart($this->uri->uri_string());    echo  form_hidden('RepresentativeID',$RepresentativeID);  
 ?>
<table bgcolor="#EEEEEE" border="0" cellspacing="2" cellpadding="10" width="650">
	
    <tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Email', $email['id']); ?></td>
		<td colspan="2"><?php echo form_input($email); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($email['name'])); ?> </span> 
        </td>
		
	</tr>
    
    <tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Representative Name', $Representative['id']); ?></td>
		<td colspan="2"><?php echo form_input($Representative); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($Representative['name'])); ?> </span> 
        </td>
		
	</tr>
    
    
        <tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Contact Number', $contact['id']); ?></td>
		<td colspan="2"><?php echo form_input($contact); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($contact['name'])); ?> </span> 
        </td>
		
	</tr>
    
 	
    
    <tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Priority', $serial['id']); ?></td>
		<td colspan="2"><?php echo form_input($serial); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($serial['name'])); ?> </span> 
        </td>
		
	</tr>
    
    
    <tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Active?'); ?></td>
		<td colspan="2"><?php echo form_radio($active1); ?> Yes <?php  echo form_radio($active2); ?> No 
        <span style="color: red;"><?php echo strip_tags(form_error($active1['name'])); ?></span>
        </td>
		
	</tr>
	 
    
    
 
    
    
      <tr bgcolor="#FFFFFF">
		<td colspan="3"><?php echo form_submit('Submit', 'Submit'); ?></td>
		 
	</tr>
    
</table>

<?php echo form_close(); ?>



         
         
         
         
         
         
         
         
         
		   </div>
	  </div>
	  <div id="content_right">
	     <div class="pRow">
	     
         
  Right
         
         
		  </div>
	  </div>
   </div>
   
  