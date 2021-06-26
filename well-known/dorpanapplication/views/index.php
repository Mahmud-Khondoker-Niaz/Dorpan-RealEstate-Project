 
	
  <!-- End Site Header --><!-- Site Showcase -->
<div class="site-showcase">
    <div class="slider-mask overlay-transparent"></div>
    <!-- Start Hero Slider -->
    <div class="hero-slider flexslider clearfix" data-autoplay=yes data-pagination="no" data-arrows=yes data-style=fade data-pause="yes">	
		<ul class="slides">	
			<li class=" parallax" >
			  <iframe style="width:100%;height:100%" src="https://www.youtube.com/embed/lOxEOqHXA50" frameborder="0" allowfullscreen></iframe>
			   
			</li> 
			<li class=" parallax" style="background-image:url(<?php echo base_url();?>assets/wp-content/uploads/2014/06/slide22-1200x500.jpg)"> </li>
		</ul>
	</div>  

       
    
         
        </div>
    <!-- End Showcase --> 
    <!-- Start Content -->
            <div class="main" role="main">
    <div id="content" class="content full">
	
	
	
	
	<div class="padding-tb45" style="padding-top:0px;">
                            <div class="container">
								<div class="row">																					
									 
									
									
									
										<div class="col-md-8 widget_popular_agent column testimonials" ><h3 class=""><?php echo $welcome["PageName"];?></h3>



  <p><?php echo word_limiter(strip_tags($welcome["Detail"]),120,'...');?></p>
<div class="row">
                      <div class="col-md-9 col-sm-9 col-xs-6 testimonials">
                        
                       </div>
                       <div class="col-md-3 col-sm-3 col-xs-6">
                             <a href="<?php echo site_url("message/".$welcome["PageID"]);?>" class="btn btn-sm btn-primary">more details</a>
                       </div>
                    </div>
</div>
									
									
									

									<div class="col-md-4 col-sm-4">
									    <div class="col-md-12">
												
												<div class="latest-posts">
                     
                    <div class="fb-page" data-href="https://www.facebook.com/dorpanbd" data-tabs="timeline" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/dorpanbd"><a href="https://www.facebook.com/dorpanbd">DORPAN Properties Limited</a></blockquote></div></div>
                     
                </div>
										</div>
									</div>
								</div>

                            </div>
                        </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
						<div class="">
							<div class="container">
								<div class="row">
								    
									<div class="col-md-8 col-sm-8">
									    <div class="row">
										
										<?php if(isset($latestnews) && count($latestnews) > 0) ?>
											<div class="col-md-12">
												<div class="block-heading">
												   <h4><span class="heading-icon"><i class="fa fa-leaf"></i></span>Latest News</h4> 
												</div>
											</div>
									 
											<div style="text-align:left" class="col-md-6 col-sm-4 featured-block">
												<a href="<?php echo site_url("news/".$latestnews[0]["NewsID"]);?>"><img style="border-radius:0; float:left;margin-right:10px" alt="featured block" src="<?php echo base_url().$latestnews[0]["MediumImage"];?>" class="img-thumbnail"></a>
												<a style="text-decoration:none" href="<?php echo site_url("news/".$latestnews[0]["NewsID"]);?>"><h3 style="line-height:24px"><?php echo $latestnews[0]["NewsTitle"];?></h3></a>
												
												<?php echo $latestnews[0]["NewsSummary"];?>
												
												
											</div>
											<div class="col-md-6 col-sm-4">
												<div class="sidebar right-sidebar">
													  <div style="margin-bottom:0" class="widget sidebar-widget widget_recent_posts" id="recent_posts-2">													  
														  <ul>
														    <li class="clearfix">
																<a class="media-box post-image" href="<?php echo site_url("news/".$latestnews[1]["NewsID"]);?>">
																	  <img alt="slide2" class="img-thumbnail wp-post-image" src="<?php echo base_url().$latestnews[1]["MediumImage"];?>">
																</a>
																
																<div class="widget-blog-content">
																  <a href="<?php echo site_url("news/".$latestnews[1]["NewsID"]);?>"><?php echo $latestnews[1]["NewsTitle"];?></a>
																</div>
														    </li>
															
															
															<li style="border-bottom:none;margin-bottom:0" class="clearfix"><a class="media-box post-image" href="<?php echo site_url("news/".$latestnews[2]["NewsID"]);?>">
																	  <img alt="property5" class="img-thumbnail wp-post-image" src="<?php echo base_url().$latestnews[2]["MediumImage"];?>">
																</a>
                                                                <div class="widget-blog-content">
																  <a href="<?php echo site_url("news/".$latestnews[2]["NewsID"]);?>"><?php echo $latestnews[2]["NewsTitle"];?></a>
																  </div>
															</li>
															
														</ul>
													</div>                 													
												</div>
											 </div>
										
										<?php ?>
										
										</div>	 
									</div> 
									<div class="col-md-4 col-sm-4">
									
								 
												<div class="block-heading">
												   <h4>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $offer["PageName"];?></h4> 
												</div>
										 
											
									     <div class="latest-posts">
                    
                                       
                                       <?php 
			
			
			$doc = new DOMDocument();
			
			$html_data  = mb_convert_encoding($offer["Detail"] , 'HTML-ENTITIES', 'UTF-8'); // require mb_string
@$doc->loadHTML($html_data);

$tags = $doc->getElementsByTagName('img');


//var_dump($tags);
 
			 
			
			?>   
                                                                                 
<?php   
$img_offer = array(); 
     foreach ($tags as $tag) 
		 {
       
	   $img_offer[] = $tag->getAttribute('src');
	   }  
?>
		    
     
     
 <a href="<?php echo $img_offer[0];?>" data-rel="prettyPhoto[39]" class="media-box"><img src="<?php echo $img_offer[1];?>" class="img-responsive"/></a>     
     
     
     
     
     
     
           
    
                                                                                 
                         
					
					
                </div>
									</div>
								</div>
							</div>
						</div>
						<div class="spacer-40">
						</div>
						<div class="container">
                        <div class="row">
                        <div class="property-columns" id="latest-properties">
						  <div class="col-md-12">
						      <div class="block-heading">
							    <h4><span class="heading-icon"><i class="fa fa-leaf"></i></span>Our Projects</h4> 
							  </div>
						  </div>
							  <ul> 
								
                                <?php 
								 
								foreach($projectlist as $key=>$project) {
								?>
                                
                                <li class="col-md-4 col-sm-6 type-rent" style="<?php if($key > 0 && ( ($key+1) %3==1)) {?> clear:both; <?php }?>" ><div class="property-block">
                                <a href="<?php echo site_url("project/".$project["ProjectID"]);?>" class="property-featured-image">
                                <img src="<?php echo base_url().$project["Image"];?>" &#2547; alt="slide1" /><span class="badges"><?php echo $project["CategoryName"];?></span></a><div class="property-info">
                                <h4><a href="<?php echo site_url("project/".$project["ProjectID"]);?>"><?php echo $project["ProjectTitle"];?></a></h4>
                                
                               <a class="accent-color" data-original-title="Waverly" data-toggle="tooltip" style="cursor:default; text-decoration:none;" href="<?php echo site_url("project/".$project["ProjectID"]);?>"><span class="location"><?php echo $project["Location"];?></span></a><br><div class="price"><strong>&#2547;</strong><span><?php echo $project["Price"];?></span></div></div><div class="property-amenities clearfix"><span class="area"><?php echo $project["AreaSF"];?><strong></strong>Area</span><span class="baths"><strong><?php echo $project["Bath"];?></strong>Baths</span><span class="beds"><strong><?php echo $project["Bed"];?></strong>Beds</span><span class="parking"><strong><?php echo $project["Parking"];?></strong>Parking</span></div></div></li> 
                                
                                <?php 
								} 
								?>
                                
                                
                                
								  
								  
                                
                                
                                
								  
								  
								 
							  </ul>
						  </div>
						  </div> 
						  </div>
						<div id="featured-properties">
							  <div class="container">
								  <div class="row">
								  <div class="col-md-12">
									<div class="block-heading"><h4><span class="heading-icon"><i class="fa fa-leaf"></i></span>Sister Concern</h4> </div>
									</div>
									</div>
									<div class="row">                         
									   <ul class="owl-carousel owl-alt-controls" data-columns="4" data-autoplay="no" data-pagination="no" data-arrows="yes" data-single-item="no" >
                                           
                                           <?php 
								 
								foreach($enterpriselist as $key=>$row) {
								?>
                                 
                                           
                                           <li class="item property-block" ><a href="<?php echo site_url("enterprise/".$row["EnterpriseID"]);?>" class="property-featured-image"><img src="<?php echo base_url().$row["MediumImage"];?>" &#2547; alt="slide1" /> </a><div class="property-info"><h4><a href="<?php echo site_url("enterprise/".$row["EnterpriseID"]);?>"><?php echo $row["EnterpriseName"];?> </a></h4></h4></div></li>
										    
                                           <?php } ?>
                                           
                                            </ul>
									</div>
							  </div>
						  </div>
						  
						  

						<div class="container">
						   <div class="block-heading"><h4><span class="heading-icon"><i class="fa fa-users"></i></span>Our Partners</h4><a href="" class="btn btn-primary btn-sm pull-right">All partners <i class="fa fa-long-arrow-right"></i></a>
						   </div>
						   <div class="row">                           
							   <ul class="owl-carousel owl-alt-controls" data-columns="4" data-autoplay="no" data-pagination="no" data-arrows="no" data-single-item="no" >
                              
                              
                              <?php foreach($partnerlist as $row) {?> 
                               <li class="item"> <a target="_blank" href="<?php echo  $row["PartnerLink"];?>"><img src="<?php echo base_url().$row["Image"];?>" alt=""></a> </li>
                               
                               <?php } ?>
                               
                                
                               </ul>
						   </div>
						</div>
</div>
</div>  


<!-- Start Site Footer -->

 
