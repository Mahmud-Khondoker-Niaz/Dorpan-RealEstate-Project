	<header id="banner">
			<div id="banner_container" class="container">
				<h3 class="banner-title">Properties Listing</h3>
				<p class="banner-subtitle"></p>
			</div>
		</header>
		<div class="content-wrapper clearfix">
			<div class="container"><!-- container via hooks -->
				<div id="main" class="row-fluid">
					<section  id="content" class="span9" role="main">
						<article class="post-56 property type-property status-publish hentry clearfix" id="property-56">
							<div id="property_slider_wrapper">
								<div id="myCarousel" class="carousel slide">
									<!-- Carousel items -->
                                    
                                       
                                   <?php 
			
			
			$doc = new DOMDocument();
			
			$html_data  = mb_convert_encoding($project["ProjectImages"] , 'HTML-ENTITIES', 'UTF-8'); // require mb_string
@$doc->loadHTML($html_data);

$tags = $doc->getElementsByTagName('img');


//var_dump($tags);
 
			 
			
			?>   
                                  
                                    
                                    
                                    
                                    
									<div class="carousel-inner">
  <?php    
     foreach ($tags as $key=>$tag) 
		 {
       
?>
                                        
                                        <div class='item <?php echo ($key==0) ? "active" : ""?>'>
                                       
                                       <img src="<?php echo $tag->getAttribute('src');?>" width='870' height='350' alt=''>
                                        
                                       <!-- <img src='uploads/photodune-757329-living-room-m-870x350.jpg' width='870' height='350' alt='' />-->
                                        
                                        
                                        </div>
										 
										 <?php }?>
										 
										 
									</div>
									<div class="carousel-thumbnail">
										<!-- Carousel nav -->
										<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
										<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
										<ol class="carousel-indicators hidden-phone">
											
                                            <?php    
     foreach ($tags as $key=>$tag) 
		 {
       
?>
                                            <li data-target='#myCarousel' data-slide-to='<?php echo $key;?>' class='<?php echo ($key==0) ? "active" : ""?>'>
                                            
                                             <img src="<?php echo $tag->getAttribute('src');?>" width='80' height='80' alt=''>
                                            </li>
											
                                          <?php }?>   
                                             
										</ol>
								  </div>
								</div>
							</div><!-- /#property_slider_wrapper -->
							<div id="single_property_meta_wrapper">
								<div class="single-property-meta clearfix status-35-text">
									<span class="meta-size"><i class="ico-size"></i><?php echo ($project["AreaSF"]!=0) ?  $project["AreaSF"] : "";?></span>
									<span class="meta-bedroom"><i class="ico-bedroom"></i><?php echo ($project["Bed"]!=0) ?  $project["Bed"] : "";?><span class="meta-hidden"> Bedrooms</span></span>
									<span class="meta-bathroom"><i class="ico-bathroom"></i><?php echo ($project["Bath"]!=0) ?  $project["Bath"] : "";?><span class="meta-hidden"> Bathrooms</span></span>
									<span class="meta-garage"><i class="ico-garage"></i><?php echo ($project["Parking"]!=0) ?  $project["Parking"] : "";?><span class="meta-hidden"> Garages</span></span>
									<span class="meta-print visible-desktop"><i class="ico-print"></i>
										<span class="print-hidden"><a href="javascript:window.print()">Print this page</a></span>
									</span>
									<span class="meta-status"><?php  echo strlen($project["ProjectStatus"])>2 ?  "For ". $project["ProjectStatus"] : "";?></span>
								</div>
							</div>
							<div class="single-property-content-wrapper">
								<header class="single-property-header">
									<h3 class="single-property-title"><?php echo $project["ProjectTitle"];?></h3>
									<p class="single-property-address"><?php echo $project["Location"];?></p>
								</header>
								<!--<div class="single-property-price">
									<p><h3><sup class="price-curr">&#2547;</sup><?php echo $project["Price"];?>&nbsp;<span class="price-postfix"></span></h3></p>
								</div>-->
								<div class="single-property-content">
								
                                <?php echo $project["Description"];?>
                                <p>&nbsp;</p>
                                 <?php echo $project["Amenities"];?>
                                <p>&nbsp;</p>
                                 <?php echo $project["Detail"];?>
                                <p>&nbsp;</p>
                                
								</div>
								 
								<!-- Modal -->
								<div id="contactAgent" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="contactAgentLabel" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h3>
											Send message to us						
										</h3>
									</div>
									<div class="modal-body">
										<form id="contact-agent-form" action="#" method="post">
											<div class="controls controls-row">
												<input class="span6" name="name" type="text" placeholder="*Name " required />
												<input class="span6" name="email" type="email" placeholder="*Email" required />
											</div>
											<div class="controls">
												<textarea name="message" class="span12" rows="10" placeholder="*Message" required></textarea>
											</div>
											<div class="controls">
												<input id="submit" class="btn btn-contact" type="submit" name="submit" value="Send" />
											</div>
										</form>
									</div>
								</div>
							</div>
						</article>
					</section><!-- #content -->
					<section id="sidebar" class="span3" role="complementary">
					
                    
                    	<aside id="property_agent-2" class="widget property-agent">
							<h3 class="widget-title">Contact Us</h3>
							<div class="content-widget"> 
							 
							 <?php 
							 echo $contactdetail["Detail"];
							 ?>
							<div class="clear"></div>
							  
							<div class="agent-desc"><a role="button" data-toggle="modal" class="button button-search-widget" href="#contactAgent">Contact</a></div></div><!-- /.content-widget -->
						</aside>
						 
						 
					</section><!-- #sidebar -->
				</div><!-- /#main -->
				<div class="single-property-related ">
					<span class="map-label">Related Property</span>
					<div class="row-fluid">
						
                         <?php 
								 
								foreach($projectlist as $project) {
								?>
                        <div class="span3">
							<article class="property-item">
								<div class="property-images">
									<a href="<?php echo site_url("project/".$project["ProjectID"]);?>" title="60 Merrick Way, Miami"><img width="540" height="360" src="<?php echo $this->config->item('file_url').$project["Image"];?>" class="status-28 wp-post-image" alt="<?php echo $project["ProjectTitle"];?>" title="<?php echo $project["ProjectTitle"];?>" /></a>
									<div class="property-status status-28-text"><?php  echo strlen($project["ProjectStatus"])>2 ?  "For ". $project["ProjectStatus"] : "";?></div>
								</div><!-- /.property-images -->
								<div class="property-attribute">
									<h3 class="attribute-title"><a href="<?php echo site_url("project/".$project["ProjectID"]);?>" title="<?php echo $project["ProjectTitle"];?>" ><?php echo $project["ProjectTitle"];?></a></h3>
									 
									<!--<div class="attribute-price">
										<span class="attr-pricing"><sup class="price-curr">&#2547;</sup><?php echo $project["Price"];?></span>
									</div>-->
								</div>
								<div class="property-meta clearfix">
									<div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text"><?php echo ($project["AreaSF"]!=0)? $project["AreaSF"] : "";?></span></div>
									<div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text"><?php echo ($project["Bed"]!=0)? $project["Bed"] : "";?></span></div>
									<div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text"><?php echo ($project["Bath"]!=0)? $project["Bath"] : "";?></span></div>
								</div>
							</article>
						</div>
						  <?php 
								}
								?>
					</div>
				</div><!-- /.single-propety-related -->
		
			</div><!-- /.container-->
		</div><!-- /.content-wrapper -->