<div id="bottombg"> 
   <div id="content">
      <div id="content_left">
	      <div class="aRow" style="padding:10px;">
	     
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


 


$Area = array(   
	'name'	=> 'AreaName',
	'id'	=> 'AreaName',
	'value'	=> $AreaName,
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

          
<?php echo form_open_multipart($this->uri->uri_string());    echo  form_hidden('AreaID',$AreaID);  
 ?>
<table bgcolor="#EEEEEE" border="0" cellspacing="2" cellpadding="10" width="650">
	<tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Area Name', $Area['id']); ?></td>
		<td colspan="2"><?php echo form_input($Area); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($Area['name'])); ?> </span> 
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
   
  