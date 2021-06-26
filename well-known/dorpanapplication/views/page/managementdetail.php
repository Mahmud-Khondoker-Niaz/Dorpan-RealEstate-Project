 
	
 <!-- End Site Header --><!-- Site Showcase -->
		 <!-- End Site Header --><!-- Site Showcase -->
							<div class="site-showcase">
							<!-- Start Page Header -->
							<div class="parallax page-header" style="background-image:url(wp-content/uploads/2014/06/slide31.jpg);">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<h1>Our Management</h1>
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
                      <div class="single-agent">
                           
                          <h2 class="page-title"><?php echo $managementdetail["WriterName"];?></h2>
                          <div class="row">
                              
<!--

               <div class="col-md-6 col-sm-6">
                                      <img src="<?php echo base_url().$managementdetail["Image"];?>" alt="<?php echo $managementdetail["WriterName"];?>" class="img-thumbnail">
                              </div>

-->

                              <div class="col-md-12 col-sm-12">
                                     <?php echo $managementdetail["Detail"];?>
                              </div>
                          </div>
                          <div class="row">
                                  <div class="col-md-6 col-sm-6">
                                  <div class="agent-contact-details">
                                          <h4>Contact Details</h4>
                                          <ul class="list-group">
                                          <li class="list-group-item"> <span class="badge"><?php echo $managementdetail["ContactNumber"];?></span> Mobile Phone </li>
                                           
                                          <li class="list-group-item"> <span class="badge"><?php echo $managementdetail["Email"];?></span> Email </li>
                                          <li class="list-group-item">
                                              <div class="social-icons">
                                                  <a target="_blank" href="<?php echo $managementdetail["FaceBook"];?>"><i class="fa fa-facebook"></i></a>
                                                  <a target="_blank"  href="<?php echo $managementdetail["Twitter"];?>"><i class="fa fa-twitter"></i></a>
                                                  <a target="_blank"  href="<?php echo $managementdetail["GooglePlus"];?>"><i class="fa fa-google-plus"></i></a>
                                                  <a target="_blank" href="mailto:<?php echo $managementdetail["Email"];?>"><i class="fa fa-envelope"></i></a>
                                             </div>
                                          </li>
                                          </ul>
                                      </div>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                  <div class="agent-contact-form">
                                          <h4>Contact Form</h4>
                                      <form>
                                              <input type="email" name="Email Address" class="form-control" placeholder="Email Address">
                                          <textarea name="comments" class="form-control" placeholder="Your message" cols="10" rows="5"></textarea>
                                          <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                          </form>
                                  </div>
                               </div>
                          </div>
                    </div>
                    <div class="spacer-20"></div>
                    <!-- Start Related Properties -->
                    
                   
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

 
