<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php echo isset($title) ? $title : "";?> | <?php echo $info["site_name"];?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->config->item('cdn');?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo  $this->config->item('cdn');?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo  $this->config->item('cdn');?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo  $this->config->item('cdn');?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo  $this->config->item('cdn');?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo  $this->config->item('cdn');?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo  $this->config->item('cdn');?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo  $this->config->item('cdn');?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo  $this->config->item('cdn');?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->







 
 





<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-boxed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner container">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="<?php echo base_url();?>">
			<img src="<?php echo base_url();?>assets/img/logo.png" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="<?php echo base_url();?>assets/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
		 
		 
			<!-- END INBOX DROPDOWN -->
			 
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="<?php echo base_url().$info["user_image"];?>"/>
					<span class="username">
						 <?php echo $info["user_name"];?>
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					  
					<li class="divider">
					</li>
					<li>
						<a href="javascript:;" id="trigger_fullscreen">
							<i class="fa fa-arrows"></i> Full Screen
						</a>
					</li>
                                        
                                        
                                        <li><a href="<?php echo site_url('siteadmin/change_password');?>"><i class="fa fa-lock"></i> Change Password</a>
						
						 
					</li>
                                        
					 
					<li>
						<a href="<?php echo site_url('siteadmin/logout/');?>">
							<i class="fa fa-key"></i> Log Out
						</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<div class="container">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
					<li class="sidebar-toggler-wrapper">
						<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
						<div class="sidebar-toggler hidden-phone">
						</div>
						<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					</li>
					<li class="sidebar-search-wrapper">
						<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
						<form class="sidebar-search" action="##" method="POST">
							<div class="form-container">
								<div class="input-box">
									<a href="javascript:;" class="remove">
									</a>
									<input type="text" placeholder="Search..."/>
									<input type="button" class="submit" value=" "/>
								</div>
							</div>
						</form>
						<!-- END RESPONSIVE QUICK SEARCH FORM -->
					</li>
					
                                        
                                        <li class="start ">
						<a href="<?php echo site_url("home");?>">
							<i class="fa fa-home"></i>
							<span class="title">
								Dashboard
							</span>
						</a>
					</li>
                                        
					<?php   if($this->tank_auth->get_userlevel()==9)      {?>  
					  
                                       <li class="<?php echo ($menu==2)?"active":""; ?>">
					<a href="javascript:;">
							<i class="fa fa-sitemap"></i>
							<span class="title">
								Basic Setup
							</span>
                                                        
                                                       <?php if($menu==2) {?>
                                                        <span class="selected">
							</span>
                                                        <?php } ?>
                                                        
                                                        
							<span class="arrow <?php echo ($menu==2)?"open":""; ?>">
							</span>
                                                        
                                                        
						</a>
					<ul class="sub-menu">
                                            
                                                <li class="<?php echo ($submenu=="user_list")?"active":""; ?>">
								<a href="<?php echo site_url("siteadmin/register");?>">
									<i class="fa fa-briefcase"></i>
									 <span class="badge badge-roundless page_list  badge-important user" data-url="<?php echo site_url("user");?>">
									List   <?php //echo site_url("user");?>
								</span>
									User
                                                                        
                                                                        
								</a>
                                                            
                                                            
                                                           
                                                            
							</li>
                                <li class="<?php echo ($submenu=="menusection_list")?"open":""; ?>">
					<a href="javascript:;">
					<i class="fa fa-cogs"></i>
                                                Menu Group
                                
                                        <span class="pull-right arrow <?php echo isset($nestedsubmenu)?"open":""; ?>">
					</span>
                                 							 
                                
                                        <span style="margin-right:10px;" class="pull-right badge badge-roundless page_list  badge-important user" data-url="<?php echo site_url("menusection");?>"> List    </span>       
					</a>
				<ul class="sub-menu" style="display: <?php echo isset($nestedsubmenu)?"block":""; ?>;">
								
                                    <?php foreach($info["nestedmenu"] as $row) {?>
                                    <li class="<?php echo isset($nestedsubmenu) && $nestedsubmenu ==  $row["ID"] ? "active":""; ?>">
					<a href="<?php echo site_url("menu/".$row["ID"]);?>">
					<i class="fa fa-user"></i>
					<?php echo $row["Name"];?>
										 
					</a>
									 
				    </li>
                                    <?php } ?>
								 
				</ul>
                            </li>
						 
						<li class="<?php echo isset($nestedcategory) ? "active":""; ?>">
							<a href="<?php echo site_url("category");?>">
								<i class="fa fa-folder-open"></i>
								Category
							</a>
						</li>
                                                
                                                
                                              
                                                
                                                <li class="<?php echo isset($nestedsitesetup) && ( $nestedsitesetup==1) ? "active":""; ?>">
							<a href="<?php echo site_url("sitesetup/1");?>">
								<i class="fa fa-folder-open"></i>
								Site Setup (Group)
							</a>
						</li>
                                              
                                              
                                              
                                                <li class="<?php echo isset($nestedsitesetup) && ( $nestedsitesetup==2) ? "active":""; ?>">
							<a href="<?php echo site_url("sitesetup/2");?>">
								<i class="fa fa-folder-open"></i>
								Site Setup (DPL)
							</a>
						</li>
					</ul>
				</li>
                                        
                                        
                                        
                                         <?php }?>  
                                        
                                        
                                        
                                        
					<li class="<?php echo ($menu==3)?"active":""; ?>">
						<a href="javascript:;">
							<i class="fa fa-cogs"></i>
							<span class="title">
								News/Event
							</span>
							
                             <?php if($menu==3) {?>
                                                        <span class="selected">
							</span>
                                                        <?php } ?>
                            
                            <span class="arrow <?php echo ($menu==2)?"open":""; ?>">
							</span>
						</a>
						<ul class="sub-menu">
							 
							<li class="<?php echo ($submenu=="news_list")?"active":""; ?>">
								<a href="<?php echo site_url("news/newsentry");?>">
                                            
                                            <span class="badge badge-roundless page_list  badge-important manpower" data-url="<?php echo site_url("news");?>">
                                                List   <?php //echo site_url("manpower");?>
                                            </span>
                                            
									News/Event Entry
								</a>
							</li>
							 
                           
                             
                             
                             <li class="<?php echo ($submenu=="news_list1")?"active":""; ?>">
								<a href="<?php echo site_url("news");?>">
                                            
                                          
                                            
									News/Event List
								</a>
							</li>
                             


								 



						</ul>
					</li>
					 
					 
                    
               
                    <li class="<?php echo ($menu==100)?"active":""; ?>">
						<a href="javascript:;">
							<i class="fa fa-cogs"></i>
							<span class="title">
								Page
							</span>
							
                             <?php if($menu==100) {?>
                                                        <span class="selected">
							</span>
                                                        <?php } ?>
                            
                            <span class="arrow <?php echo ($menu==100)?"open":""; ?>">
							</span>
						</a>
						<ul class="sub-menu">
							 
							<li class="<?php echo ($submenu=="news_list")?"active":""; ?>">
								<a href="<?php echo site_url("page/pageentry");?>">
                                            
                                            <span class="badge badge-roundless page_list  badge-important manpower" data-url="<?php echo site_url("page");?>">
                                                List   
                                            </span>
                                            
									Page Entry
								</a>
							</li>
							 
                           
                             
                             
                             <li class="<?php echo ($submenu=="page_list1")?"active":""; ?>">
								<a href="<?php echo site_url("page");?>">
                                            
                                          
                                            
									Page List
								</a>
							</li>
                             
 

						</ul>
					</li>
                    
                    
                     
                    
                   
                   <li class="<?php echo ($menu==101)?"active":""; ?>">
						<a href="javascript:;">
							<i class="fa fa-cogs"></i>
							<span class="title">
								Project
							</span>
							
                             <?php if($menu==101) {?>
                                                        <span class="selected">
							</span>
                                                        <?php } ?>
                            
                            <span class="arrow <?php echo ($menu==101)?"open":""; ?>">
							</span>
						</a>
						<ul class="sub-menu">
							 
							<li class="<?php echo ($submenu=="project_list")?"active":""; ?>">
								<a href="<?php echo site_url("project/projectentry");?>">
                                            
                                            <span class="badge badge-roundless page_list  badge-important manpower" data-url="<?php echo site_url("project");?>">
                                                List   
                                            </span>
                                            
									Project Entry
								</a>
							</li>
							 
                           
                             
                             
                             <li class="<?php echo ($submenu=="project_list1")?"active":""; ?>">
								<a href="<?php echo site_url("project");?>">
                                            
                                          
                                            
									Project List
								</a>
							</li>
                             
 

						</ul>
					</li>
                    
                      
                    <li class="<?php echo ($menu==104)?"active":""; ?>">
						<a href="javascript:;">
							<i class="fa fa-cogs"></i>
							<span class="title">
								Video
							</span>
							
                             <?php if($menu==104) {?>
                                                        <span class="selected">
							</span>
                                                        <?php } ?>
                            
                            <span class="arrow <?php echo ($menu==104)?"open":""; ?>">
							</span>
						</a>
						<ul class="sub-menu">
							 
							<li class="<?php echo ($submenu=="video_list")?"active":""; ?>">
								<a href="<?php echo site_url("video/videoentry");?>">
                                            
                                            <span class="badge badge-roundless page_list  badge-important manpower" data-url="<?php echo site_url("video");?>">
                                                List   
                                            </span>
                                            
									Video Entry
								</a>
							</li>
							 
                           
                             
                             
                             <li class="<?php echo ($submenu=="video_list1")?"active":""; ?>">
								<a href="<?php echo site_url("video");?>">
                                            
                                          
                                            
									Video List
								</a>
							</li>
                             
 

						</ul>
					</li>
                    
                    <li class="<?php echo ($menu==102)?"active":""; ?>">
						<a href="javascript:;">
							<i class="fa fa-cogs"></i>
							<span class="title">
								Enterprise
							</span>
							
                             <?php if($menu==102) {?>
                                                        <span class="selected">
							</span>
                                                        <?php } ?>
                            
                            <span class="arrow <?php echo ($menu==102)?"open":""; ?>">
							</span>
						</a>
						<ul class="sub-menu">
							 
							<li class="<?php echo ($submenu=="enterprise_list")?"active":""; ?>">
								<a href="<?php echo site_url("enterprise/enterpriseentry");?>">
                                            
                                            <span class="badge badge-roundless page_list  badge-important manpower" data-url="<?php echo site_url("enterprise");?>">
                                                List   
                                            </span>
                                            
									Enterprise Entry
								</a>
							</li>
							 
                           
                             
                             
                             <li class="<?php echo ($submenu=="enterprise_list1")?"active":""; ?>">
								<a href="<?php echo site_url("enterprise");?>">
                                            
                                          
                                            
									Enterprise List
								</a>
							</li>
                             
 

						</ul>
					</li>
                     
                        
                   <li  class="<?php echo ($menu==4)?"active":""; ?>">
						<a href="<?php echo site_url("writer");?>">
							<i class="fa fa-bar-chart-o"></i>
							<span class="title">
								Management
							</span>
						</a>
					</li>     
                                           
                     
                      
                   <li  class="<?php echo ($menu==103)?"active":""; ?>">
						<a href="<?php echo site_url("partner");?>">
							<i class="fa fa-bar-chart-o"></i>
							<span class="title">
								Partner
							</span>
						</a>
					</li>
 


		 		        		
                     			 	
                     
                     
					 
		         <li  class="last <?php echo ($menu==6)?"active":""; ?>">
						<a href="<?php echo site_url("comments");?>">
							<i class="fa fa-bar-chart-o"></i>
							<span class="title">
								Comments
							</span>
						</a>
					</li>     		
                     			 
					 
					   
				
                
                
                
                
                
                
                
                
                
                       		
                     			 
					
                     
                     	 
					 
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->