<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

h3{ margin-bottom:2px;}
.photo{
	position:absolute;
	background:#FFF;
	top:20px;
	right:20px;
	border:dashed 1px #666; 
	height:auto; 
	width:115px
	}
	
	
	.photo img {width:115px}
</style>
</head>

<body style="width:1004px; margin:5px auto;">

<div style="width:1000px; margin:0 auto; height:auto; overflow:hidden; border:solid 1px #999; padding:10px 0 20px 0; position:relative">

<div align="center" style="width:100%; height:70px; border-bottom:solid 2px #999">

<span style="font-size:20px; font-weight:bold;">Awareness Development Program For Hajji</span> <br />
<span style="font-size:18px;">Wamy Office Bangladesh</span>

</div>

<div style="width:100%; height:auto;">

 <div style="margin:10px 10px 0px 22px; width:200px; float:left; border-radius:4px; border:solid 1px #000; padding-left:5px; height:30px; line-height:30px;">PID: <?php echo $PID;?></div> 
 
 
 <div  style="margin:10px 10px 0px 22px; width:600px; float:left;">
 <div style="float:left; width:80px; border-radius:4px; border:solid 1px #000; padding-left:5px; height:30px; line-height:30px; margin-right:10px;">M: <?php if($Category=='M') {?>  <img src="<?php echo base_url();?>images/tick.gif" />  <?php } ?></div>
 <div style="float:left; width:80px; border-radius:4px; border:solid 1px #000; padding-left:5px; height:30px; line-height:30px;margin-right:10px;">W:  <?php if($Category=='W') {?>  <img src="<?php echo base_url();?>images/tick.gif" />  <?php } ?></div>
 
 <div style="float:left; width:80px; border-radius:4px; border:solid 1px #000; padding-left:5px; height:30px; line-height:30px;margin-right:10px;">S: <?php if($Category=='S') {?>  <img src="<?php echo base_url();?>images/tick.gif" />  <?php } ?> </div>
 
 <div style="float:left; width:80px; border-radius:4px; border:solid 1px #000; padding-left:5px; height:30px; line-height:30px;margin-right:10px;">R:  <?php if($Category=='R') {?>  <img src="<?php echo base_url();?>images/tick.gif" />  <?php } ?></div>
 
 
 </div>
 
 
</div>




<div style="width:96%; height:auto; overflow:hidden; margin:0 20px ">

 <h3>Personal Information</h3>
 
 <div style="width:954px; padding:1px; border:solid 2px #333; height:auto; overflow:hidden">
  
 
 <table width="954" cellpadding="4" cellspacing="1" bgcolor="#000000">
 <tr bgcolor="#FFFFFF">
 <td width="29">1.</td>
 <td width="206">Name of Hajji</td>
 <td colspan="5"><?php echo $Name;?></td>
  
 </tr>
 
 <tr bgcolor="#FFFFFF">
 <td>2.</td>
 <td>Father/Husband's Name</td>
 <td colspan="2"><?php echo $GName;?></td>
  <td width="130">Mother's Name</td>
   <td colspan="2"><?php echo $MName;?></td>
 </tr>
 
  <tr bgcolor="#FFFFFF">
 <td>3.</td>
 <td>Nationality</td>
 <td width="143"><?php echo $Nationality;?></td>
  <td width="192">Date of Birth</td>
  <td width="130"><?php echo date("d M, Y",strtotime($BDate));?></td>
   <td width="81">Age</td>
    <td width="107">
	<?php   
	$birthDate =  explode("/",date("m/d/Y",strtotime($BDate)));  
	$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y")-$birthDate[2])-1):(date("Y")-$birthDate[2]));
	echo  $age.' Years';
	
	?></td>
 </tr>
 
 
 
   <tr bgcolor="#FFFFFF">
 <td>4.</td>
 <td>Education Qualification</td>
 <td><?php echo $Nationality;?></td>
  <td>Profession</td>
  <td><?php echo $Profession;?></td>
   <td></td>
    <td></td>
 </tr>
 
 
   <tr bgcolor="#FFFFFF">
 <td>5.</td>
 <td>Married/Unmarried</td>
 <td><?php echo $MStatus;?></td>
  <td colspan="2">Male/Female</td>
   
   <td colspan="2"><?php echo $Gender;?></td>
    
 </tr>
 
 
  <tr bgcolor="#FFFFFF">
 <td width="29">6.</td>
 <td width="206">Address (Present)</td>
 <td colspan="5"><?php echo $PAddress;?></td>
  
 </tr>
 
 
 <tr bgcolor="#FFFFFF">
 <td rowspan="2">7. </td>
 <td rowspan="2">Address (Permanent)</td>
 <td> Village</td>
  <td><?php echo $Village;?></td>
  <td>Post Office</td>
   <td colspan="2"> <?php echo $PostOffice;?></td>
   
 </tr>
 
  <tr bgcolor="#FFFFFF">
 <td> Thana</td>
  <td><?php echo $ThanaID;?></td>
  <td>District</td>
   <td colspan="2"><?php echo $District;?></td>
   
 </tr>
 
 
 
 
   <tr bgcolor="#FFFFFF">
 <td width="29">8.</td>
 <td width="206">Mobile</td>
 <td colspan="2"><?php echo $Mobile;?></td>
   <td>Email</td>
    <td colspan="2"><?php echo $Email;?></td>
 </tr>
 
  
   <tr bgcolor="#FFFFFF">
 <td width="29">9.</td>
 <td width="206">Last Hajj</td>
 <td colspan="2"><?php echo $LHajj;?></td>
   <td>Last Travel</td>
    <td colspan="2"><?php echo $LTravel;?></td>
 </tr>
 
  
   <tr bgcolor="#FFFFFF">
 <td width="29">10.</td>
 <td width="206">Blood Group</td>
 <td colspan="2"><?php echo $BGroup;?></td>
   <td></td>
    <td colspan="2"></td>
 </tr>
 
  
   <tr bgcolor="#FFFFFF">
 <td width="29">11.</td>
 <td width="206">Name of Moharram</td>
 <td colspan="2"><?php echo $Moharram;?></td>
   <td>Relation</td>
    <td colspan="2"><?php echo $Relation;?></td>
 </tr>
 
 
 
 
 
 
 
 </table>
 
 </div>
 
 <h3>Nominee Information</h3>
 
 <div style="width:954px; padding:1px; border:solid 2px #333; height:auto; overflow:hidden">
  
 
 <table width="954" cellpadding="2" cellspacing="1" bgcolor="#000000">
 
 
  <tr bgcolor="#FFFFFF">
 <td width="29">12.</td>
 <td width="206">Name of Nominee</td>
 <td colspan="2"><?php echo $NomineeName;?></td>
   <td>Relation</td>
    <td colspan="2"><?php echo $NRelation;?></td>
 </tr>
 
 
   <tr bgcolor="#FFFFFF">
 <td width="29">13.</td>
 <td width="206">Contract No</td>
 <td colspan="2"><?php echo $NMobile;?></td>
   <td>Email</td>
    <td colspan="2"><?php echo $NEmail;?></td>
 </tr>
 
   <tr bgcolor="#FFFFFF">
 <td width="29">14.</td>
 <td width="206">Local Representative</td>
 <td colspan="2" width="335"><?php echo $Representative;?></td>
   <td width="130">Area</td>
    <td colspan="2" width="188" ><?php echo $Area;?></td>
 </tr>
 
 </table>
 </div>
 
 
 
  <h3>Money Information</h3>
 
 <div style="width:954px; padding:1px; border:solid 2px #333; height:auto; overflow:hidden">
  
 
 <table width="954" cellpadding="2" cellspacing="1" bgcolor="#000000">
  
 
  <tr bgcolor="#FFFFFF">
 <td width="29"></td>
 <td width="206">Installment </td>
 <td colspan="2" width="335">Amount</td>
   <td width="130">Branch</td>
    <td width="188" colspan="2">Date</td>
 </tr>
 
  <tr bgcolor="#FFFFFF">
 <td width="29">15.</td>
 <td width="206">First </td>
 <td colspan="2"><?php echo ($FAmount>0)?$FAmount:'';?></td>
   <td><?php echo $FBranch;?></td>
    <td colspan="2"><?php echo ($FDate !='0000-00-00') ? $FDate:'';?></td>
 </tr>
 
 
  <tr bgcolor="#FFFFFF">
 <td width="29">16.</td>
 <td width="206">Second </td>
 <td colspan="2"><?php echo ($SAmount>0)?$SAmount:'';?></td>
   <td><?php echo $SBranch;?></td>
    <td colspan="2"><?php echo ($SDate !='0000-00-00') ? $SDate:'';?></td>
 </tr>
 
<tr bgcolor="#FFFFFF">
 <td width="29">17.</td>
 <td width="206">Third </td>
 <td colspan="2"><?php echo ($TAmount>0)?$TAmount:'';?></td>
   <td><?php echo $TBranch;?></td>
    <td colspan="2"><?php echo ($TDate !='0000-00-00') ? $TDate:'';?></td>
 </tr>
 
  <tr bgcolor="#FFFFFF">
 <td colspan="2">Total</td>
 
 <td colspan="2"><strong><?php echo $FAmount + $SAmount + $TAmount;?></strong></td>
   <td></td>
    <td colspan="2"></td>
 </tr>
 
 
  
 
 
 </table>
 </div>
 
 
 
  <h3>Passpost Information</h3>
 
 <div style="width:954px; padding:1px; border:solid 2px #333; height:auto; overflow:hidden">
  
 
 <table width="954" cellpadding="2" cellspacing="1" bgcolor="#000000">
  
  
 
 
  <tr bgcolor="#FFFFFF">
 <td width="29">18.</td>
 <td width="206">Passport No</td>
 <td width="143"><?php echo $PassportNo;?></td>
  <td width="192">Issue Date</td>
  <td width="130"><?php echo date("d M, Y", strtotime($IssueDate));?> </td>
   <td width="81">Expire Date</td>
    <td width="107"><?php echo date("d M, Y", strtotime($ExpireDate));?>  </td>
 </tr>
 
 
 
 <tr  bgcolor="#FFFFFF">
 <td colspan="3">Passport</td>
 <td colspan="4">Visa</td>
 
 </tr>
 

<tr  bgcolor="#FFFFFF">
 <td align="center" colspan="3">
 <img  width="200" src="<?php echo base_url();?><?php echo $File1;?>" />
 
 </td>
 <td align="center" colspan="4"><img width="200" src="<?php echo base_url();?><?php echo $File2;?>" /></td>
 
 </tr>
 
 
 
 
 </table>
 </div>
 
</div>


<div class="photo" ><img   src="<?php echo base_url();?><?php echo $Photo;?>" /></div>

</div>


</body>
</html>