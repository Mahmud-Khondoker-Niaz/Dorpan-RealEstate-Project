
	
 <!-- End Site Header --><!-- Site Showcase -->
		 <!-- End Site Header --><!-- Site Showcase -->
							<div class="site-showcase">
							<!-- Start Page Header -->
							<div class="parallax page-header" style="background-image:url(wp-content/uploads/2014/06/slide31.jpg);">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<h1>News & Events</h1>
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
            <header class="single-post-header clearfix">
              <h2 class="post-title"><?php echo $news["NewsTitle"];?></h2>
            </header>
            <article class="post-content">
                  <div class="post-meta meta-data">
                      <span><i class="fa fa-calendar"></i> <?php echo date("dS M,Y",strtotime($news["Date"]));?></span>
                       
                    
                    
                </div>
              <div class="featured-image"> <img src="<?php echo base_url().$news["Image"];?>" alt=""> </div>
               <?php 
			   echo $newsdetail["Detail"];
			   ?>
            </article>
             
             
          </div>                  
                  
                  
                  
                  
                  
                  
                  
                  <!-- Start Sidebar -->
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
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
                          
                          
                          </ul></div></div> 
              </div>
          </div>
      </div>
     </div>
<!-- Start Site Footer -->

 
