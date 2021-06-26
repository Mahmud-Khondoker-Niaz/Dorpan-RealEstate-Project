<?php
$Email = array(   
	'name'	=> 'Email',
	'id'	=> 'Email',
	'value'	=> $Email,
	'maxlength'	=> 200,
	'size'	=> 30,
	/*'placeholder'=>'Email',*/
	
	'AUTOCOMPLETE'=>'OFF' 
);

  if($user_level ==5) 
  		{
	  $Email['readonly'] = 'readonly';
	  } 
 
$PID = array(
	'name'	=> 'PID',
	'id'	=> 'PID',
	'value'	=> $PID,
	'maxlength'	=> 150,
	'size'	=> 30,
);

$Name = array(
	'name'	=> 'Name',
	'id'	=> 'Name',
	'value'	=> $Name,
	'maxlength'	=> 150,
	'size'	=> 30,
);

$GName = array(
	'name'	=> 'GName',
	'id'	=> 'GName',
	'value'	=> $GName,
	'maxlength'	=> 150,
	'size'	=> 30,
);


$MName = array(
	'name'	=> 'MName',
	'id'	=> 'MName',
	'value'	=> $MName,
	'maxlength'	=> 150,
	'size'	=> 30,
);



$Nationality = array(
	'name'	=> 'Nationality',
	'id'	=> 'Nationality',
	'value'	=> $Nationality,
	'maxlength'	=> 150,
	'size'	=> 30,
);

$BDate = array(
	'name'	=> 'BDate',
	'id'	=> 'BDate',
	'value'	=> $BDate,
	'maxlength'	=> 100,
	'size'	=> 30,
);



$EQualification = array(
	'name'	=> 'EQualification',
	'id'	=> 'EQualification',
	'value'	=> $EQualification,
	'maxlength'	=> 250,
	'size'	=> 30,
);


$Profession = array(
	'name'	=> 'Profession',
	'id'	=> 'Profession',
	'value'	=> $Profession,
	'maxlength'	=> 100,
	'size'	=> 30,
);







$MStatus1 = array(
	'name'	=> 'MStatus',
	 
	'value'	=> 'Married',
	'checked'     => ($MStatus =='Married' ) ? TRUE : FALSE 
);
$MStatus2 = array(
	'name'	=> 'MStatus',
	 
	'value'	=> 'UnMarried',
	'checked'     => ($MStatus == 'UnMarried' ) ? TRUE : FALSE 
);





$Gender1 = array(
	'name'	=> 'Gender',
	 
	'value'	=> 'Male',
	'checked'     => ($Gender == 'Male' ) ? TRUE : FALSE 
);
$Gender2 = array(
	'name'	=> 'Gender',
 
	'value'	=> 'Female',
	'checked'     => ($Gender == 'Female' ) ? TRUE : FALSE 
);
$Gender3 = array(
	'name'	=> 'Gender',
	 
	'value'	=> 'Other',
	'checked'  => ($Gender == 'Other' ) ? TRUE : FALSE 
);





$PAddress = array(
	'name'	=> 'PAddress',
	'id'	=> 'PAddress',
	'value'	=> $PAddress,
	'rows'	=> 4,
	'cols'	=> 12,
);


$District = array(   
	'name'	=> 'DistrictID',
	'id'	=> 'id="DistrictID"',  //  'id="shirts" onChange="some_function();"';
	'list'  => $Districtlist,
	'selected' => $selected_item
);



$Thana = array(
	'name'	=> 'ThanaID',
	 'id'	=> 'id="ThanaID"',
	'list'  => $Thanalist,
	'selected' => $selected_item_thana
);


               
              




$Village = array(
	'name'	=> 'Village',
	'id'	=> 'Village',
	'value'	=> $Village,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$PostOffice = array(
	'name'	=> 'PostOffice',
	'id'	=> 'PostOffice',
	'value'	=> $PostOffice,
	'maxlength'	=> 100,
	'size'	=> 30,
);


$Mobile = array(
	'name'	=> 'Mobile',
	'id'	=> 'Mobile',
	'value'	=> $Mobile,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$LHajj = array(
	'name'	=> 'LHajj',
	'id'	=> 'LHajj',
	'value'	=> $LHajj,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$LTravel = array(
	'name'	=> 'LTravel',
	'id'	=> 'LTravel',
	'value'	=> $LTravel,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$BGroup = array(
	'name'	=> 'BGroup',
	'id'	=> 'BGroup',
	 
	'list'  => array('A+'=>'A+', 'A-'=>'A-', 'B+'=>'B+', 'B-'=>'B-', 'AB+'=>'AB+', 'AB-'=>'AB-', 'O+'=>'O+', 'O-'=>'O-'),
	'selected' => $selected_item_blood
);



 


$Moharram = array(
	'name'	=> 'Moharram',
	'id'	=> 'Moharram',
	'value'	=> $Moharram,
	'maxlength'	=> 100,
	'size'	=> 30,
);


$Relation = array(
	'name'	=> 'Relation',
	'id'	=> 'Relation',
	'value'	=> $Relation,
	 
	'size'	=> 30,
);


$NomineeName = array(           
	'name'	=> 'NomineeName',
	'id'	=> 'NomineeName',
	'value'	=> $NomineeName,
	'maxlength'	=> 150,
	'size'	=> 30,
);
$NRelation = array(
	'name'	=> 'NRelation',
	'id'	=> 'NRelation',
	'value'	=> $NRelation,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$NMobile = array(
	'name'	=> 'NMobile',
	'id'	=> 'NMobile',
	'value'	=> $NMobile,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$NEmail = array(
	'name'	=> 'NEmail',
	'id'	=> 'NEmail',
	'value'	=> $NEmail,
	'maxlength'	=> 100,
	'size'	=> 30,
);
$Representative = array(      //////////////////////
	'name'	=> 'RepresentativeID',
	'id'	=> 'RepresentativeID',
	'list'	=> $Representativelist,
	'selected' => $selected_item_representative
);

 $Area = array(
	'name'	=> 'AreaID',
	'id'	=> 'AreaID',
	 
	'list'  => $Arealist,
	'selected' => $selected_item_area
);




 

$FAmount = array(
	'name'	=> 'FAmount',
	'id'	=> 'FAmount',
	'value'	=> $FAmount,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$FBranch = array(
	'name'	=> 'FBranch',
	'id'	=> 'FBranch',
	'value'	=> $FBranch,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$FDate = array(
	'name'	=> 'FDate',
	'id'	=> 'FDate',
	'value'	=> $FDate,
	'maxlength'	=> 100,
	'size'	=> 30,
);
 
 
 
 
 
$SAmount = array(
	'name'	=> 'SAmount',
	'id'	=> 'SAmount',
	'value'	=> $SAmount,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$SBranch = array(
	'name'	=> 'SBranch',
	'id'	=> 'SBranch',
	'value'	=> $SBranch,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$SDate = array(
	'name'	=> 'SDate',
	'id'	=> 'SDate',
	'value'	=> $SDate,
	'maxlength'	=> 100,
	'size'	=> 30,
);



 
 
 
$TAmount = array(
	'name'	=> 'TAmount',
	'id'	=> 'TAmount',
	'value'	=> $TAmount,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$TBranch = array(
	'name'	=> 'TBranch',
	'id'	=> 'TBranch',
	'value'	=> $TBranch,
	'maxlength'	=> 100,
	'size'	=> 30,
);

$TDate = array(
	'name'	=> 'TDate',
	'id'	=> 'TDate',
	'value'	=> $TDate,
	'maxlength'	=> 100,
	'size'	=> 30,
); 



$PassportNo = array(
	'name'	=> 'PassportNo',
	'id'	=> 'PassportNo',
	'value'	=> $PassportNo,
	'maxlength'	=> 100,
	'size'	=> 30,
); 
$IssueDate = array(
	'name'	=> 'IssueDate',
	'id'	=> 'IssueDate',
	'value'	=> $IssueDate,
	'maxlength'	=> 100,
	'size'	=> 30,
); 
$ExpireDate = array(
	'name'	=> 'ExpireDate',
	'id'	=> 'ExpireDate',
	'value'	=> $ExpireDate,
	'maxlength'	=> 100,
	'size'	=> 30,
); 


?>
  <div id="bottombg"> 
   <div id="content">
        <div align="center" id="recordcontent">
	    
             <link rel="stylesheet" href="<?php echo base_url();?>css/form.css" type="text/css" media="screen"/>
	 <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/sliding.form.js"></script>  
        
        <script type="text/javascript" src="<?php echo base_url();?>js/zebra_datepicker.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>css/zebra_datepicker.css" type="text/css">
        
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
	 
 
	
 $("#DistrictID").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;
//alert(dataString);
$.ajax
({
type: "POST",
url: "<?php echo site_url('record/thanaoption');?>",
data: dataString,
cache: false,
success: function(html)
{
	
	//alert(html);
$("#ThanaID").html(html);
}
});

});

	
	
	$('#BDate').Zebra_DatePicker({});
	
	$('#FDate').Zebra_DatePicker({});
	$('#SDate').Zebra_DatePicker({});
	$('#TDate').Zebra_DatePicker({});
	$('#IssueDate').Zebra_DatePicker({});
	$('#ExpireDate').Zebra_DatePicker({ direction: 1  });
	
	
	 
});

</script>
         
        
          <div id="wrappercontent">
          <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Person Info</a>
                        </li>
                        <li>
                            <a href="#">Nominee</a>
                        </li>
                        <li>
                            <a href="#">Money Info</a>
                        </li>
                        <li>
                            <a href="#">Passport</a>
                        </li>
						<li>
                            <a href="#">Confirm</a>
                        </li>
                    </ul>
                </div>
                <div id="steps">
                     
                    <?php echo form_open_multipart($this->uri->uri_string(), array('id'=>'formElem','name'=>'formElem','method'=>'post'));    ?>
 
                     
                        <fieldset class="step">
                            <legend>Personal Info</legend>
                            
                            <p>  
                               <?php  echo  form_hidden('InfoID',$InfoID);  ?>
                                <?php echo form_label('Email', $Email['id']); ?>
                                
                                 <?php echo form_input($Email); ?>    <span style="color: red;"><?php echo strip_tags(form_error($Email['name'])); ?> </span> 
                            </p>
                            
                             
                         

                            
                             <p>  
                               
                                <?php echo form_label('PID', $PID['id']); ?>
                                
                                 <?php echo form_input($PID); ?>    <span style="color: red;"><?php echo strip_tags(form_error($PID['name'])); ?> </span> 
                           	 </p>
                            
                            
                            
                           
 
                            
                              <p>  
                               
                                <?php echo form_label('Name of Hajji', $Name['id']); ?>
                                
                                 <?php echo form_input($Name); ?>    <span style="color: red;"><?php echo strip_tags(form_error($Name['name'])); ?> </span> 
                           	 </p>
                             
                           
                           

 

 
                           
                             <p>  
                               
                                <?php echo form_label('Father/Husband\'s Name', $GName['id']); ?>
                                
                                 <?php echo form_input($GName); ?>    <span style="color: red;"><?php echo strip_tags(form_error($GName['name'])); ?> </span> 
                           	 </p>
                             
                           <p>  
                               
                                <?php echo form_label('Mother\'s Name', $MName['id']); ?>
                                
                                 <?php echo form_input($MName); ?>    <span style="color: red;"><?php echo strip_tags(form_error($MName['name'])); ?> </span> 
                           	 </p>
                             
                             
                             <p>  
                               
                                <?php echo form_label('Nationality', $Nationality['id']); ?>
                                
                                 <?php echo form_input($Nationality); ?>    <span style="color: red;"><?php echo strip_tags(form_error($Nationality['name'])); ?> </span> 
                           	 </p>
                           
                             <p>  
                               
                                <?php echo form_label('Birth Date', $BDate['id']); ?>
                                
                                 <?php echo form_input($BDate); ?>    <span style="color: red;"><?php echo strip_tags(form_error($BDate['name'])); ?> </span> 
                           	 </p>
                             
                            
   
 


 
							 <p>  
                               
                                <?php echo form_label('Educational Qualification', $EQualification['id']); ?>
                                
                                 <?php echo form_input($EQualification); ?>    <span style="color: red;"><?php echo strip_tags(form_error($EQualification['name'])); ?> </span> 
                           	 </p>
                            
                            <p>  
                               
                                <?php echo form_label('Profession', $Profession['id']); ?>
                                
                                 <?php echo form_input($Profession); ?>    <span style="color: red;"><?php echo strip_tags(form_error($Profession['name'])); ?> </span> 
                           	 </p>
                            
                            
                             <p>  
                               
                                <?php echo form_label('Marital Status'); ?>
                                
                                <?php echo form_radio($MStatus1); ?> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo form_radio($MStatus2); ?> No     
                           	 </p>
                            
                            
                             <p>  
                               
                                <?php echo form_label('Gender'); ?>
                                
                                <?php echo form_radio($Gender1); ?> Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo form_radio($Gender2); ?> Female  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php  echo form_radio($Gender3); ?> Other   
                           	 </p>
                            
                            
                            <p>  
                               
                                <?php echo form_label('Present Address', $PAddress['id']); ?>
                                
                                 <?php echo form_textarea($PAddress); ?>    <span style="color: red;"><?php echo strip_tags(form_error($PAddress['name'])); ?> </span> 
                           	 </p>
                             
                             
                               <p>
                           <strong>  Permanent Address  </strong>
                             </p>
                             
                             
                                <p>  
                               
                                <?php echo form_label('District'); ?>
                                <?php echo form_dropdown($District['name'], $District['list'], $District['selected'] , $District['id']); ?>
                                  <span style="color: red;"><?php echo strip_tags(form_error($District['name'])); ?> </span> 
                           	 </p>
                            
                            
                            
 
 

 
 

                            
                              <p>  
                               
                                <?php echo form_label('Thana', $Thana['id']); ?>
                                
                                
                           	
                            <?php echo form_dropdown($Thana['name'], $Thana['list'], $Thana['selected'] , $Thana['id']); ?>  <span style="color: red;">  <?php echo strip_tags(form_error($Thana['name'])); ?> </span>
                            
                            
                            
                             </p>
                             
                            
                             <p>  
                               
                                <?php echo form_label('Village', $Village['id']); ?>
                                
                                 <?php echo form_input($Village); ?>    <span style="color: red;"><?php echo strip_tags(form_error($Village['name'])); ?> </span> 
                           	 </p>
                            
                              <p>  
                               
                                <?php echo form_label('POST', $PostOffice['id']); ?>
                                
                                 <?php echo form_input($PostOffice); ?>    <span style="color: red;"><?php echo strip_tags(form_error($PostOffice['name'])); ?> </span> 
                           	 </p>
                            
                              <p>  
                               
                                <?php echo form_label('Mobile', $Mobile['id']); ?>
                                
                                 <?php echo form_input($Mobile); ?>    <span style="color: red;"><?php echo strip_tags(form_error($Mobile['name'])); ?> </span> 
                           	 </p>
                            
                            
                              <p>  
                               
                                <?php echo form_label('Last Hajj', $PostOffice['id']); ?>
                                
                                 <?php echo form_input($LHajj); ?>    <span style="color: red;"><?php echo strip_tags(form_error($LHajj['name'])); ?> </span> 
                           	 </p>
                            
                            
                            
                          
                            <p>
                               <?php echo form_label('Last Travel:', $LTravel['id']); ?>
                               <?php echo form_input($LTravel); ?>    <span style="color: red;"><?php echo strip_tags(form_error($LTravel['name'])); ?> </span>
                            </p>
                          
                              <p>  
                               
                                <?php echo form_label('Blood Group:', $District['id']); ?>
                                <?php echo form_dropdown($BGroup['name'], $BGroup['list'], $BGroup['selected'] ); ?>
                                  
                           	 </p>
                            

  
                            <p>
                            <?php echo form_label('Moharram:', $Moharram['id']); ?>
                               <?php echo form_input($Moharram); ?>    <span style="color: red;"><?php echo strip_tags(form_error($Moharram['name'])); ?> </span>
                             
                            </p>
                            <p>
                             <?php echo form_label('Relation:', $Relation['id']); ?>
                               <?php echo form_input($Relation); ?>    <span style="color: red;"><?php echo strip_tags(form_error($Relation['name'])); ?> </span>
                            
                              
                            </p>

 

 

 

  
                            
               
                           
                            
                        </fieldset>
                        <fieldset class="step">
                            <legend>Nominee</legend>
                            <p>
                               
                                 <?php echo form_label('Nominee Name:', $NomineeName['id']); ?>
                               <?php echo form_input($NomineeName); ?>    <span style="color: red;"><?php echo strip_tags(form_error($NomineeName['name'])); ?> </span>
							</p>
                            
           
                            
                            <p>
                                  <?php echo form_label('Relation:', $NRelation['id']); ?>
                               <?php echo form_input($NRelation); ?>    <span style="color: red;"><?php echo strip_tags(form_error($NRelation['name'])); ?> </span>
                          </p>
                          
                            <p>  
							<?php echo form_label('Contract No:', $NMobile['id']); ?>
                               <?php echo form_input($NMobile); ?>    <span style="color: red;"><?php echo strip_tags(form_error($NMobile['name'])); ?> </span>
                              </p>
                          
                           
                           
                            <p>
                              
                              <?php echo form_label('Email:', $NEmail['id']); ?>
                               <?php echo form_input($NEmail); ?>    <span style="color: red;"><?php echo strip_tags(form_error($NEmail['name'])); ?> </span>
                         
                           </p>
                              <p>
                               
                                <?php echo form_label('Local Representative:', $Representative['id']); ?>
                              <?php echo form_dropdown($Representative['name'], $Representative['list'], $Representative['selected'] ); ?>
                                  <span style="color: red;"><?php echo strip_tags(form_error($Representative['name'])); ?> </span>                 </p>
                            
                             <p>
                               
                                  <?php echo form_label('Area:', $Area['id']); ?>
                              <?php echo form_dropdown($Area['name'], $Area['list'], $Area['selected'] ); ?>
                                  <span style="color: red;"><?php echo strip_tags(form_error($Area['name'])); ?> </span>                 </p>
                                     </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Money Info</legend>
                            <p>
                                <strong>First Installation</strong>
                            </p>
                            
                          <p>
                               <?php echo form_label('Amount:', $FAmount['id']); ?>
                               <?php echo form_input($FAmount); ?>    <span style="color: red;"><?php echo strip_tags(form_error($FAmount['name'])); ?> </span>
                       
                            </p>
                            <p>
                                 <?php echo form_label('Branch:', $FBranch['id']); ?>
                               <?php echo form_input($FBranch); ?>    <span style="color: red;"><?php echo strip_tags(form_error($FBranch['name'])); ?> </span>
                                    </p>
                            <p>
                                <?php echo form_label('Date:', $FDate['id']); ?>
                               <?php echo form_input($FDate); ?>    <span style="color: red;"><?php echo strip_tags(form_error($FDate['name'])); ?> </span>
                                       </p>
                            
                             <p>
                                <strong>Second Installation</strong>
                            </p>
                            
                            
                            
                             <p>
                               <?php echo form_label('Amount:', $SAmount['id']); ?>
                               <?php echo form_input($SAmount); ?>    <span style="color: red;"><?php echo strip_tags(form_error($SAmount['name'])); ?> </span>
                       
                            </p>
                            <p>
                                 <?php echo form_label('Branch:', $SBranch['id']); ?>
                               <?php echo form_input($SBranch); ?>    <span style="color: red;"><?php echo strip_tags(form_error($SBranch['name'])); ?> </span>
                                    </p>
                            <p>
                                <?php echo form_label('Date:', $SDate['id']); ?>
                               <?php echo form_input($SDate); ?>    <span style="color: red;"><?php echo strip_tags(form_error($SDate['name'])); ?> </span>
                                       </p>
                            
                            
                            
                             <p>
                                <strong>Third Installation</strong>
                            </p>
                            
                            
                            <p>
                               <?php echo form_label('Amount:', $TAmount['id']); ?>
                               <?php echo form_input($TAmount); ?>    <span style="color: red;"><?php echo strip_tags(form_error($TAmount['name'])); ?> </span>
                       
                            </p>
                            <p>
                                 <?php echo form_label('Branch:', $TBranch['id']); ?>
                               <?php echo form_input($TBranch); ?>    <span style="color: red;"><?php echo strip_tags(form_error($TBranch['name'])); ?> </span>
                                    </p>
                            <p>
                                <?php echo form_label('Date:', $TDate['id']); ?>
                               <?php echo form_input($TDate); ?>    <span style="color: red;"><?php echo strip_tags(form_error($TDate['name'])); ?> </span>
                                       </p>
 

                            
                        </fieldset>
                        <fieldset class="step">
                            <legend>Passport</legend>
                            <p>
                                  <?php echo form_label('Passport No:', $PassportNo['id']); ?>
                               <?php echo form_input($PassportNo); ?>    <span style="color: red;"><?php echo strip_tags(form_error($PassportNo['name'])); ?> </span>
                             
                               <!-- <select id="newsletter" name="newsletter">
                                    <option value="Daily" selected>Daily</option>
                                    <option value="Weekly">Weekly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Never">Never</option>
                                </select>-->
                            </p>
                            <p>
                                <?php echo form_label('Issue Date:', $IssueDate['id']); ?>
                               <?php echo form_input($IssueDate); ?>    <span style="color: red;"><?php echo strip_tags(form_error($IssueDate['name'])); ?> </span>
                               
                                
                            </p>
							<p>
                                
                                   <?php echo form_label('Expire Date:', $ExpireDate['id']); ?>
                               <?php echo form_input($ExpireDate); ?>    <span style="color: red;"><?php echo strip_tags(form_error($ExpireDate['name'])); ?> </span>
                               
                            </p>
                           
                            <p>
                                <label for="Passport">Passport</label>
                                 <input id="Passport" name="Passport" type="file" />
                            </p>
                             
                             <p>
                                <label for="Visa">Visa</label>
                                 <input id="Visa" name="Visa" type="file" />
                            </p>
                            
                            
                        </fieldset>
						<fieldset class="step">
                            <legend>Confirm</legend>
							<p>
								Everything in the form was correctly filled 
								if all the steps have a green checkmark icon.
								A red checkmark icon indicates that some field 
								is missing or filled out with invalid data. In this
								last step the user can confirm the submission of
								the form.
							</p>
                            <p class="submit">
                                <button id="registerButton" type="submit">Register</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                
            </div>
        
        
        
		   </div>
	 
   </div>
   
  