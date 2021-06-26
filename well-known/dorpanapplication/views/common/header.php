<!DOCTYPE HTML>
<html lang="en-US" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo isset($title) ? $title : $siteinfo["HomePageTitle"]; ?></title>
<meta charset="UTF-8" />

<meta name="google-site-verification" content="pOIExzeQHdXf0EC0HLleqVPJz9f2OqSAFprpgYHodK0" />




 <meta property="og:type"                 content="website"/> 
     <meta property="og:url"                  content="<?php echo current_url(); ?>"/>
     <meta property="og:site_name"            content="<?php echo $siteinfo["HomePageTitle"]; ?>"/>
     <meta property="og:image"                content="<?php echo isset($image) ? base_url().$image : base_url().$siteinfo["Logo"]; ?>"/>
     <meta property="og:title"                content="<?php echo isset($title) ? $title : $siteinfo["SiteName"]; ?>"/>
	 
	 
     <meta property="og:description"          content="<?php echo isset($description) ? $description : $siteinfo["MetaDescription"];?>"/> 
	   
        
  
     
     
<link rel="shortcut icon" href="<?php echo base_url().$siteinfo["FavIcon"];?>" />
<meta name="description" content="<?php echo $siteinfo["MetaDescription"];?>" />
<meta name="keywords" content="<?php echo $siteinfo["MetaTag"];?>" />







<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
 


<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
<style>
 .owl-carousel .property-info{min-height:79px}

</style>

<link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/owl.theme.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/color1.css" rel="stylesheet">

</head>


<body class="home page page-id-223 page-template page-template-template-home page-template-template-home-php ">



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=387757051319026";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>









<div class="body">
  <!-- Start Site Header -->
  <header class="site-header" >
        <div class="top-header hidden-xs">
			<div class="container">
				<div class="row">
				  <div class="col-md-4 col-sm-6">
								<ul class="horiz-nav pull-left">
					   
					  </ul>
<style>
 
</style>
								</div>
				  <div class="col-md-8 col-sm-6">
					<ul class="horiz-nav pull-right">
						<li><a href="<?php echo $siteinfo["SiteFaceBook"];?>" target="_blank"><i class="fa fa-facebook"></i></a></li><li><a href="<?php echo $siteinfo["SiteTwitter"];?>" target="_blank"><i class="fa fa-twitter"></i></a></li>  <li><a href="<?php echo $siteinfo["SiteYouTube"];?>" target="_blank"><i class="fa fa-youtube"></i></a></li>           </ul>
					
				  </div>
				</div>
			</div>
        </div>
      
		<div class="middle-header">
		  <div class="container">
			<div class="row">
			  <div class="col-md-4 col-sm-8 col-xs-8">
				<h1 class="logo"> 
					<a href="<?php echo site_url();?>" title="Dorpan Group"><img src="<?php echo base_url().$siteinfo["Logo"];?>" alt="Logo"></a>            </h1>
			  </div>
			  <div class="col-md-8 col-sm-4 col-xs-4">
				  <div class="contact-info-blocks hidden-sm hidden-xs">
					<div>
								<i class="fa fa-phone"></i> Hotline:
								<span><?php echo $siteinfo["SiteContact"];?></span>
							  </div><div>
								<i class="fa fa-envelope"></i> Email Us
								<span><?php echo $siteinfo["SiteEmail"];?></span>
							  </div>             </div>
				  <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a>
			  </div>
			</div>
		  </div>
		</div>
       
	   <div class="main-menu-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation">
              <ul id="menu-main-menu" class="sf-menu">
              
			  
			  
			    <?php 
		
		 						global $menuItems;
global $parentMenuIds;
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
  $has_childs = false;
 
  //this prevents printing 'ul' if we don't have subcategories for this category
  global $menuItems;
  global $parentMenuIds;
  //use global array variable instead of a local variable to lower stack memory requierment
  foreach($menuItems as $key => $value)
  {
    if ($value["parent_menu_id"] == $parent)
    {
		
		
		

            $menu_id = $value['id'];
            $menu_name = $value['name'];
            $menu_link = split2($value['MenuLink'],"/",2);
  
			$LinkType = $value['LinkType'];



$target =  ($LinkType=='InternalLink')? "":"_blank";
 $menu_link = (empty($menu_link) || $menu_link==NULL)  ? base_url() : ( $menu_link=='#' ? '#' :  (($LinkType=='InternalLink') ? base_url().$menu_link : $menu_link) );

if(current_url() == $menu_link) $class = "current_menu_item"; else $class = "";


		
      //if this is the first child print '<ul>'
      if ($has_childs === false)
      {
        //don't print '<ul>' multiple times
        $has_childs = true;
        if($parent != 0)
        {
          echo '<ul class="dropdown-menu">';
        }
      }
 


 
      if($value["parent_menu_id"] == 0 && in_array($value["id"], $parentMenuIds))
      {
        echo '<li class="dropdown '.$class.'"><a target="'.$target.'" class="dropdown-toggle disabled" data-toggle="dropdown" href="'.$menu_link.'">' . $value["name"] . '</a>'; // <b class="caret"></b>
      }
      else if($value["parent_menu_id"] != 0 && in_array($value["id"], $parentMenuIds))
      {
        echo '<li class="dropdown-submenu"><a target="'.$target.'"  href="'.$menu_link.'">' . $value["name"] . '</a>';
      }
      else
      {
        echo '<li  class="'.$class.'"><a target="'.$target.'"  href="'.$menu_link.'">' . $value["name"] . '</a>';
      }
      generate_menu($value["id"]);
 
      //call function again to generate nested list for subcategories belonging to this category
      echo '</li>';
    }
  }
  if ($has_childs === true) echo '</ul>';
}
generate_menu(0);
								  
								?>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			   
                 
                 
              </ul>	            
            </nav>
          </div>
        </div>
      </div>
    </div>
    </header>
	
	