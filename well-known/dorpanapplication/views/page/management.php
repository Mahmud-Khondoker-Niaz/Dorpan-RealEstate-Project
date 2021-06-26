 
	
 <!-- End Site Header --><!-- Site Showcase -->
		 <!-- End Site Header --><!-- Site Showcase -->
							<div class="site-showcase">
							<!-- Start Page Header -->
							<div class="parallax page-header" style="background-image:url(wp-content/uploads/2014/06/slide31.jpg);">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<h1>Management</h1>
										</div>
								   </div>
							   </div>
							</div>
							<!-- End Page Header -->
							</div>
							
							<div class="main" role="main"><div id="content" class="content full"><div class="container"><div class="row"><div class="col-md-9"><div class="block-heading"><h4><span class="heading-icon"><i class="fa fa-users"></i></span>Management</h4></div><div class="agents-listing">
							
							
							<ul>
			<?php 
								 
								foreach($managementlist as $row) {
								?>				
			
            <li class="col-md-12">
           <!--

 <div class="col-md-4">
			<a href="<?php echo site_url("management/".$row["WriterID"]);?>" class="agent-featured-image"> <img src="<?php echo base_url().$row["Image"];?>" alt="agent"></a>
			</div>
-->

            <div class="col-md-8"><div class="agent-info">
            <div class="counts"><strong><i class="fa fa-plus"></i></strong><span><?php echo $row["Desigantion"];?></span></div>
            <h3><a href="<?php echo site_url("management/".$row["WriterID"]);?>"><?php echo $row["WriterName"];?></a></h3>
            
            <?php echo word_limiter(strip_tags($row["Detail"]),20,'...');?>
            
            </div>
            <div class="agent-contacts clearfix"><ul><li><a href="<?php echo $row["FaceBook"];?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php echo $row["Twitter"];?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php echo $row["GooglePlus"];?>" target="_blank"><i class="fa fa-google-plus"></i></a></li></ul></div></div>
            
            </li>
							
							 
			 <?php 
								}
								?>
			
			
			
			 
			
			
			
			
			
			
			
			
			</ul></div>
			
	 
			
			
			
			
			
			
			
			
			</div>
			
			<div class="sidebar right-sidebar col-md-3">
			
			
			 
                      <div id="recent_posts-2" class="widget sidebar-widget widget_recent_posts"><div class="sidebar-widget-title"><h3 class="widgettitle">Latest News</h3></div>
                          
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
                  
                  
                        
                        </div></div></div></div> </div> 
<!-- Start Site Footer -->

 
