	<div class="content-wrapper clearfix">
			
			
			
			
			
			<div id="slider_wrapper">
				<div class="flexslider">
					<ul class="slides">
						
						      <?php  
						 
						 function projectinfo($array, $ProjectLink,$key) {
						 
						 $projectid = substr($ProjectLink, (strrpos($ProjectLink,'/') + 1));
						 
						 foreach($array as $row) {
						  if($row["ProjectID"] == $projectid) return $row[$key];
						 
						 }
						 return "";
						 }
						 
						 
						 
						 
						   foreach($slideist as $slide_list) {
								
								
								$doc2 = new DOMDocument();
			
			$html_data2  = mb_convert_encoding($slide_list["Detail"] , 'HTML-ENTITIES', 'UTF-8'); // require mb_string
@$doc2->loadHTML($html_data2);

$tags1 = $doc2->getElementsByTagName('img');


 
$img_offer1 = array(); 
$img_title1 = array(); 
$img_desc1 = array(); 
     foreach ($tags1 as $tag1) 
		 {
       
	   $img_offer1[] = $tag1->getAttribute('src');
	    $img_title1[] = $tag1->getAttribute('title');
		 $img_desc1[] = $tag1->getAttribute('alt');
	   }  
			
			
			
								?>
						
						<li>
							<img src="<?php echo $img_offer1[0];?>" alt="<?php echo $img_title1[0];?>" />
							<div class="container">
								<!--<div class="flex-caption">
									<div class="caption-title">
										<h3><a href="<?php echo $slide_list["ProjectLink"];?>"><?php echo $img_title1[0];?></a></h3>
										<p><?php echo $img_desc1[0];?></p>
									</div>
									<div class="caption-meta">
										<p class="caption-status">For <?php echo projectinfo($projectinfo, $slide_list["ProjectLink"], 'ProjectStatus');?></p>
										<p class="caption-price"><sup class="price-curr">&#2547;</sup><?php echo projectinfo($projectinfo, $slide_list["ProjectLink"], 'Price');?></p>
									</div>
								</div>-->
							</div>
						</li>
						  <?php 
								
								}
								?>
						 
					</ul>
				</div>
			</div><!-- /#slider-wrapper -->
			 <!-- /#search_form -->
			  
			<div class="container" style="margin-top:30px;"><!-- container via hooks -->
				<div id="main" class="row-fluid">
					<section  id="content" class="span12" role="main">
						<div id="archive-wrapper">
							 
							<div class="row-fluid">
								<div class="row-fluid property-listing status-35 clearfix">
									<div class="listing-info span7">
										<div class="listing-title">
											<a href="<?php echo site_url("page/22");?>" title="About Us">About Us</a>
											 
										</div>
										<div class="listing-content">
											 
											<div class="listing-excerpt">
												<p>
												<?php 
											echo word_limiter(strip_tags($pagedetail["Summary"]),110);	
											
												?>
												</p>
											</div>
										</div>
										<div class="listing-address">
											 
											 
											<a href="<?php echo site_url("page/".$pagedetail["PageID"]);?>" role="button" >Detail</a>
										</div>
									</div>
									<div class="listing-image span5" style="margin-left:0;margin-right:0; padding-right:0">
									
									 <?php 
			
			
			$doc = new DOMDocument();
			
			$html_data  = mb_convert_encoding($offer["Detail"] , 'HTML-ENTITIES', 'UTF-8'); // require mb_string
@$doc->loadHTML($html_data);

$tags = $doc->getElementsByTagName('img');


 
$img_offer = array(); 
     foreach ($tags as $tag) 
		 {
       
	   $img_offer[] = $tag->getAttribute('src');
	   }  
			 
			
			?>   
			
			
									<div class="listing-meta" style="margin:10px 15px 0 15px">
											<ul>
												<li class="meta-size"><?php echo $offer["PageName"];?></li>
											 
											</ul>
										</div>
									
										<div class="property-image-container">
											
											
											
											 <a target="_blank" width="540" height="360" href="<?php echo $img_offer[0];?>" data-rel="prettyPhoto[39]" class="media-box"><img src="<?php echo $img_offer[1];?>" class="img-responsive"/></a>     
											 
											 
											
											 
										</div><!-- /.property-images-container -->
										
									</div>
									
									 
								</div><!-- /.property-listing -->
								 
							</div>
						</div><!-- /#archive-wrapper -->
						 				
					</section><!-- #content -->
					 <!-- #sidebar -->
				</div><!-- /#main -->
			</div>
			
			
			<div id="property_info">
				<div class="container carousel-wrapper">
					<div id="recent-title-listing" class="container">
						<div class="recent-property-list-title">Our Projects</div>
						<div class="recent-property-list-by">
							<div class="jcarousel-control">
								<a href="#" class="jcarousel-control-prev">
									<span class="icon-stack">
									  <i class="icon-stop icon-stack-base"></i>
									  <i class="icon-chevron-left"></i>
									</span>
								</a>
								<a href="#" class="jcarousel-control-next">
									<span class="icon-stack">
									  <i class="icon-stop icon-stack-base"></i>
									  <i class="icon-chevron-right"></i>
									</span>
								</a>
							</div>
						</div>
					</div><!-- /#title-listing -->
					<div class="jcarousel container">
						<div class="jcontainer">
						
						 <?php 
								
								foreach($projectlist as $project) {
								?>
							<div class="span3">
								<article class="property-item">
									<div class="property-images">
										<a href="<?php echo site_url("project/".$project["ProjectID"]);?>" title="<?php echo $project["ProjectTitle"]?>"><img width="540" height="360" src="<?php echo $this->config->item('file_url').$project["Image"];?>" class="status-35 wp-post-image" alt="<?php echo $project["ProjectTitle"]?>" title="<?php echo $project["ProjectTitle"]?>" /></a>
										<div class="property-status status-35-text"><?php  echo strlen($project["ProjectStatus"])>2 ?  "For ". $project["ProjectStatus"] : "";?></div>
									</div><!-- /.property-images -->
									<div class="property-attribute">
										<h3 class="attribute-title"><a href="<?php echo site_url("project/".$project["ProjectID"]);?>" title="<?php echo $project["ProjectTitle"]?>" ><?php echo $project["ProjectTitle"]?></a></h3>
										<span class="attribute-city"><?php echo $project["Location"]?></span>
										<!--<div class="attribute-price">
											<span class="attr-pricing"><sup class="price-curr">&#2547;</sup><?php echo $project["Price"];?></span>
										</div>-->
									</div>
									<div class="property-meta clearfix">
										<div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text"><?php echo ($project["AreaSF"]!=0) ? $project["AreaSF"] : "";?></span></div>
										<div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text"><?php echo ($project["Bed"]!=0) ?  $project["Bed"] :"";?></span></div>
										<div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text"><?php echo ($project["Bath"]!=0) ? $project["Bath"] : "";?></span></div>
									</div>
								</article>
							</div>
						  <?php 
								
								}
								?>
								
								
						</div><!-- jcontainer -->
					</div><!-- /.jcarousel -->
				</div><!-- /.container -->
			</div><!-- /#property_info -->
			<!--<div id="property_partner">
				<div class="container">
					<header class="partner-header">
						<h3 class="partner-title">Our Partners</h3>
					</header>
					<p class="partner-excerpt">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae fermentum diam, vitae gravida eros. Proin interdum imperdiet
					</p>
					<div id="partners_slider" class="partners-logo-wrapper">
						<div class="partner-list">
							<div class="partner-item">
								<a target="_blank" href="http://www.graphicriver.net/" title="graphicriver">
									<img width="170" height="55" src="<?php echo base_url();?>assets/uploads/graphicriver-170x55.png" class="attachment-partners-thumb wp-post-image" alt="graphicriver" title="graphicriver" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.themeforest.net/" title="Themeforest2">
									<img width="170" height="55" src="<?php echo base_url();?>assets/uploads/themeforest-170x55.png" class="attachment-partners-thumb wp-post-image" alt="Themeforest2" title="Themeforest2" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.photodune.net/" title="Photodune2">
									<img width="170" height="55" src="<?php echo base_url();?>assets/uploads/photodune-170x55.png" class="attachment-partners-thumb wp-post-image" alt="Photodune2" title="Photodune2" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.graphicriver.net/" title="graphicriver2">
									<img width="170" height="55" src="<?php echo base_url();?>assets/uploads/graphicriver-170x55.png" class="attachment-partners-thumb wp-post-image" alt="graphicriver2" title="graphicriver2" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.videohive.net/" title="videohive">
									<img width="170" height="55" src="<?php echo base_url();?>assets/uploads/videohive-170x55.png" class="attachment-partners-thumb wp-post-image" alt="videohive" title="videohive" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.activeden.net/" title="activeden">
									<img width="170" height="55" src="<?php echo base_url();?>assets/uploads/activeden-170x55.png" class="attachment-partners-thumb wp-post-image" alt="activeden" title="activeden" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.themeforest.net/" title="themeforest">
									<img width="170" height="55" src="<?php echo base_url();?>assets/uploads/themeforest-170x55.png" class="attachment-partners-thumb wp-post-image" alt="themeforest" title="themeforest" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.photodune.net/" title="photodune">
									<img width="170" height="55" src="<?php echo base_url();?>assets/uploads/photodune-170x55.png" class="attachment-partners-thumb wp-post-image" alt="photodune" title="photodune" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.graphicriver.net/" title="graphicriver">
									<img width="170" height="55" src="<?php echo base_url();?>assets/uploads/graphicriver-170x55.png" class="attachment-partners-thumb wp-post-image" alt="graphicriver" title="graphicriver" />
								</a>
							</div>
						</div>
						<div class="partner-control">
							<a href="#" class="partner-prev"><span class="icon-stack"><i class="icon-stop icon-stack-base"></i><i class="icon-chevron-left"></i></span></a>
							<a href="#" class="partner-next"><span class="icon-stack"><i class="icon-stop icon-stack-base"></i><i class="icon-chevron-right"></i></span></a>
						</div>
					</div>
				</div>
			</div>--><!-- /#property_partner -->	
		</div><!-- /.content-wrapper -->