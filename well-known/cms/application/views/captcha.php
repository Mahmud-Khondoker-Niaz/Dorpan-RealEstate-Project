<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

   
         <?php
$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => $username,
		 
		'size'	=> 30,
	);
 
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

          
<?php echo form_open_multipart($this->uri->uri_string()); ?>
<table bgcolor="#EEEEEE" border="0" cellspacing="2" cellpadding="10" width="650">
	 
	<tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Username', $username['id']); ?></td>
		<td colspan="2"><?php echo form_input($username); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($username['name'])); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></span> 
        </td>
		
	</tr>
	     
 
	<tr bgcolor="#FFFFFF">
		<td colspan="3">
			<p>Enter the code exactly as it appears:</p>
			<?php echo $captcha_html; ?>
		</td>
	</tr>
	<tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
		<td colspan="2"><?php echo form_input($captcha); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($captcha['name'])); ?></span>
        </td>
		

	</tr>
	 
    
    
      <tr bgcolor="#FFFFFF">
		<td colspan="3"><?php echo form_submit('register', 'Register'); ?></td>
		 
	</tr>
    
</table>

<?php echo form_close(); ?>



         
         
         
         
         
         
         
         
         
		    









</body>
</html>








 
  