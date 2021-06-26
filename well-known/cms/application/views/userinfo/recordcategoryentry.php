<div id="bottombg"> 
   <div id="content">
      <div id="content_left">
	      <div class="aRow" style="padding:10px;">
	     
         <?php
 
 

  
						 
						 
						 


$PID = array(   
	'name'	=> 'PID',
	'id'	=> 'PID',
	'value'	=> $PID,
	'maxlength'	=> 100,
	'size'	=> 30,
	'autocomplete'=>'off'
);

 
 $Category = array(   
	'name'	=> 'Category',
	'id'	=> 'Category',
	'list'  => array('M'=>'M', 'W'=>'W','S'=>'S','R'=>'R'),
	'selected' => $selected_item
);

 
$DateStart = array(
	'name'	=> 'DateStart',
	'id'	=> 'DateStart',
	'value'	=> $DateStart,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$DateEnd = array(
	'name'	=> 'DateEnd',
	'id'	=> 'DateEnd',
	'value'	=> $DateEnd,
	'maxlength'	=> 100,
	'size'	=> 30,
);
?>




 <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.1.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/zebra_datepicker.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>css/zebra_datepicker.css" type="text/css">
        
		 <script type='text/javascript' src='<?php echo base_url();?>js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery.autocomplete.css" />
<script type="text/javascript">
$().ready(function() {
	 
	$("#PID").autocomplete("<?php echo base_url();?>recordcategory/pid_ajax", {
		
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	 
 
 
	
	
	$('#DateStart').Zebra_DatePicker({});
	
	$('#DateEnd').Zebra_DatePicker({});
	 
	
	
	 
});

</script>
         




          
<?php echo form_open_multipart($this->uri->uri_string());    echo  form_hidden('CategoryID',$CategoryID);  
 ?>
<table bgcolor="#EEEEEE" border="0" cellspacing="2" cellpadding="10" width="650">
 
        <tr bgcolor="#FFFFFF">
		<td><?php echo form_label('PID', $PID['id']); ?></td>
		<td colspan="2"><?php echo form_input($PID); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($PID['name'])); ?> </span> 
        </td>
		
	</tr>
    
 <tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Category', $Category['id']); ?></td>
		<td colspan="2"><?php echo form_dropdown($Category['name'], $Category['list'], $Category['selected'] ); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($Category['name'])); ?> </span> 
        </td>
		
	</tr>
    
     
    
 
    
    
     <tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Date Start', $DateStart['id']); ?></td>
		<td colspan="2"><?php echo form_input($DateStart); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($DateStart['name'])); ?> </span> 
        </td>
		
	</tr>
    
    
    
     <tr bgcolor="#FFFFFF">
		<td><?php echo form_label('Date End', $DateEnd['id']); ?></td>
		<td colspan="2"><?php echo form_input($DateEnd); ?>
        <span style="color: red;"><?php echo strip_tags(form_error($DateEnd['name'])); ?> </span> 
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
   
  