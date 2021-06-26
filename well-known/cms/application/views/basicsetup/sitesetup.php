
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
          
          
          <div style="height:auto; overflow:hidden"><div class="dd3-content" id='savebutton' style="padding-left:10px; float:left; margin-right:20px"><a href="<?php echo site_url("basicsetup/sitesetupedit");?>">Edit Page</a> </div>
           
          
          </div>
          
          <p>&nbsp;
          </p>
          
          
           
          
          <div>
          <section class="box">
					<!--<h2>Demo</h2>-->
					<div>
						 <strong><?php echo $message; ?></strong>
                         
                        
					</div>
				</section>
                
                 
                <section class="box">
					<h2>Site Setup</h2>
					<div>
                    
                   
 
							<p>
								<label for="menu-title"><strong>Site Name</strong></label>:  <?php echo $SiteName;?>
								
                                 
                                
							</p>
							 
                            <hr />
                            
							
                              
                            
							<p>
								<label for="menu-title"><strong>Home Page Title</strong></label>:  <?php echo $HomePageTitle;?>
								
                                 
                                
							</p>
							 
                            <hr />
                            
                            
                            <p>
								<label for="menu-title"><strong>MetaTag</strong></label>:  <?php echo $MetaTag;?>
								
                                 
                                
							</p>
							 
                            <hr />
                            
                                   
                             
                             
                             <p>
								<label for="menu-title"><strong>MetaDescription</strong></label>:  <?php echo $MetaDescription;?>
								
                                 
                                
							</p>
							 
                            <hr />
                            
                            
                               
                            <p>
								<label for="menu-title"><strong>GoogleAnalytics</strong></label>: <br /> <code><?php echo htmlspecialchars($GoogleAnalytics);?></code>
								
                                 
                                
							</p>
							 
                            <hr />
                               
                            
                            <p>
								<label for="menu-title"><strong>SiteBanner</strong></label>: <br /> <img src="<?php echo base_url();?><?php echo $SiteBanner;?>" />
								
                                 
                                
							</p>
							 
                            <hr />
                            
                            
                           
                             
                              <p>
								<label for="menu-title"><strong>Logo</strong></label>: <br /> <img src="<?php echo base_url();?><?php echo $Logo;?>" /> 
								
                                 
                                
							</p>
							 
                            <hr />
                            
                             
                              <p>
								<label for="menu-title"><strong>FavIcon</strong></label>: <br /><img src="<?php echo base_url();?><?php echo $FavIcon;?>" /> 
								 
								
                                 
                                
							</p>
							 
                            <hr />
                             
                            
                            
						 

					</div>
				</section>
          </div>
          
          
          </div>
          
          
          
          
          
 
    
    
    
    
    
    
    
    
    
    
           
           
           </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
	   
   </div>
   
  