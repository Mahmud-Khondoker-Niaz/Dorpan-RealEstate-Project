
	
   <!-- End Site Header -->  <!-- Site Showcase -->
  <div class="site-showcase">
   <!-- End Site Header --><!-- Site Showcase -->
							<div class="site-showcase">
							<!-- Start Page Header -->
							<div class="parallax page-header" style="background-image:url(wp-content/uploads/2014/06/slide31.jpg);">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<h1>Message</h1>
										</div>
								   </div>
							   </div>
							</div>
							<!-- End Page Header -->
							</div>  <!-- Start Content -->
  <div class="main" role="main">
      <div id="content" class="content full">
          <div class="container">
              <div class="row">
              <div class="col-md-12">
                  <div class="row">
<div class="col-md-12">
<?php if(isset($chairmanmessage)) {?>

<div class="tabs">
<ul class="nav nav-tabs">
<li class="active"> <a data-toggle="tab" href="#0"> Message from the Chairman<br />
 </a> </li>
<li class=""> <a data-toggle="tab" href="#1">Message from the Managing Director<br />
 </a> </li>

</ul>
<div class="tab-content">
<div id="0" class="tab-pane active">

<?php echo $chairmanmessage["Detail"];?>

</div>
<div id="1" class="tab-pane ">

<?php echo $mdmessage["Detail"];?>

</div>

</div>
</div>

<?php } else {?>

<h3><?php echo $message["PageName"];?></h3>

<?php echo $message["Detail"];?>



<?php }?>
</div>

</div>







                  </div>
                  <!-- Start Sidebar -->
                   
              </div>
          </div>
      </div>
  </div>

<!-- Start Site Footer -->

 
