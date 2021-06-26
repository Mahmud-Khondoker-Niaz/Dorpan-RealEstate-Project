<header id="banner">
			<div id="banner_container" class="container">
				<h3 class="banner-title">Projects</h3>
				<p class="banner-subtitle"></p>
			</div>
		</header>
		<div class="content-wrapper clearfix">
			<div id="title-listing" class="container">
				<div class="property-list-title">Projects:</div>
				 
			</div><!-- /#title-listing -->
			<div class="container"><!-- container via hooks -->
				<div id="main" class="row-fluid">
					<section  id="content" class="span9" role="main">
						<div id="archive-wrapper">
							 
							<div class="row-fluid">
								 <?php 
								
								foreach($projectlist as $project) {
								?> <div class="row-fluid property-listing status-35 clearfix">
									<div class="listing-image span5">
										<div class="property-image-container">
											<a href="<?php echo site_url("project/".$project["ProjectID"]);?>" title="<?php echo $project["ProjectTitle"]?>">
												<img width="540" height="360" src="<?php echo $this->config->item('file_url').$project["Image"];?>" class="attachment-real-property-loop wp-post-image" alt="<?php echo $project["ProjectTitle"]?>" title="<?php echo $project["ProjectTitle"]?>" />
											</a>
										</div><!-- /.property-images-container -->
										<div class="listing-meta">
											<ul>
												<li class="meta-size"><i class="ico-size"></i><?php echo ($project["AreaSF"]!=0) ? $project["AreaSF"] : "";?></li>
												<li class="meta-bedroom"><i class="ico-bedroom"></i><?php echo ($project["Bed"]!=0) ? $project["Bed"] : "";?></li>
												<li class="meta-bathroom"><i class="ico-bathroom"></i><?php echo ($project["Bath"]!=0) ? $project["Bath"] : "";?></li>
												<li class="meta-garage"><i class="ico-garage"></i><?php echo ($project["Parking"]!=0) ? $project["Parking"] : "";?></li>
											</ul>
										</div>
									</div>
									<div class="listing-info span7">
										<div class="listing-title">
											<a href="<?php echo site_url("project/".$project["ProjectID"]);?>" title="<?php echo $project["ProjectTitle"]?>"><?php echo $project["ProjectTitle"]?></a>
											 
										</div>
										<div class="listing-content">
											<!--<div class="listing-property-price">
												<sup class="price-curr">&#2547;</sup><?php echo $project["Price"];?>&nbsp;
												<span class="price-postfix"></span>
											</div>-->
											<div class="listing-excerpt">
												<p><?php echo word_limiter(strip_tags($project["Detail"]),20,'...');?></p>
											</div>
										</div>
										<div class="listing-address">
											<i class="icon-map-marker icon-large"></i>
											<?php echo $project["Location"]?>
											 
										</div>
									</div>
									<div class="property-status status-35-text"><?php  echo strlen($project["ProjectStatus"])>2 ?  "For ". $project["ProjectStatus"] : "";?></div>
								</div><!-- /.property-listing -->
								  <?php 
								
								}
								?> 
							</div>
						</div><!-- /#archive-wrapper -->
						<!--<div class="property-pagination">
							<ul class='page-numbers'>
								<li><span class='page-numbers current'>1</span></li>
								<li><a class='page-numbers' href='#'>2</a></li>
								<li><a class="next page-numbers" href="#"><i class="icon-caret-right"></i></a></li>
							</ul>
						</div>-->				
					</section><!-- #content -->
					 <section id="sidebar" class="span3" role="complementary">
						 
						 
						 
						<aside id="categories-2" class="widget widget_categories">
							<h3 class="widget-title">News & Events</h3>
							<div class="content-widget">
								<ul>
									
                                      <?php foreach($newslist as $row) {?><li class="cat-item cat-item-3">
										<a href="<?php echo site_url("news/".$row["NewsID"]);?>" title="<?php echo $row["NewsTitle"];?>"><?php echo $row["NewsTitle"];?></a>
									</li>
								  <?php } ?>
								</ul>
							</div><!-- /.content-widget -->
						</aside>
						 
					</section><!-- #sidebar -->
				</div><!-- /#main -->
			</div><!-- /.container-->
		</div><!-- /.content-wrapper -->