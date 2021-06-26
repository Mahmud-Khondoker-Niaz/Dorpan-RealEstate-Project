 
	
   <!-- End Site Header -->  <!-- Site Showcase -->
  <div class="site-showcase">
<!-- Start Page Header -->
<div class="parallax page-header" style="background-image:url(<?php echo base_url();?>assets/wp-content/uploads/2014/06/slide1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<h1><?php echo $project["ProjectTitle"]; ?></h1>
</div>
</div>
</div>
</div>
<!-- End Page Header -->
</div><!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="single-property">
            <span class ="property_zoom_level" id ="4"></span>
            
                         <h2 class="page-title"><?php echo $project["ProjectTitle"]; ?><a class="accent-color" data-original-title="Gazipur" data-toggle="tooltip" style="cursor:default; text-decoration:none;" href="javascript:void(0);"><span class="location sort_by_location"><?php echo $project["Location"]; ?></span></a></h2>
              <div class="price"><strong>&#2547;</strong><span><?php echo $project["Price"]; ?></span></div>
              <div class="property-amenities clearfix"> <span class="area"><strong>For</strong><?php echo $project["CategoryName"]; ?></span> 
              <span class="area"><strong><?php echo $project["AreaSF"]; ?></strong>Area</span> 
              <span class="baths"><strong><?php echo $project["Bath"]; ?></strong>Baths</span> 
              <span class="beds"><strong><?php echo $project["Bed"]; ?></strong>Beds</span> <span class="parking"><strong><?php echo $project["Parking"]; ?></strong>Parking</span> 
               
                  </div>
             
              <div class="property-slider">
                <div id="property-images" class="flexslider">
                                 
                                 
                                 
                                   <?php 
			
			
			$doc = new DOMDocument();
			
			$html_data  = mb_convert_encoding($project["ProjectImages"] , 'HTML-ENTITIES', 'UTF-8'); // require mb_string
@$doc->loadHTML($html_data);

$tags = $doc->getElementsByTagName('img');


//var_dump($tags);
 
			 
			
			?>   
                                                                                 

                                 
                                 
                                 
                                 
                                 
                                  <ul class="slides">
                                      
<?php    
     foreach ($tags as $tag) 
		 {
       
?>
		    
 
                                      <li class="item"> <img src="<?php echo $tag->getAttribute('src');?>" alt=""> </li>
 
 
 <?php }?>                                     
                                    </ul>
                </div>
                                <div id="property-thumbs" class="flexslider">
                                    <ul class="slides">
                                                                            
<?php    
     foreach ($tags as $tag) 
		 {
       
?>
                                       <li class="item"> <img src="<?php echo $tag->getAttribute('src');?>" alt=""> </li>
                                       
                                       
                                        <?php }?>  
                                       
                                    </ul>
                </div>              </div>
                            <div class="tabs">
                <ul class="nav nav-tabs">
                  <li class="active"> <a data-toggle="tab" href="#description"> Description </a> </li>
                  <li> <a data-toggle="tab" href="#amenities"> Additional Amenities </a> </li>
                  <li> <a data-toggle="tab" href="#address"> Property Details </a> </li>
                </ul>
                <div class="tab-content">
                  <div id="description" class="tab-pane active">
                    <?php echo $project["Description"];?>

                  </div>
                  <div id="amenities" class="tab-pane">
                    	 <?php echo $project["Description"];?>
                  </div>
                  <div id="address">
                      
                     <?php echo $project["Detail"];?>
                    
                      </div>
                </div>
              </div>
                              
               
                          </div>
            <!-- Start Related Properties -->
                        <h3>Related Properties</h3><hr>
            <div class="property-grid">
              <ul class="grid-holder col-3">
                    
                    
                    <?php 
								 
								foreach($projectlist as $project) {
								?>
                    
                    <li class="grid-item type-Sale">
                  <div class="property-block"> 
                  
                  <a href="<?php echo site_url("project/".$project["ProjectID"]);?>" class="property-featured-image"> <img src="<?php echo base_url().$project["Image"];?>" class="attachment-600-400-size wp-post-image" alt="property4" />  <span class="badges"><?php echo $project["CategoryName"];?></span> </a>
                    <div class="property-info">
                      <h4><a href="<?php echo site_url("project/".$project["ProjectID"]);?>"><?php echo $project["Location"];?></a></h4>
                      <a class="accent-color" data-original-title="" data-toggle="tooltip" style="cursor:default; text-decoration:none;" href="<?php echo site_url("project/".$project["ProjectID"]);?>"><span class="location sort_by_location"><?php echo $project["Location"];?></span></a><br>                      
                      <div class="price"><strong>&#2547;</strong><span><?php echo $project["Price"];?></span></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong><?php echo $project["AreaSF"];?></strong>Area</span> 
                    <span class="baths"><strong><?php echo $project["Bath"];?></strong>Baths</span> <span class="beds"><strong><?php echo $project["Bed"];?></strong>Beds</span> <span class="parking"><strong><?php echo $project["Parking"];?></strong>Parking</span> </div>
                  </div>
                </li>
                     <?php 
								}
								?>
                                             
                                 
                              </ul>
            </div>
                      </div>
          <!-- Start Sidebar -->
                              
                          </div>
      </div>
    </div>
  </div>

<!-- Start Site Footer -->

 
