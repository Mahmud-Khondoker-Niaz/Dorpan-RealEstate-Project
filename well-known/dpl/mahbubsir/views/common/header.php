<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en-US" class="no-js ie ie6 ie-lte7 ie-lte8 ie-lte9"><![endif]-->
<!--[if IE 7 ]><html lang="en-US" class="no-js ie ie7 ie-lte7 ie-lte8 ie-lte9"><![endif]-->
<!--[if IE 8 ]><html lang="en-US" class="no-js ie ie8 ie-lte8 ie-lte9"><![endif]-->
<!--[if IE 9 ]><html lang="en-US" class="no-js ie ie9 ie-lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en-US" class="no-js"><!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="" />
	<meta name="keyword" content="" />
	<title><?php echo isset($title) ? $title : $siteinfo["HomePageTitle"]; ?></title>
	
	
	 <meta property="og:type"                 content="website"/> 
     <meta property="og:url"                  content="<?php echo current_url(); ?>"/>
     <meta property="og:site_name"            content="<?php echo $siteinfo["HomePageTitle"]; ?>"/>
     <meta property="og:image"                content="<?php echo isset($image) ? base_url().$image : base_url().$siteinfo["Logo"]; ?>"/>
     <meta property="og:title"                content="<?php echo isset($title) ? $title : $siteinfo["SiteName"]; ?>"/>
	 
	 
     <meta property="og:description"          content="<?php echo isset($description) ? $description : $siteinfo["MetaDescription"];?>"/> 
	   
        
  
     
     
<link rel="shortcut icon" href="<?php echo base_url().$siteinfo["FavIcon"];?>" />
<meta name="description" content="<?php echo $siteinfo["MetaDescription"];?>" />
<meta name="keywords" content="<?php echo $siteinfo["MetaTag"];?>" />

	
	
	<meta name='robots' content='noindex,nofollow' />
	<link rel='stylesheet' id='realexpert_bootstrap_main_css-css'  href='<?php echo base_url();?>assets/library/bootstrap/css/bootstrap.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='realexpert_bootstrap_responsive_css-css'  href='<?php echo base_url();?>assets/library/bootstrap/css/bootstrap-responsive.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='realexpert_font_awesome_css-css'  href='<?php echo base_url();?>assets/library/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='realexpert_font_awesome_css_ie7-css'  href='<?php echo base_url();?>assets/library/font-awesome/css/font-awesome-ie7.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='flexslider_css-css'  href='<?php echo base_url();?>assets/library/flexslider/flexslider.css' type='text/css' media='all' />
	<link rel='stylesheet' id='default-style-css'  href='<?php echo base_url();?>assets/style.css' type='text/css' media='all' />
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery3e5a.js?ver=1.10.2'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery-migrate.min1576.js?ver=1.2.1'></script>
	
	<style type="text/css">
		@font-face
		{
			font-family: ProximaNova;
			src:url("<?php echo base_url();?>assets/library/fonts/ProximaNova-Regular.otf") format("opentype");
			font-weight:normal;
		}

		@font-face{
			font-family: ProximaNova;
			src:url("<?php echo base_url();?>assets/library/fonts/ProximaNova-Light.otf") format("opentype");
			font-weight:200;
		}

		@font-face{
			font-family:ProximaNova;
			src:url("<?php echo base_url();?>assets/library/fonts/ProximaNova-Bold.otf") format("opentype");
			font-weight:bold;
		}

		@font-face{
			font-family: ProximaNova;
			src:url("<?php echo base_url();?>assets/library/fonts/ProximaNova-Semibold.otf") format("opentype");
			font-weight:600;
		}
		body{
			font-family:ProximaNova;
			color:#757c80;
		}
		input, button, select, textarea{
			font-family:ProximaNova;
		}
		.status-28-text{
			background-color : #ec4d3a;
		}
		.status-28{
			border-bottom:5px solid #ec4d3a !important;
		}
	
		.status-35-text{
			background-color : #007bb0;
		}
		.status-35{
			border-bottom:5px solid #007bb0 !important;
		}
	</style>
</head>
<body>
	<div class="container-full">
		<header id="header" role="banner">
			<div class="header-background">
				<div class="container">
					<div class="row-fluid">
						<div class="pull-left">
							<a href="<?php echo  base_url();?>" title="" rel="home">
								<img class="site-logo" src="<?php echo  $this->config->item('file_url').$siteinfo["Logo"];?>" alt="Real Expert" />
							</a>
						</div>
						<div class="pull-right">
							<div class="top-menu">
								<span class="contact-info"><i class="contact-email"></i><a><?php echo  $siteinfo["SiteEmail"];?></a></span>
								<span class="contact-info"><i class="contact-phone"></i><?php echo  $siteinfo["SiteContact"];?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="nav-background">
				<div class="container">
					<div class="clearfix navbar">
						<div class="navbar-inner">
							<div class="container">
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</a>
								<div class="nav-collapse collapse">
									<nav id="nav-main" role="navigation">
										
                                        
                                        
                                        <ul id="menu-primary-menu" class="nav">
											 
											 
                                             
                                             
                                             
                                             
                                             
                                             
                                             
                                             
                                             
                                              <?php 
		
	
		
	global $menuItems;
global $parentMenuIds;
global $menustring;
global $mobilemenustring;
//create an array of parent_menu_ids to search through and find out if the current items have an children
foreach($menu as $parentId)
{
  $parentMenuIds[] = $parentId["parent_menu_id"];
}
//assign the menu items to the global array to use in the function
$menuItems = $menu;
 
//recursive function that prints categories as a nested html unorderd list
function generate_menu($parent)
{
		$arr_style = array("yellow",   "gray",  "orange",  "green",  "purple", "sky-blue",  "blue",  "red");
  $has_childs = false;
 $flag = true;
  //this prevents printing 'ul' if we don't have subcategories for this category
  global $menuItems;
  global $parentMenuIds;
  global $menustring;
  global $mobilemenustring;
  //use global array variable instead of a local variable to lower stack memory requierment
  foreach($menuItems as $key => $value)
  {
    if ($value["parent_menu_id"] == $parent)
    {
      //if this is the first child print '<ul>'
      if ($has_childs === false)
      {
        //don't print '<ul>' multiple times
        $has_childs = true;
        if($parent != 0)
        {
          $menustring .='<ul class="dropdown-menu ">';
		  $mobilemenustring .='<ul class="dropdown-menu ">';
		   
		  $flag = false;
        }
      }
 


            $menu_id = $value['id'];
            $menu_name = $value['name'];
            //$menu_link = split2($value['MenuLink'],"/",2);
            //$menu_link = $value['MenuLink']."/page";
                    $menu_link = $value['MenuLink'];
			$LinkType = $value['LinkType'];



 
 $menu_link = (empty($menu_link) || $menu_link==NULL)  ? base_url() : ( $menu_link=='#' ? '#' :  (($LinkType=='InternalLink') ? base_url().$menu_link : $menu_link) );

 
      if($value["parent_menu_id"] == 0 && in_array($value["id"], $parentMenuIds))
      {
		  
		 $menustring .='<li  class=" dropdown "><a href="'.$menu_link.'">' . $value["name"] . '</a>';
		
         
      }
      else if($value["parent_menu_id"] != 0 && in_array($value["id"], $parentMenuIds))
      {
        $menustring .='<li><a  href="'.$menu_link.'">' . $value["name"] . '</a>';
		
		 
      }
      else
      {
       if($flag === true){
	    $menustring .='<li  class=""" ><a href="'.$menu_link.'">' . $value["name"]. '</a>';    //current_page_item
		
	   }
		else {
	     $menustring .='<li class=""><a class="dropdown-toggle" href="'.$menu_link.'">' . $value["name"]. '</a>';
		
		}
      }
      generate_menu($value["id"]);
 
      //call function again to generate nested list for subcategories belonging to this category
      $menustring .='</li>';
	
    }
  }
  if ($has_childs === true) { 
  $menustring .='</ul>';
  
  }
}
generate_menu(0);

echo $menustring;
								  
								?>
            
            
            
            
            
            
            
            
            
            
            
											 
											 
											 
										</ul>
										<div id="social-network">
											<a class="fb" href="<?php echo $siteinfo["SiteFaceBook"];?>" title="Facebook"><i class="icon-facebook"></i></a>
											<a class="tw" href="<?php echo $siteinfo["SiteTwitter"];?>" title="Twitter"><i class="icon-twitter"></i></a>
											 				
											<a class="gp" href="<?php echo $siteinfo["SiteGooglePlus"];?>" title="Google Plus"><i class="icon-google-plus"></i></a>	
										</div>
									</nav> <!-- #nav-main -->
								</div>

							</div>

						</div>
					</div><!-- .navbar -->
				</div>
			</div>
		</header><!-- #header -->