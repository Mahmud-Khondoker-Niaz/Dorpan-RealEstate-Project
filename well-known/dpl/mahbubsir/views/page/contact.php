 <div class="content-wrapper clearfix">
			<header id="banner">
				<div id="banner_container" class="container">
					<h3 class="banner-title">Contact Us</h3>
					<p class="banner-subtitle"></p>
							
				</div>
			</header>			
			<div class="container">
				<div id="contact-18" class="post-18 page type-page status-publish hentry" >
					<div>
                    
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14593.68318628732!2d90.3903777!3d23.8746928!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x59c66a1c72fcb26f!2sDorpan+Properties+Limited!5e0!3m2!1sen!2sbd!4v1447958600810" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                    </div><!-- /#contact-map -->
					<div class="row-fluid clearfix" >
						<div class="span9">
							<div class="form-wrapper">
								<div class="contact-form-title">We'd Love to Hear From You, Get In Touch With us !</div>
								 
								<form id="contact-page-form" action="#" method="post">
									<div class="controls controls-row">
										<input class="span4" name="name" type="text" placeholder="*Name " required />
										<input class="span4" name="email" type="email" placeholder="*Email" required />
										<input class="span4" name="website" type="text" placeholder="Website" />
									</div>
									<div class="controls">
										<textarea name="message" class="span12" rows="10" placeholder="*Message" required></textarea>
									</div>
									<div class="controls">
										<input id="submit" class="btn btn-contact" type="submit" name="submit" value="Send" />
										<input type="hidden" name="action" value="send_message" />
										<input type="hidden" name="target" value="support@envato.com" />
									</div>
								</form>
							</div><!-- form-wrapper -->
						</div><!-- /.span9 -->
						<div class="span3">
							<div class="contact-page-info">
								<address>
									<div class="company-name">Contact Address</div>
									 
									 
									 <?php echo $contactdetail["Detail"];?> 
									 
								</address>
							</div><!-- /.contact-page-info -->
						</div><!-- /.span3 -->
					</div><!-- /.row-fluid -->
				</div><!-- /#contact -->
			</div><!-- /.container via hooks-->
		</div><!-- /.content-wrapper -->