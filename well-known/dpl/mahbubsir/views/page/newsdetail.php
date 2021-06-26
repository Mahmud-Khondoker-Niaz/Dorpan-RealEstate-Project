		
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
							 
							<article class="post-25 post type-post status-publish format-standard hentry category-architecture category-decorations category-luxury category-sales tag-custom tag-interior clearfix" id="post-25">
								<header>
									<h1><?php echo $news["NewsTitle"];?></h1>
									
                                    
                                    <div class="entry-meta">
										<span class="meta-parts"><time datetime="2013-10-30T18:55:59+00:00"><i class="icon-calendar"></i><?php echo date("dS M, Y",strtotime($news["Date"]));?></time></span>
										 
										 
									</div>  
								</header>
								<div class="entry-content clearfix">
									    	 <?php echo $newsdetail["Detail"];?>
									 
									 <!-- /#author-box -->
								</div><!-- .entry-content -->
							</article>
							 <!-- #comments -->
						</div><!-- /#post-content -->
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