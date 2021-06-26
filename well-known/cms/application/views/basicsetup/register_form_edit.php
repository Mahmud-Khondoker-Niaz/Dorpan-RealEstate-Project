<div id="bottombg"> 
   <div id="content">
      <div id="content_left">
	      <div class="aRow" style="padding:10px;">
	     
         <?php
$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => $username,
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
$banned1 = array(   
	'name'	=> 'banned',
	 
	'value'	=> 1,
	'checked'     => ($banned ==1 ) ? TRUE : FALSE 
 
);
 $banned2 = array(   
	'name'	=> 'banned',
	 
	'value'	=> 0,
	'checked'     => ($banned == 0 ) ? TRUE : FALSE,
);


 


$email = array(   
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> $email,
	'maxlength'	=> 80,
	'size'	=> 30,
);

 
$image_upload = array(
	'name'	=> 'image',
	'id'	=> 'image'
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
$infoid = array(
	'name'	=> 'id',
	 
	'value'	=> $id
);

?>

          
<?php    echo form_open_multipart('user/save');  echo  form_hidden('id',$id);  
 ?>
<table bgcolor="#EEEEEE" border="0" cellspacing="2" cellpadding="10" width="650">
	<tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Username', $username['id']); ?></td>
		<td colspan="2"><?php echo form_input($username); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($username['name'])); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></span> 
        </td>
		
	</tr>
	<tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Email Address', $email['id']); ?></td>
		<td colspan="2"><?php echo form_input($email); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($email['name'])); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></span>
        </td>
		
	</tr>
    
    
    <tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Banned'); ?></td>
		<td colspan="2"><?php echo form_radio($banned1); ?> Yes <?php  echo form_radio($banned2); ?> No 
        <span style="color: red;"><?php echo strip_tags(form_error($banned1['name'])); ?><?php echo isset($errors[$banned1['name']])?$errors[$banned1['name']]:''; ?></span>
        </td>
		
	</tr>
	 
    
    <tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Image', $image_upload['id']); ?></td>
		<td colspan="2"><?php echo form_upload($image_upload); ?>
        
        
        </td>
		
	</tr>

 
    
    
      <tr bgcolor="#FFFFFF">
		<td colspan="3"><?php echo form_submit('register', 'Register'); ?></td>
		 
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
   
  