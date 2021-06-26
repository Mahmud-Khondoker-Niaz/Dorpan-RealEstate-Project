
  <div id="bottombg"> 
   <div id="content">
    
     
     
    <div align="left" id="recordcontent">
          <style type="text/css">
 
 
 
 
.dd3-content { display: block; height: 30px; margin: 5px 0; padding: 5px 10px 5px 40px; color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
    background: #fafafa;
    background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
    background:    -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
    background:         linear-gradient(top, #fafafa 0%, #eee 100%);
    -webkit-border-radius: 3px;
            border-radius: 3px;
    box-sizing: border-box; -moz-box-sizing: border-box;
}
.dd3-content:hover { color: #2ea8e5; background: #fff; }

.dd-dragel > .dd3-item > .dd3-content { margin: 0; }

.dd3-item > button { margin-left: 30px; }
 

.box {
border: 1px solid #e5e5e5;
background: #fafafa;
margin-bottom: 10px;
}

.box h2 {
margin: 0;
font: 12px Tahoma, sans-serif;
color: #902452;
font-weight: bold;
padding: 10px;
border-bottom: 1px solid #eee;
}

.box > div {
padding: 10px;
color: #555;
font: 11px/1.8 Tahoma, sans-serif;
}

p:last-child {
margin-bottom: 0;
}



#menu-title, #menu-url, #menu-class {
width: 90%;
}
form input[type="text"], form input[type="email"], form input[type="password"], form select, form textarea {
border: 1px solid #ddd;
padding: 5px 4px;
}
input, button, select, textarea {
font: 11px/15px Tahoma, sans-serif;
}

form p {
clear: left;
margin-bottom: 0;
padding: 3px 0;
width: 100%;
}

form p label {
display: block;
cursor: pointer;
font: 11px Tahoma, sans-serif;
font-weight: bold;
color: #555;
vertical-align: middle;
padding: 4px 2px;
margin-right: 10px;
}

.button.green {
border: 1px solid #3b6e22;
background: #75ae5c;
background: -webkit-gradient(linear, 0 0, 0 bottom, from(#75ae5c), to(#649552));
background: -moz-linear-gradient(#75ae5c, #649552);
background: linear-gradient(#75ae5c, #649552);
}
.button.small {
font-weight: normal;
padding: 4px 5px;
text-shadow: none;
}
.button:hover {
opacity: 0.9;
-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)";
filter: alpha(opacity=90);
}
.button {
font: 11px Tahoma, sans-serif;
font-weight: bold;
color: #fff;
display: inline-block;
zoom: 1;
vertical-align: baseline;
margin: 0 3px 0 1px;
outline: none;
cursor: pointer;
text-align: center;
padding: 5px 6px;
width: auto;
overflow: visible;
-webkit-box-shadow: inset 0 1px 1px rgba(255, 255, 255, .4), 1px 1px 1px #eee;
-moz-box-shadow: inset 0 1px 1px rgba(255, 255, 255, .4), 1px 1px 1px #eee;
box-shadow: inset 0 1px 1px rgba(255, 255, 255, .4), 1px 1px 1px #eee;
}





    </style>
	     
		
		  
           
         
          <div style='float:left; width:90%'>
          
          
          <div style="height:auto; overflow:hidden"><div class="dd3-content" id='savebutton' style="padding-left:10px; float:left; margin-right:20px"><a href="<?php echo site_url("basicsetup/sitesetup");?>">Back</a> </div>
           
          
          </div>
          
          <p>&nbsp;
          </p>
          
          
           
          
          <div>  <?php
 
      
 
$SiteName = array(
	'name'	=> 'SiteName',
	'id'	=> 'SiteName',
	'value'	=> $SiteName,
	 
	'size'	=> 100,
);

$HomePageTitle = array(
	'name'	=> 'HomePageTitle',
	'id'	=> 'HomePageTitle',
	'value'	=> $HomePageTitle,
	 
	'size'	=> 100,
);

$MetaTag = array(
	'name'	=> 'MetaTag',
	'id'	=> 'MetaTag',
	'value'	=> $MetaTag,
	 
	'size'	=> 100,
);

$MetaDescription = array(
	'name'	=> 'MetaDescription',
	'id'	=> 'MetaDescription',
	'value'	=> $MetaDescription,
	'cols'	=> 100,
	'rows'	=> 8,
);


$GoogleAnalytics = array(
	'name'	=> 'GoogleAnalytics',
	'id'	=> 'GoogleAnalytics',
	'value'	=> $GoogleAnalytics,
	'cols'	=> 100,
	'rows'	=> 8,
);







?>
          <section class="box">
					<!--<h2>Demo</h2>-->
					<div>
						 <strong><?php    echo $message; ?></strong>
                         <span style="color: red;"><?php  echo strip_tags(form_error($SiteName['name'])); ?> </span>
                         <span style="color: red;"><?php  echo strip_tags(form_error($HomePageTitle['name'])); ?> </span>
                         <span style="color: red;"><?php  echo strip_tags(form_error($MetaTag['name'])); ?> </span>
                         <span style="color: red;"><?php  echo strip_tags(form_error($MetaDescription['name'])); ?> </span>
                         <span style="color: red;"><?php  echo strip_tags(form_error($GoogleAnalytics['name'])); ?> </span>
                      
					</div>
				</section>
                
                 
                <section class="box">
					<h2>Site Setup</h2>
					 <div>
                    
                    
                  
                    
                    
                    
                    
                    
                    <?php echo form_open_multipart($this->uri->uri_string());    
 ?> 
							<p>
								<label for="menu-title"><?php echo form_label('Site Name', $SiteName['id']); ?></label>
								<?php echo form_input($SiteName); ?>
                                
							</p>
							<p>
								<label for="menu-url"><?php echo form_label('HomePage Title', $HomePageTitle['id']); ?></label>
								<?php echo form_input($HomePageTitle); ?>
                                
							</p>
							
                            <p>
								<label for="menu-class"><?php echo form_label('Meta Tag', $MetaTag['id']); ?></label>
								<?php echo form_input($MetaTag); ?>
                               
							</p>
                            
                                <p>
								<label for="menu-class"><?php echo form_label('Meta Description', $MetaDescription['id']); ?></label>
								<?php echo form_textarea($MetaDescription); ?>
                                 
							</p>
                            
                             <p>
								<label for="menu-class"><?php echo form_label('Google Analytics', $GoogleAnalytics['id']); ?></label>
								<?php echo form_textarea($GoogleAnalytics); ?>
                                 
							</p>
                              
                                
                            
                            <p>
								<label for="menu-class"><?php echo form_label('SiteBanner'); ?></label>
								 
                                <?php echo form_upload(array("name"=>'SiteBanner',"accept"=>'image/*')); ?> 
							</p>
                            
                            
                            <p>
								<label for="menu-class"><?php echo form_label('Logo'); ?></label>
								 
                                <?php echo form_upload(array("name"=>'Logo',"accept"=>'image/*')); ?> 
							</p>
                            
                           
                            <p>
								<label for="menu-class"><?php echo form_label('FavIcon'); ?></label>
								 
                                <?php echo form_upload(array("name"=>'FavIcon',"accept"=>'image/*')); ?> 
							</p>
                            
                            
                            
							<p class="buttons">
                            <br/>
								   
                                
                                
								<button id="add-menu" type="submit" class="button green small">Save</button>
							</p>
						<?php echo form_close(); ?>

					</div>
				</section>
          </div>
          
          
          </div>
          
          
          
          
          
 
    
    
    
    
    
    
    
    
    
    
           
           
           </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
	   
   </div>
   
  