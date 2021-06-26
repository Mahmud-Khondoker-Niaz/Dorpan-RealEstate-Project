	<header id="banner">
			<div id="banner_container" class="container">
				<h3 class="banner-title">News & Events</h3>
				<p class="banner-subtitle"></p>
			</div>
		</header>			
		<div class="content-wrapper clearfix">
			<div class="container">
				<div id="main" class="row-fluid">
					<section  id="content" class="span9" role="main">
						<div id="post-content-container">
							 
						    <?php foreach($newslist as $row) {?>
                        
                        	<article class="post-25 post type-post status-publish format-standard hentry category-architecture category-decorations category-luxury category-sales tag-custom tag-interior clearfix" id="post-25">
								<header>
									<h2 class="entry-title">
										<a href="<?php echo site_url("news/".$row["NewsID"]);?>" title="<?php echo $row["NewsTitle"];?>" rel="bookmark">
											<?php echo $row["NewsTitle"];?>
										</a>
									</h2>
									<div class="entry-meta">
										<span class="meta-parts">
											<time datetime="2013-10-30T18:55:59+00:00"><i class="icon-calendar"></i><?php echo date("M d, Y", strtotime($row["Date"]));?></time>
										</span>
										 
										 
									</div><!-- .entry-meta -->
								</header>
								<div class="entry-content clearfix">
									<p>
                                    <?php echo $row["NewsSummary"];?>
                                    </p>
									<div class="read-more">
										<a href="<?php echo site_url("news/".$row["NewsID"]);?>">Read more&nbsp;<i class="icon-double-angle-right"></i></a>
									</div>
								</div><!-- .entry-content -->
							</article>
							
						  <?php } ?>
                         
                         
                         
						</div><!-- /.post-content-container -->
						<!--<div class="blog-pagination">
							<ul class='page-numbers'>
								<li><span class='page-numbers current'>1</span></li>
								<li><a class='page-numbers' href='#'>2</a></li>
								<li><a class="next page-numbers" href="#">Next&nbsp;<i class="icon-double-angle-right"></i></a></li>
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
			</div><!-- /.container via hooks-->
		</div><!-- /.content-wrapper -->