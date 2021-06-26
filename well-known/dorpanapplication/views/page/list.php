
	
 <!-- End Site Header --><!-- Site Showcase -->
		 <!-- End Site Header --><!-- Site Showcase -->
							<div class="site-showcase">
							<!-- Start Page Header -->
							<div class="parallax page-header" style="background-image:url(wp-content/uploads/2014/06/slide31.jpg);">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<h1>Our Projects</h1>
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
           <div class="col-md-9">
                      <div class="block-heading">
                          <h4><span class="heading-icon"><i class="fa fa-th-list"></i></span>Projects</h4>
                          <div class="toggle-view pull-right">
                              
                          </div>
                      </div>
                    <div class="property-listing row"><ul class="col-md-12" id="property_grid_holder">                                                                
					
                           
                           
                           
                           
                           <?php 
								
								foreach($projectlist as $project) {
								?> 
                            <li class="type-rent col-md-12">
                                                             <div class="col-md-4"> 
                           <a href="<?php echo site_url("project/".$project["ProjectID"]);?>" class="property-featured-image">
                           <img src="<?php echo base_url().$project["Image"];?>" class="" alt="slide1" />
<!--<span class="badges">Sale</span>--> </a> </div>
                                                               <div class="col-md-8">
                                                               <div class="property-info">
                                                               <div class="price"><strong>&#2547;</strong><span><?php echo $project["Price"]?></span></div>
                                                               <h3><a href="<?php echo site_url("project/".$project["ProjectID"]);?>"><?php echo $project["ProjectTitle"]?></a></h3>
<a class="accent-color" data-original-title="Waverly" data-toggle="tooltip" style="cursor:default; text-decoration:none;" href="<?php echo site_url("project/".$project["ProjectID"]);?>">
<span class="location"><?php echo $project["Location"]?></span></a><br>                                                               
<p>
<?php echo word_limiter(strip_tags($project["Detail"]),20,'...');?>
</p>                                                               </div>
<div class="property-amenities clearfix">
<span class="area"><strong><?php echo $project["AreaSF"];?></strong>Area</span><span class="baths">
<strong><?php echo $project["Bath"];?></strong>Baths</span>
<span class="beds"><strong><?php echo $project["Bed"];?></strong>Beds</span>
<span class="parking"><strong><?php echo $project["Parking"];?></strong>Parking</span></div>                                                          </div>
                             </li>
                              
                              <?php } ?>
                             
                             
                             
                              
                             
                             
                             
                              
                             
                             
                             
                              
                             
                                                                     
                                                                                                        
                                       </ul>                       </div>
                                        </div>
                  <!-- Start Sidebar -->
                  <div class="sidebar right-sidebar col-md-3">
                      
                       
                      
                      
                      
                      <div id="recent_posts-2" class="widget sidebar-widget widget_recent_posts">
                      <div class="sidebar-widget-title"><h3 class="widgettitle">Latest News</h3></div>
                          
                          <ul>
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                                 
                             <?php foreach($newslist as $row) {?>
                             
                             
                              <li class="clearfix"><a href="<?php echo site_url("news/".$row["NewsID"]);?>" class="media-box post-image">
                              <img src="<?php echo base_url().$row["MediumImage"];?>" class="img-thumbnail wp-post-image" alt="slide2" />
                        </a><div class="widget-blog-content">
                          <a href="<?php echo site_url("news/".$row["NewsID"]);?>"><?php echo $row["NewsTitle"];?></a>
                          </div>
                    </li>
                    <?php } ?>
                    
                    
                     
                    
                      
                          
                          
                          </ul></div>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  </div> 
              </div>
          </div>
      </div>
     </div>
<!-- Start Site Footer -->


