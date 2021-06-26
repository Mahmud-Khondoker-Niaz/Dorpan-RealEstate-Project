 
  <div id="bottombg"> 
   <div id="content">
      <div id="content_left">
	      <div class="aRow">
	     
         <?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'placeholder'=> 'Username or Email',
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'placeholder' => 'Password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
         <section class="container">
    <div class="login">
      <h1>Login</h1>
     <?php echo form_open($this->uri->uri_string()); ?>
        <p><?php echo form_input($login); ?>   <?php echo form_error($login['name'],'<div class="error">', '</div>'); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></p>
        <p><?php echo form_password($password); ?>  <?php echo form_error($password['name'],'<div class="error">', '</div>'); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></p>
        
        
        
        <p class="remember_me">
           
            <?php echo form_checkbox($remember); ?>
           <?php echo form_label('Remember me', $remember['id']); ?>
           
        </p>
        <p class="submit"> <?php echo form_submit('submit', 'Login'); ?>    <!--<input type="submit" name="commit" value="Login">--></p>
     <?php echo form_close(); ?>
    </div>

    <div class="login-help">
      <p>Forgot your password? <?php echo anchor('/siteadmin/forgot_password/', 'Click here to reset it'); ?>.</p>
    </div>
  </section>
         
         
         
         
         
         
         
         
         
		   </div>
	  </div>
	  <div id="content_right">
	     <div class="pRow">
	     
         
  Right
         
         
		  </div>
	  </div>
   </div>
   
   <div id="footer">
     <div class="footer_content">
        All contents copyright © Shahzadpur Vision. All rights reserved.<br />
Website Design, Development and SEO by <a target="_blank" href="http://www.qubitlab.com/">Qubitlab</a>
	  </div>
   </div>
   </div>
</div>
</body>
</html>