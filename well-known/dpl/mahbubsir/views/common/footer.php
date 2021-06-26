 
		<footer id="footer">
			<div class="container cleafix">
				<p class="pull-left">Copyright 2016, All Rights Reserved by <?php echo   $siteinfo["SiteName"]; ?></p>
				<div class="pull-right">
					<ul class="footer-social">
						<li><a href="<?php echo  $siteinfo["SiteFaceBook"];?>" title="Facebook"><i class="icon-facebook"></i></a></li>
						<li><a href="<?php echo $siteinfo["SiteTwitter"];?>" title="Twitter"><i class="icon-twitter"></i></a></li>
					 				
						<li><a href="<?php echo $siteinfo["SiteGooglePlus"];?>" title="Google Plus"><i class="icon-google-plus"></i></a></li>														
					</ul>
				</div>
			</div>
		</footer>
	</div><!-- .container-full -->
	<script type="text/javascript">
		jQuery(document).ready(function(){
		// Tab contents = .inside
			var tag_cloud_class = '#tagcloud';
			//Fix for tag clouds - unexpected height before .hide()
			var tag_cloud_height = jQuery( '#tagcloud').height();
			jQuery( '.inside ul li:last-child').css( 'border-bottom','0px' ); // remove last border-bottom from list in tab content
			jQuery( '.realTabs').each(function(){
				jQuery(this).children( 'li').children( 'a:first').addClass( 'selected' ); // Add .selected class to first tab on load
			});
			jQuery( '.inside > *').hide();
			jQuery( '.inside > *:first-child').show();
			jQuery( '.realTabs li a').click(function(evt){ // Init Click funtion on Tabs
				var clicked_tab_ref = jQuery(this).attr( 'href' ); // Strore Href value
				jQuery(this).parent().parent().children( 'li').children( 'a').removeClass( 'selected' ); //Remove selected from all tabs
				jQuery(this).addClass( 'selected' );
				jQuery(this).parent().parent().parent().children( '.inside').children( '*').hide();
				jQuery( '.inside ' + clicked_tab_ref).fadeIn(500);
				evt.preventDefault();
			});
		});
	</script>	
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.form.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/jpages.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/library/bootstrap/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.jcarousel.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.flexslider.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/html5shiv.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.placeholder.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.selectbox.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/map-highlight.js'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var slide = {"start":"1","interval":"5000"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/real-expert.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/selectivizr.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/respond.min.js'></script>
    
    <script>
	$('#myCarousel').css('height', galleryHeight);
	</script>
</body>
</html>
