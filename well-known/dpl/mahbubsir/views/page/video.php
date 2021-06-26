		
        <header id="banner">
			<div id="banner_container" class="container">
				<h3 class="banner-title"><?php echo "Video";?></h3>
				<p class="banner-subtitle"></p>
			</div>
		</header>
        
        <div class="content-wrapper clearfix">
			<div class="container"><!-- container via hooks -->
				<div id="main" class="row-fluid">
					<section  id="content" class="span9" role="main">
						<div id="archive-wrapper">
							
                              <?php foreach($videolist as $row) {?>
                            
                            <div class="agent-container clearfix">
								<div class="div-row agent-thumbnail">
									 
                                     <?php echo $row["EmbeddedCode"];?>
                                     
                                     
                                     
                                     
                                     
                                     
                                     
									 
								</div>
								<div class="div-row agent-desc">
									
                                     <?php echo $row["Detail"];?>
									 
								</div>
							</div>	
							 
                             <?php } ?>
                             
						</div><!-- /#archive-wrapper -->	
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