<?php include("sitecommon/datefunction.php");?>
<?php
 
    if (getenv('HTTP_X_FORWARDED_FOR')) {
        $pipaddress = getenv('HTTP_X_FORWARDED_FOR');
        $ipaddress = getenv('REMOTE_ADDR');
    } else {
        $ipaddress = getenv('REMOTE_ADDR');
      
    }
	
	
	
	 
	foreach($imagecountcomment as $comment_count){
$count_total_count[$comment_count["SiteuserID"]] = $comment_count["Image"];
 
}

/*foreach($imagecountreply as $reply_count){

$count_total_count_reply[$reply_count["SiteuserID"]] = $reply_count["Image"];


 
}
*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	function curPageURL() {
$pageURL = 'http';
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
	
	 {$pageURL .= "s";}
$pageURL .= "://";
if ($_SERVER["SERVER_PORT"] != "80") {
$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
} else {
$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
}
return $pageURL;
}



$get_html =     parse_smileys(getHtml($blogdetail[0]["Detail"]),base_url()."smileys/");

$meta_des = substr(strip_tags($get_html),0,400);

$detailcontent = preg_replace('/(<br\s*\/?>\s*)+/', "<br/><br/>",auto_link( $get_html,'both',TRUE));
						



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head  prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#    article: http://ogp.me/ns/article#">
			  
	 <meta property="og:type"                 content="Magazine"/> 
     <meta property="og:url"                  content="<?php echo curPageURL();?>"/>
     <meta property="og:site_name"            content="A complete online magazine"/>
     <meta property="og:image"                content="<?php echo base_url();?>images/interface/logo.png"/>
     <meta property="og:title"                content="<?php echo $title;?>"/>
     <meta property="og:description"          content="<?php echo $meta_des;?>"/> 				  
     <meta property="fb:admins" content="524396702"/>
	 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"; />

 
<title><?php echo $title;?></title>
 <?php echo smiley_js(); ?>

<link rel="shortcut icon" href="images/favicon.ico" />
<meta name="description" content="" />
<meta name="keywords" content="bdtoday, Bangla News, Bangladesh News, Bangla online news, Latest News" />
	



<!--[if IE]><link href="<?php echo base_url();?>sitecss/ie.css" rel="stylesheet" type="text/css" /><![endif]--> 
<!--[if IE 6]><script src="<?php echo base_url();?>sitejavascript/ie6PngFix.js"></script><![endif]--> 
<link href="http://www.media.bdmonitor.net/sitecss/styleblogtemplate.css" rel="stylesheet" type="text/css"/>

 
<script type="text/javascript" src="http://www.media.bdmonitor.net/jquery-1.7.1.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>sitejavascript/menu-ver.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.media.bdmonitor.net/sitecss/module-t.css">
 

<script type="text/javascript" charset="utf-8" src="http://www.media.bdmonitor.net/sitejavascript/bgdate.js"></script>	
		
<link href="http://www.media.bdmonitor.net/sitecss/pagination.css" rel="stylesheet" type="text/css">


  <script type="text/javascript" src="http://www.media.bdmonitor.net/sitejavascript/commentform.js"></script>

    <script type="text/javascript" src="http://www.media.bdmonitor.net/sitejavascript/jquery.fancybox.pack.js?v=2.1.3"></script>
	<link rel="stylesheet" type="text/css" href="http://www.media.bdmonitor.net/sitecss/jquery.fancybox.css?v=2.1.2" media="screen" />



<script type="text/javascript" src="http://www.media.bdmonitor.net/sitejavascript/ajaxupload.3.5.js" ></script>
 

    <script type="text/javascript" language="javascript" src="http://www.media.bdmonitor.net/banglakeyboard/combined.js"></script>
	<script type="text/javascript" language="javascript" src="http://www.media.bdmonitor.net/banglakeyboard/unijoy00.js"></script>
	<script type="text/javascript" language="javascript" src="http://www.media.bdmonitor.net/banglakeyboard/phonetic.js"></script>
	<script type="text/javascript" language="javascript" src="http://www.media.bdmonitor.net/banglakeyboard/layout00.js"></script>
	<script type="text/javascript" language="javascript" src="http://www.media.bdmonitor.net/banglakeyboard/common00.js"></script>
		

 


 

<script>
function getfocus()
{
document.getElementById('myAnchor').focus();
}

function losefocus()
{
document.getElementById('myAnchor').blur();
}
</script>





<script type="text/javascript" language="JavaScript">
<!-- Copyright 2006,2007 Bontrager Connection, LLC
// http://www.willmaster.com/
// Version: July 28, 2007
var cX = 0; var cY = 0; var rX = 0; var rY = 0;
function UpdateCursorPosition(e){ cX = e.pageX; cY = e.pageY;}
function UpdateCursorPositionDocAll(e){ cX = event.clientX; cY = event.clientY;}
if(document.all) { document.onmousemove = UpdateCursorPositionDocAll; }
else { document.onmousemove = UpdateCursorPosition; }
function AssignPosition(d) {
if(self.pageYOffset) {
	rX = self.pageXOffset;
	rY = self.pageYOffset;
	}
else if(document.documentElement && document.documentElement.scrollTop) {
	rX = document.documentElement.scrollLeft;
	rY = document.documentElement.scrollTop;
	}
else if(document.body) {
	rX = document.body.scrollLeft;
	rY = document.body.scrollTop;
	}
if(document.all) {
	cX += rX; 
	cY += rY;
	}
d.style.left = (cX+10) + "px";
d.style.top = (cY+10) + "px";
}
function HideContent(d) {
if(d.length < 1) { return; }
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
if(d.length < 1) { return; }
var dd = document.getElementById(d);
AssignPosition(dd);
dd.style.display = "block";
}
/*function ReverseContentDisplay(d) {
if(d.length < 1) { return; }
var dd = document.getElementById(d);
AssignPosition(dd);
if(dd.style.display == "none") { dd.style.display = "block"; }
else { dd.style.display = "none"; }
}
*/
function onlyContentDisplay(d) {
if(d.length < 1) { return; }
var dd = document.getElementById(d);
AssignPosition(dd);
if(dd.style.display == "none") { dd.style.display = "block"; }
/*else { dd.style.display = "none"; }*/
}


function closeContentDisplay(d) {
if(d.length < 1) { return; }
var dd = document.getElementById(d);
AssignPosition(dd);
if(dd.style.display != "none") { dd.style.display = "none"; }
 
}

//-->
</script>









<script>

$(document).ready(function(){
		
	 
	var refreshId = setInterval(function(){			
					  $.ajax({
					cache: false,
					async: true,//false --> This will make sure the browser waits until request completes,  true --> don't wait
					url: "<?php echo base_url();?>postrate/logininfo"
					});
					
   	}, (900000));	
 
});
</script>




<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11406089-10']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body  onload="changeLayout('p','txtComment');" class="bodyColor">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=387757051319026";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	<div id="wrapper"><!-- Begin: wrapper -->
    	 	
			
			  
 <?php
  

        $username = $this->session->userdata('blogger_Username');
		$name = $this->session->userdata('blogger_Name');
		
		$user_id = $this->session->userdata('blogger_id');
	    $logged_in = $this->session->userdata('is_blogger_logged_in');
		$level_status = $this->session->userdata('blogger_status');
	
		 
		
?>
	  
	  
  
			
			
			 <?php include("sitecommon/siteheader.php");?>
		
		<!-- End: header -->
        <!-- End: mainNav -->
			
			
			
			
			
			
			
			
		
		
		
        <div id="page"><!-- Begin: page -->
        	<div id="content"><!-- Begin: content -->
            	 
				 
				
				
                <div id="contentMid">
                	<div id="contentMidInner">
                        <div id="contentMidLeft">
                            
							
							
							
							
                               
                             
							
							
						<div class="login">
                             
                                 <h3><a href="">ইউজার প্যানেল</a></h3>
								<?php if($logged_in != true) {?> 	
								<div> 
								
							 
								<?php echo form_open_multipart('login/check_login', array("name" => "josForm", "id" =>"josForm", "class" =>"form-validate" )); ?>	
								
								 <p style="color:red;"><?php  echo $this->session->flashdata('loginmsg');?></p>
				  <p>ইউজার নাম</p>
				  <p>
				   <input id="myAnchor" name="userName" /></p>
				  <p>পাসওয়ার্ড</p>
				   <p> <input type="password" name="passWord" /></p>
				   <p>
					 
					<button type="submit" class="buttonlogin">লগইন করুন</button>
				 </p>
				<?php echo form_close();?>
				
				<p><a href="<?php echo site_url("/registration");?>">নতুন অ‍্যাকাউন্ট তৈরি করুন</a></p>
				
				<p><a href="<?php echo site_url("/registration/passwordreset");?>">পাসওয়ার্ড ভুলে গেছেন?</a></p>
				</div>
				 
							<?php } ?>
							
							
							  <?php if($logged_in == true) {?>
							<div> 
							 
				
				<p><a href="<?php echo site_url("/blogpost/newpostentry/".$user_id."/".$username);?>">নতুন ব্লগ লিখুন </a></p>
				<p><a href="<?php echo site_url("/blogdetail/bloglist/".$user_id."/".$username);?>">আপনার পাতা</a></p>
				<p><a href="<?php echo site_url("/login/userloggedout/".$user_id."/".$username);?>">লগ আউট</a></p>
				
				<!--<p style=" margin-top:10px; color:white; width:200px; background:url('<?php echo base_url();?>/siteimages/notice.png') no-repeat;">নোটিফিকেশন</p>
				
						<p> <a   href="<?php echo site_url("/notification/notice");?>">নতুন নোটিস (<?php echo $totalnotice;?>)</a> </p> 
                        <p><a   href="<?php echo site_url("/notification/comment");?>">নতুন মন্তব্য (<?php echo $unreadcomment;?>)</a></p>
						<p><a  href="<?php echo site_url("/notification/reply");?>">নতুন জবাব (<?php echo $unreadreply;?>)</a></p>
						<p><a   href="<?php echo site_url("/notification/request");?>">পড়ার আমন্ত্রণ (<?php echo $unreadrequest;?>)</a></p>
				   <p  style="color:white; float:right; font-size:15px" align="right"><a onclick="return confirm('Are you sure?');"   href="<?php echo site_url("/notification/delete");?>">নোটিফিকেশন মুছে ফেলুন</a></p>-->
				
				</div>	 
							<?php } ?>	 
							 </div>	
							
							
							
							
							 
							<div class="business">
							
							<!-- <iframe frameborder="0"  scrolling="no"    width="120" height="600" style="border:0; "  src='http://www.cnbd.info/article.php?d=120&h=600' ></iframe>
        <script type='text/javascript' src='http://www.cnbd.info/ag.php'></script>
        
        -->
          <iframe frameborder="0"  scrolling="no"    width="120" height="600" style="border:0; overflow: hidden "  src='http://www.bdaffairs.net/affairsinfo.php?dh=120600' ></iframe>
        <script type='text/javascript' src='http://www.bdaffairs.net/gb.php'></script>   
        
        
        
        
        
							
							</div> 
							
							<!--<div class="business">
                             
                                 <h3><a href="##">অনলাইনে রয়েছেন</a></h3>
							 
						    
                               
							    
								
								
							     
                                <ul class="businessList">
                                   
								    
								    <li><a href="##">আরিফ ঊল ইসলাম</a></li>
                                    <li><a href="##">নুহাশ পল্লীতে হুমায়ূনের দাফন : অন্তরালের ঘটনা</a></li>
									<li><a href="##">এটিএন কার্যালয়ে র‌্যাব মাহফুজুর রহমানকে জিজ্ঞাসাবাদ
</a></li>
									
									 
                                </ul>
                            </div>-->
							
							
							
						
						 
							
							
							
							
							
					
					
					
				 
								
					
					
					
					
		
				
				
				
				
				
				
					
				 
				
				
				
				
					
					
					
					
				 
							
							
								
					
					
					
					
							
				
				
					 
				
				
				
				
				
				
				 				
							
							
							
							
							
						 				
							
									
							
							
							
							
									
							
							
                            
                            
                             
               				
							              
							
							
                            
							
							
                            
							
							
							
							
							
							
                            
                            
                            
                        </div>
						
						
                        <div id="contentMidRight">
						
					<!-- <iframe frameborder="0"  scrolling="no"    width="468" height="60" style="border:0; margin-bottom:20px; "  src='http://www.cnbd.info/article.php?d=468&h=60' ></iframe>
        <script type='text/javascript' src='http://www.cnbd.info/ag.php'></script>-->
        
           <iframe frameborder="0"  scrolling="no"    width="468" height="60" style="border:0; overflow: hidden "  src='http://www.bdaffairs.net/affairsinfo.php?dh=46860' ></iframe>
        <script type='text/javascript' src='http://www.bdaffairs.net/gb.php'></script> 
        
					 
						
						
						
						  
 					
						<div  class="blogcontent">
						 <p align="left"><h3><?php echo parse_smileys($blogdetail[0]["Heading"], base_url()."smileys/");?></h3></p>	 
						 <p class="writterinfo">
						লিখেছেন  লিখেছেন  <a style="color: rgb(107, 77, 166);" href="<?php echo site_url("/blogdetail/bloglist/".$blogdetail[0]["SiteuserID"]."/".$blogdetail[0]["Username"]);?>"> <?php echo $blogdetail[0]["Name"];?></a> <?php echo getBanglaDate(date("d F, Y, h:i:s", strtotime($blogdetail[0]["Date"])))." ".getbanglatime(date("H", strtotime($blogdetail[0]["Date"]))); ?>	
		   
						 
						 </p>
						
						<p> <?php if(count($perviousblog)>0) {?>
		   <div style="float:left; font-size:18px;"> <a href="<?php echo site_url("/blogdetail/detail/".$perviousblog[0]["SiteuserID"]."/".$perviousblog[0]["Username"]."/".$perviousblog[0]["BlogpostID"]);?>"> &lt;&lt; আগের পোস্ট </a> </div> <?php } ?> <?php if(count($nextblog)>0) {?><div style="float:right;  font-size:18px;"><a href="<?php echo site_url("/blogdetail/detail/".$nextblog[0]["SiteuserID"]."/".$nextblog[0]["Username"]."/".$nextblog[0]["BlogpostID"]);?>">পরের পোস্ট &gt;&gt;</a></div><?php } ?></p>
						
						 <p  class="detailcontent">
						 
						 <?php 
						 
						 
						   
                        
                        
                        
                        
                        
						 
						 
						 
						 
						   echo  $detailcontent; 
						 
						 
						 ?>
						 
						 
						 
						 
						 
						 
						 
						 </p>	 
						 
						 <p align="left" style="font-size:15px;">বিষয়: <?php echo ($blogdetail[0]["Category"]!='Biyer_golpo')?$blogdetail[0]["Category"] :'বিয়ের গল্প';?></p>
						 
						 <div style="float:left; margin: 20px 0px; clear:both; border:solid 2px #E6E6E6;   padding:5px 10px; width:454px">
					<!-- AddThis Button BEGIN -->
					
					<div class="addthis_toolbox addthis_default_style ">

<div style="float:left;" class="fb-like" data-href="<?php echo curPageURL();?>/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
<!--<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>-->
 <a class="addthis_button_facebook"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_email"></a>
    <a class="addthis_button_print"></a>
	
<!--<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>-->
<a class="addthis_counter addthis_pill_style"></a>
<div style="float:right; height:20px"><a href="http://pdfmyurl.com/?url=<?php echo site_url('pdf/writepdf/'.$blogdetail[0]["BlogpostID"]);?>"><img height="20" style="padding:0px;" src="<?php echo base_url();?>siteimages/pdf-icon.png" /></a></div>
</div> 
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e1309a05920a4e1"></script>
<!-- AddThis Button END -->
					</div>
						 
						 <p align="right" class="contentbottom">
						<?php if($logged_in == true) { if($username == $blogdetail[0]["Username"]){?>
		  <a  href="<?php echo site_url("/blogpost/newpostdraft/".$blogdetail[0]["SiteuserID"]."/".$blogdetail[0]["Username"]."/".$blogdetail[0]["BlogpostID"]);?>"><img  width="20"  title="এডিট করুন" alt="এডিট করুন" src="<?php echo base_url();?>siteimages/edit.png"></a> | <a onClick="return confirm('আপনি কি ড্রাফট করতে চান?');"  href="<?php echo site_url("/blogpost/makedraft/".$blogdetail[0]["SiteuserID"]."/".$blogdetail[0]["Username"]."/".$blogdetail[0]["BlogpostID"]);?>"> <img  width="15"  title="ড্রাফট করুন" alt="ড্রাফট করুন" src="<?php echo base_url();?>siteimages/draft.png"></a> |
		  <a onClick="return confirm('আপনি কি মুছে ফেলতে চান?');" href="<?php echo site_url("/blogdetail/delete/".$blogdetail[0]["SiteuserID"]."/".$blogdetail[0]["Username"]."/".$blogdetail[0]["BlogpostID"]);?>"><img  width="15"  title="মুছে ফেলুন" alt="মুছে ফেলুন" src="<?php echo base_url();?>siteimages/recycle.png"></a> |
		  
		  <?php if($blogdetail[0]["IsPublish"] =='Yes') {?>
		   <a  href="<?php echo site_url("/blogdetail/blockblog/".$blogdetail[0]["SiteuserID"]."/".$blogdetail[0]["Username"]."/".$blogdetail[0]["BlogpostID"]);?>"><img  width="15"  title="ব্লক করুন" alt="ব্লক করুন" src="<?php echo base_url();?>siteimages/block.png"></a> |
		   <?php } ?>
		   
		   
		  <?php }
		  ?>
		  
		  <a href="<?php echo site_url("/blogdetail/sendinvitation/".$blogdetail[0]["SiteuserID"]."/".$blogdetail[0]["Username"]."/".$blogdetail[0]["BlogpostID"]);?>">প্রিয়দেরকে আমন্ত্রণ জানান</a> |
		  <a href="<?php echo site_url("/blogdetail/makefavourite/".$blogdetail[0]["SiteuserID"]."/".$username."/".$blogdetail[0]["BlogpostID"]);?>"><img width="15" title="প্রিয়তে রাখুন" alt="প্রিয়তে রাখুন" src="<?php echo base_url();?>siteimages/fav.png"></a> 
		  <?php
		  
		   } ?>  
		  </p>
					
					
					
					
					 
					 
					 
					
					
					<p class="bloginfo">
					
					<span style="float:left; ">
					 <?php echo getBanglaDate($blogdetail[0]["TotalVisit"]); ?> বার পঠিত, <?php echo getBanglaDate(count($allcomment) + count($allreply)); ?>  টি মন্তব্য
		  
		  </span>
	
		  <?php if($user_id != $blogdetail[0]["SiteuserID"]  && $logged_in == true){?>
		   <!--
		    <span style="float:right;" id="rating">
		 
		  
		  
		 
		 
		 
		  
			 <?php $dislike_msg_id =  $blogdetail[0]["BlogpostID"]."likeid".$user_id?>
		  	<a href='##' id="<?php echo $dislike_msg_id;?>" class='dis_like_button'><img  width="15"  src='<?php echo base_url();?>siteimages/minus.png'/></a>&nbsp;<span class='dis_like_show<?php echo $dislike_msg_id;?>'><?php echo getBanglaDate($blogdetail[0]["TotalMinus"]);?></span>
		  
			  
		  
		  </span>
		  
		  
		  	
			
			  <span style="float:right; padding-right:5px;" id="rating">
		   <?php $msg_id =  $blogdetail[0]["BlogpostID"]."likeid".$user_id?>
		  	<a href='##' id="<?php echo $msg_id;?>" class='like_button'><img width="15"  src='<?php echo base_url();?>siteimages/plus.png'/></a>&nbsp;<span class='like_show<?php echo $msg_id;?>'><?php echo getBanglaDate($blogdetail[0]["TotalPlus"]);?></span>
		
		 
			  
		  |
		 
		  
		  </span>
		  -->
		  
		  
		    <span style="float:right; padding-right:5px;" id="rating">
		   <?php $msg_id =  $blogdetail[0]["BlogpostID"]."reportid".$user_id?>
		  	<a href='##' id="<?php echo $msg_id;?>" class='report_button'><img  width="15"   title="রিপোর্ট করুন" alt="রিপোর্ট করুন" src="<?php echo base_url();?>siteimages/report.png"></a>&nbsp;<span class='report_show<?php echo $msg_id;?>'></span>
		
		 
			  
		  |
		 
		  
		  </span>
		  <?php } ?>
					
					</p>
					
					
					
					
				 
					
					
<br clear="both"/>
<p>&nbsp;</p>
					<iframe frameborder="0" scrolling="no" width="336" height="280" style="border:0; overflow: hidden " src="http://www.bdaffairs.net/affairsinfo.php?dh=336280"></iframe>
					
					
					
					
					
					
							 
						</div>	 
							 
								  
			
			
			 <div class="comment">
			 
			 <p class="commentstart">
			পাঠকের মন্তব্য: 
			
			</p>
			
			<p>
			
			
			
			
			<?php $icount=1; foreach($allcomment as $all_comment) {?>

<div class="comment_border" id="">
<table width="100%">
       <tbody><tr>
          <td bgcolor="#F6F4FF" width="100%" align="left"> <div style="padding:0 4px; float:left; font-size:16px;">   <?php echo getBanglaDate($icount++);?>  
            
</div> 
          <div style="float:left; padding-left:10;   color:#F6F4FF; font-size:9"> <?php echo $all_comment["BlogcommentID"]; ?> <a name="<?php echo $all_comment["BlogcommentID"]; ?>"></a> </div> <div style="float:right; padding-right:5px; "> <?php echo getBanglaDate(date("d F Y", strtotime($all_comment["Date"]))); ?> <?php echo getbanglatime(date("H", strtotime($all_comment["Date"]))); ?> <?php echo getBanglaDate(date("h:i", strtotime($all_comment["Date"]))); ?></div>	</td></tr>	  

        <tr valign="top">
          <td width="450" align="left">
		  <div class="commentuser" style="width:inherit; ">
		  
		  <img width="100px" align="left" style="margin-right:5px;margin-bottom:5px;" src="<?php echo base_url();?><?php echo  $count_total_count[$all_comment['SiteuserID']];  ?>"> 
		  
		  <span style="line-height:normal;"><a class="commentuser" href="<?php echo site_url("/blogdetail/bloglist/".$all_comment["SiteuserID"]."/".$all_comment["Username"]);?>"> <?php echo $all_comment["Name"]; ?></a> লিখেছেন : 
		  <?php
		   
		  $str = auto_link(parse_smileys(getHtml($all_comment["Commentblog"]), base_url()."smileys/"),'',TRUE); echo $str; 
		   
		   
		   ?>
		  
		  </span>		  </div>
		  		  		  </td>
        </tr>
		 <tr valign="top" align="center">
          <td align="right">

		   
		  <?php   /* ( $username != $all_comment["Username"] ) && */ if($logged_in == true){?>
		<?php $msg_id =  $blogdetail[0]["BlogpostID"]."reportid".$user_id."reportid".$all_comment["BlogcommentID"];?>
		<a href='##' id="<?php echo $msg_id;?>" class='reportcomment_button'><img  width="15"   title="রিপোর্ট করুন" alt="রিপোর্ট করুন" src="<?php echo base_url();?>siteimages/report.png"></a>&nbsp;<span class='reportcomment_show<?php echo $msg_id;?>'> </span>&nbsp;&nbsp;
		 
		
		<?php  if($user_id == $all_comment["BlogWritter"]) {?>
		
		
		
		
		  	|&nbsp;&nbsp; 
		 <a  onclick="return confirm('Really delete?');"   href="<?php echo site_url("/blogdetail/commentdelete/".$user_id."/".$username."/".$all_comment["BlogcommentID"]."/".$blogdetail[0]["BlogpostID"]);?>"><img  width="15"  title="মুছে ফেলুন" alt="মুছে ফেলুন" src="<?php echo base_url();?>siteimages/recycle.png"></a> &nbsp;&nbsp;<?php }?> |&nbsp;&nbsp; 
		  <?php if($level_status=='IsActive'){?>
		 <a onClick="postreply('Reply<?php echo $all_comment["BlogcommentID"];?>', 'txtReply<?php echo $all_comment["BlogpostID"];?>');  return false;" href="javascript:void(0);"><img  width="15" title="জবাব দিন" alt="জবাব দিন" src="<?php echo base_url();?>siteimages/reply.png"></a> 
       <?php }?>

		 
		   
		 
			  
		  
		 
		  <!--| <a onClick="javascript:reportComment('131837', '888094')" href="javascript:void(0);">রিপোর্ট করুন</a>	-->	  </td>
		 <?php } ?>
		
		  </tr>

</tbody></table>



<!-- Add a Reply -->




<div  class="targetclass" id='Progress<?php echo $all_comment["BlogcommentID"];?>'></div>

<div  style="display:none" id="Reply<?php echo $all_comment["BlogcommentID"];?>">

		    <table width="445" border="0" style="font-size:15px;">
			              <tbody><tr>
                <td width="8%" class="banglanormal">কীবোর্ড:&nbsp;&nbsp;&nbsp; </td>
                <td width="83%"> <p>
    	<input type="radio" value="radio" onClick="changeLayout('b','txtReply<?php echo $all_comment["BlogcommentID"];?>');" name="kbLayout">
    	<span class="engnormal"> বিজয়    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" value="radio" onClick="changeLayout('u','txtReply<?php echo $all_comment["BlogcommentID"];?>');" name="kbLayout">
		<span class="engnormal"> ইউনিজয়   </span>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio"   value="radio" name="kbLayout" checked="checked" onClick="changeLayout('p','txtReply<?php echo $all_comment["BlogcommentID"];?>');"><span class="engnormal"> ফোনেটিক   </span>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" value="radio" name="kbLayout"  onClick="changeLayout('e','txtReply<?php echo $all_comment["BlogcommentID"];?>');"><span class="engnormal"> ইংরেজি</span><br>
                  </p></td>
              <td width="9%"></td>
	                </tr>
             
			  
			<?php echo form_open("blogdetail/commentreply", array("name" => "LJ", 'method'=>'post', "class"=>"ReplyPost", "id"=>$all_comment["BlogcommentID"]."id")); ?>   <!-- "onsubmit"=>"return checkform(this);")-->
 
			  <tr>
                <td width="8%" class="banglanormal">নাম:</td>

<input type="hidden" value="<?php echo $all_comment["BlogcommentID"];?>"  name="BlogcommentID">

<input type="hidden" value="<?php echo $all_comment["BlogpostID"];?>"  name="BlogpostID">


 <input type="hidden"  name="Blog_writter_name" value="<?php echo $blogdetail[0]["Username"]; ?>" />
 

<input type="hidden" value="<?php echo $user_id;?>"  name="blogger_id">

<input type="hidden" value="<?php echo $username;?>"  name="user_name">

<input type="hidden" value="<?php echo $name;?>"  name="blogger_name">

 <input type="hidden" value="<?php echo $ipaddress; ?>"  name="IpAddress">


 <input type="hidden" value="<?php echo $blogdetail[0]["SiteuserID"];?>"  name="Blog_writter_id">



 <input type="hidden" value="<?php echo $all_comment["SiteuserID"]; ?>"  name="CommentorID">




<td align="left" style="font-size:20px;"> <?php echo $name; ?> </td></tr>
              <tr>
                <td class="banglanormal">মন্তব্য: </td>
                <td><textarea id="txtReply<?php echo $all_comment["BlogcommentID"];?>"  class="banglanormal" rows="5" style="font-size:20px;" cols="32" name="BlogReply"></textarea></td>
              </tr>
              
			  <tr><td></td><td>
			  
			  
			  
			  </td></tr>
			  <tr>
                <td>&nbsp;</td>
                <td><input type="submit" class="reply_button_class"  id="<?php echo $all_comment["BlogcommentID"];?>" value="জবাব প্রকাশ করুন"> </td>	
              </tr>
			  
			  <?php echo form_close();?>
			  
			  
			  
            </tbody></table>
          
</div>
 
<div style="display:none;" id="emoReply<?php echo $all_comment["BlogcommentID"];?>"></div>

 



<?php foreach($allreply as $all_reply) { if($all_reply["BlogcommentID"] == $all_comment["BlogcommentID"]) {?>


		<div style="margin-bottom:5px" id="<?php echo $all_comment["BlogcommentID"];?>" class="replyclass">
		<table width="100%">
        <tbody>
		
		<tr width="100%" valign="top" align="center">
		 <td  bgcolor="#CFCFE7"  align="left"><div style="float:right; padding-right:5px;"> <?php echo getBanglaDate(date("d F Y", strtotime($all_reply["Date"]))); ?> <?php echo getbanglatime(date("H", strtotime($all_reply["Date"]))); ?> <?php echo getBanglaDate(date("h:i", strtotime($all_reply["Date"]))); ?></div><div  style="float:right; padding-right:20px; color:#CFCFE7; font-size:8;"><?php echo $all_reply["BlogreplyID"]; ?>   <a name="<?php echo $all_reply["BlogreplyID"]; ?>"></a> </div>
	 
		 
		 		  		 </td>
		</tr>
		
		
		<tr valign="top" align="center">
          <td  align="left"> 
		<img width="50px" align="left" style="margin-right:5px;margin-bottom:5px;" src="<?php echo base_url();?><?php echo $count_total_count[$all_reply["SiteuserID"]]; ?>"> 
		  <span  class="commentuser" style="line-height:normal;"><a href="<?php echo site_url("/blogdetail/bloglist/".$all_reply["SiteuserID"]."/".$all_reply["Username"]);?>"> <?php echo $all_reply["Name"]; ?></a> লিখেছেন : <?php echo  auto_link(parse_smileys(getHtml($all_reply["Replyblog"]), base_url()."smileys/"),'',TRUE); ?></span>
		 
		 		  		 </td>
        </tr>
		
		
		
		 
		
		
		<tr valign="top" align="center">
          <td align="right">
<?php  if($logged_in == true ) {  ?>
		  <?php $replyid =  $blogdetail[0]["BlogpostID"]."reportid".$user_id."reportid".$all_comment["BlogcommentID"]."reportid".$all_reply["BlogreplyID"];?>
		<a href='##' id="<?php echo $replyid;?>" class='reportreply_button'> <img  width="15"  title="রিপোর্ট করুন" alt="রিপোর্ট করুন" src="<?php echo base_url();?>siteimages/report.png"></a>&nbsp;<span class='reportreply_show<?php echo $replyid;?>'> </span>&nbsp;&nbsp;| &nbsp;&nbsp;
		
		<?php  if($user_id == $all_reply["BloggerID"] ) {?> <a onClick="return confirm('Really delete?');"   href="<?php echo site_url("/blogdetail/replydelete/".$user_id."/".$username."/".$all_reply["BlogreplyID"]."/".$blogdetail[0]["BlogpostID"]);?>"><img  width="15"  title="মুছে ফেলুন" alt="মুছে ফেলুন" src="<?php echo base_url();?>siteimages/recycle.png"></a> <?php } }?> 
       

		  
		  
		
		  </tr>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		 <tr valign="top" align="right">
          <td align="right">
		
         <a name="<?php echo $all_comment["BlogcommentID"];?>"></a>
		  
		 <!-- | <a onClick="javascript:reportReply('131837', '888094', '881892')" href="javascript:void(0);">রিপোর্ট করুন</a> -->
  
		  </td>
		  </tr>		
		</tbody></table>
		
		
		
		
		
		
		
		</div>



<?php } } ?>


	

 		
		 <div style="margin-bottom:5px" id="output<?php echo $all_comment["BlogcommentID"];?>" class="replyclass"></div>


























		 







		 







		






</div>


<?php } ?>
			
			
			
			
			
			
			<div  class="targetclass" id='Comment8788809412'></div>
			
			<div  class="targetclass" id='Comment8788809412load'></div>
			
		 
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			</p>
			
			 <?php if($logged_in == true && ($level_status=='IsActive')){?>
			 
			<!-- <p style="font-size:15px;">বাংলা (ইউনিকোডে) অথবা ইংরেজীতে আপনার মন্তব্য লিখুন:</p>-->
			
			<p>
			<?php if( isset($commentsubmit) && ($commentsubmit == 'not_submitted') ) {?>
						<script type="text/javascript">
						$(function() { // when the DOM is ready...
    //  Move the window's scrollTop to the offset position of #now
    $(window).scrollTop($('#now').offset().top);
});



						
						</script> <?php } ?>
						<a name="tips"></a> 

			
			</p>
			
			<p>
			
			<table border="0" width="445"  style="font-size:15px;">
			              <tbody><tr>
                <td class="banglanormal" width="8%">কীবোর্ড</td>
                <td width="83%"><p align="left">&nbsp;&nbsp;&nbsp;
    
	
	<input name="kbLayout" onClick="changeLayout('b','txtComment');" value="radio"  type="radio">
    	<span class="engnormal">বিজয় </span> &nbsp;
		<input name="kbLayout" onClick="changeLayout('u','txtComment');" value="radio" type="radio">
		<span class="engnormal">ইউনিজয়</span> &nbsp;
		
		<input onClick="changeLayout('p','txtComment');" name="kbLayout" value="radio" checked="checked" type="radio"><span class="engnormal"> ফোনেটিক</span> &nbsp;
		
		<input onClick="changeLayout('e','txtComment');" name="kbLayout" value="radio"  type="radio"><span class="engnormal"> ইংরেজি</span>
			
	
	
                  </p></td>
              </tr><tr>
                <td class="banglanormal" width="8%">নাম: </td>
                <td align="left"  style="font-size:20px;">&nbsp;&nbsp;&nbsp;<?php echo $name;?> 
</td></tr>
 
 <tr><td></td><td align="left">
			 <input name="imageField2" src="<?php echo base_url();?>siteimages/bold.png" onClick="formatText(document.getElementById('txtComment'),'[b]','[/b]');return" title="Bold" type="image" width="25" border="0" height="25"><input name="imageField3" src="<?php echo base_url();?>siteimages/italics.png" onClick="formatText(document.getElementById('txtComment'),'[i]','[/i]')" title="Italic" type="image" width="21" border="0" height="25"><input name="imageField4" src="<?php echo base_url();?>siteimages/underline.png" onClick="formatText(document.getElementById('txtComment'),'[u]','[/u]')" title="Underline" type="image" width="23" border="0" height="25">
			  
			   <input name="imageField4"  src="<?php echo base_url();?>siteimages/blockquote.png" onClick="formatText(document.getElementById('txtComment'),'[q]','[/q]')" title="Blockquote" type="image" width="21" border="0" height="25">
			 
			 <input name="imageField4" src="<?php echo base_url();?>siteimages/link.png" onClick="addLink(document.getElementById('txtComment'))" title="Add link" type="image" width="23" border="0" height="25"> <input name="imageField5" src="<?php echo base_url();?>siteimages/upload.gif" onClick="addimage(document.getElementById('txtComment'))" title="Enter Image Link" type="image" width="23" border="0" height="25">   <a id="various1" href="#inline1"><img name="imageField5" style="vertical-align:top" type="image" src="<?php echo base_url();?>siteimages/picture.png" title="Upload and add picture" width="23" border="0" height="25"></a>
<input name="imageField4" src="<?php echo base_url();?>siteimages/youtube.jpg" onClick="addYoutube(document.getElementById('txtComment'))" title="Add Youtube video" type="image" width="23" border="0" height="25">
			 
			 
			   <style>
 
#fb_cbtn{
	margin-top:-20px;
	position:absolute;  
	margin-left:-20px;
	z-index:99999999;
}
</style> 
			 
			 <a id='bt1' value='Show Layer' onclick="setVisibility('sub3');">
<img  style="vertical-align: baseline;" src="<?php echo base_url();?>siteimages/smiley.png" />
</a>
 
		 	  
<div id="sub3" style="display:none;"><div style=" position:absolute;margin-top:-19px; padding-left:407px;"> <a id='bt1' value='Show Layer' onclick="setVisibility('sub3');">
<img  src="<?php echo base_url();?>siteimages/close.png" />
</a></div><?php echo $smiley_table; ?></div>			 
			 
<script language="JavaScript">
function setVisibility(id) {

 
if(document.getElementById(id).style.display != 'inline'){
//document.getElementById('bt1').value = 'Show Layer';
document.getElementById(id).style.display = 'inline';
}
else{
//document.getElementById('bt1').value = 'Hide Layer';
document.getElementById(id).style.display = 'none';
}

}

</script>
			 
			 
			 
			 
			 
			 </td></tr>

<?php echo form_open("blogdetail/commentpost", array("name" => "LJ",'id'=>'idForm')); ?>
          
		   <input type="hidden"  name="IpAddress" value="<?php echo $ipaddress; ?>" />  
			 <input type="hidden"  name="blogger_id" value="<?php echo $blogdetail[0]["SiteuserID"]; ?>" />
			 <input type="hidden"  name="blogger_name" value="<?php echo $blogdetail[0]["Username"]; ?>" />
			 <input type="hidden"  name="blog_id" value="<?php echo $blogdetail[0]["BlogpostID"]; ?>" />
			
			
			 <input type="hidden"  name="cName" value="<?php echo $name; ?>" />
			 <input type="hidden"  name="cblogger_id" value="<?php echo $user_id; ?>" />
			 <input type="hidden"  name="cblogger_name" value="<?php echo $username; ?>" />
			 
			 
			  <input type="hidden"  name="BlogWritter" value="<?php echo $blogdetail[0]["SiteuserID"]; ?>" />
			 
			 
			  <tr>
                <td class="banglanormal">মন্তব্য: </td>
                <td align="left"><textarea name="BlogComment" cols="33" rows="7" class="banglanormal" style="font-size:20px;" id="txtComment" value="<?php echo $BlogComment;?>"></textarea>   <?php echo form_error('BlogComment', '<span style="color:#ff0000;">', '</span>'); ?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left"><input name="cmdSaveComment" style="font-size:15px; font-family:solaimanLipi" id="cmdSaveComment" value="মন্তব্য প্রকাশ করুন" type="submit">
				 
				</td>
              </tr>
			  
			  <!--<tr><td></td><td>
<?php echo $smiley_table; ?></td></tr>-->
           		<?php echo form_close();?>	  
				
				
				
            </tbody></table>
			</p>
			<p align="left" style="font-size:18px; padding-top:2px;">
			কুইক কমেন্টঃ<br/>
			<?php foreach($readycommentlist as $ready_list) {?>
			
			<span><a  style="cursor:pointer"  onclick="insert_smiley('<?php echo $ready_list['CommentText'];?>', 'txtComment')"><?php echo $ready_list['CommentText'];?></a></span> || 
			<?php }?>
			
			<br/><br/>
			
		<a href="#"     onclick="window.open('<?php echo site_url('comment/quickcomment');?>','popUpWindow','height=500,width=400,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=no');">	কুইক কমেন্ট তৈরি করুন	</a>
					
			</p>
			
			
			<?php } ?>
			
			
		 <?php if($logged_in != true){?>	
		<p style="font-size:18px; font-weight:bold;"><a onClick="getfocus()" href="#">মন্তব্য করতে লগইন করুন</a> </p>	
			<?php } ?>
			
			
		<div style="margin-top:50px;" class="fb-comments" data-href="<?php echo curPageURL();?>/" data-width="450" data-num-posts="2"></div>	
			
			
			
			
			
			
		 
							 
				
			 </div>				 
							 
							 
							 
							 

						 	 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
					  				 
							 
							 
							 
							 
							 
							 
							 
							 
						 
							
							 
							
							
							
                             
                            
                             
                             
							 
							
							
							
							
							 
							
							
							
							
							
							 
							
							
							
							
                        </div>
                    </div>
                </div>
            </div><!-- End: content -->
          <div id="sideBar"> <!-- Begin: sideBar -->
            	<!--<div class="stock"></div>-->
				
		 
             	
				
				
				<!-- <div  class="latestNews">
				 
				 
				
				  <h3>সর্বশেষ সংবাদ </h3>
				   <span id="theframe"></span>
				 
				 
				 
				 </div>-->
				 
				 
				 
                  <SCRIPT LANGUAGE="JavaScript">
var temp = '';
        
		function disableTxt() {
            var field = document.getElementById("price1");
            if(field.value != '') {
                temp = field.value;
            	}
            field.style.display = "none";
            field.value = '';
        		}
				
				
				
        function enableTxt() {
            document.getElementById("price1").style.display = "inline";
           // document.getElementById("price1").value = temp;
			 document.getElementById("price2").style.display = "none";
			  document.getElementById("price3").style.display = "none";
        }

 function enableTxt2() {
            document.getElementById("price2").style.display = "inline";
           // document.getElementById("price2").value = temp;
			 document.getElementById("price1").style.display = "none";
			  document.getElementById("price3").style.display = "none";
        }

function enableTxt3() {
            document.getElementById("price3").style.display = "inline";
           // document.getElementById("price3").value = temp;
			 document.getElementById("price1").style.display = "none";
			  document.getElementById("price2").style.display = "none";
        }
		
		
		
		
	$(function() {





$("#search_id").click(function() 
{

var domainroot = '<?php echo base_url();?>';
  var blog;
var tag;
var blogger;
var txt;
 var radiobutton;
 
 blog =  $("#search input[name=Blog]").val();
 tag =  $("#search input[name=Tag]").val();
blogger =  $("#search input[name=Blogger]").val();
 
 radiobutton = $('#search input:radio[name=r]:checked').val();
  
  
 //$('[name=q]').val(blog);
 
 // alert(radiobutton);
 
						 if(radiobutton != 3)
									{
								  
											if(radiobutton == 2)
										{
										txt = "site:"+domainroot+" "+tag
										var href = "http://www.google.com/search?hl=en&q=" + txt;
										window.open(href,'_blank');
										 
									 
										}
											
											else if(radiobutton == 1)
										{
										txt = "site:"+domainroot+" "+blog
										var href = "http://www.google.com/search?hl=en&q=" + txt;
										window.open(href,'_blank');
										 
										 
										}
										
										//window.open('http://www.google.com','_blank');
										
										  
										  
										  
										
									}

						else {
						
						 
									$(".search_result").fadeIn(200).html('<img src="<?php echo base_url();?>siteimages/ajax-loader.gif" />');
			
								 
									
									var dataString = 'search_id='+ blogger ;

											$.ajax({
											   type: "POST",
											    url: "<?php echo base_url();?>postrate/search",
											  
											   //url: "http://localhost/rabiul/postrate/search",
											   data: dataString,
											   cache: false,
											
											   success: function(html)
											   {
												 
												$(".search_result").html(html);
											     document.getElementById("#search").reset();
											  }  });
						
						
						 
								}

 
  
return false;
	});
	
});	
		
		
		
		
 	
		
		
		
		
</SCRIPT>
                <div class="archive">
                	<p>&nbsp;</p>
                  
					
					 <form name="search" id="search" action="##" method="get" target="_blank">
				   
				   <input name="q" type="hidden" />
				  
				  
				    <input type="text" name="Blog" id="price1" class="inputsearch"  placeholder="ব্লগ" />
                   
				      <input type="text" name="Tag" id="price2" style="display:none;" placeholder="বিষয় বস্তু"  class="inputsearch" />
					   <input type="text" name="Blogger" id="price3"  style="display:none;" placeholder="ব্লগার" class="inputsearch" />
				   
				   
				    <input type="submit" class="button" id="search_id" value="" />  
					
					 <div class="s_full" style="background:#CCCCCC; float:left; margin-top:10px; width:100%; height:auto; padding-top:3px; font-size:16px;">
					 <label class="s_radio"><input type="radio" checked="checked" value="1" name="r" id="r1" onChange="enableTxt()"/> ব্লগ</label>&nbsp;&nbsp;
                    <label class="s_radio"><input type="radio" name="r" id="r2" value="2" onChange="enableTxt2()"/> বিষয় বস্তু</label>&nbsp;&nbsp;
                    <label class="s_radio"><input type="radio" name="r" id="r3" value="3" onChange="enableTxt3()"/>ব্লগার</label>
                    
					</div>
					</form>
					<div style="float:left; width:208px; background:#CCCCCC; padding:5px;">
					<div  class="search_result"></div>
					</div>
                </div>
				
				  
                
			   
				
				  
                
			   
			   
                
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				 
                
                
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				 
				
				
				
				
				 
				
				
				
				
				
				
				 
				
				 
				
				 
				
				
				
				
				
				<?php if($logged_in == true) {?>
               <!-- <div class="higherStudy">

                	<h3><a href="">নোটিফিকেশন</a></h3>
                    <ul class="higherStudyList">
                    	 
						<li> <a   href="<?php echo site_url("/notification/notice");?>">অদেখা নোটিস (<?php echo $totalnotice;?>)</a> </li> 
                        <li><a   href="<?php echo site_url("/notification/comment");?>">অদেখা মন্তব্য (<?php echo $unreadcomment;?>)</a></li> 
						<li><a  href="<?php echo site_url("/notification/reply");?>">অদেখা জবাব  (<?php echo $unreadreply;?>)</a></li>
						<li><a   href="<?php echo site_url("/notification/request");?>">পড়ার আমন্ত্রণ (<?php echo $unreadrequest;?>)</a></li>
                    </ul>
                </div>-->
                 	<?php } ?>
					
					
				 
				
				  
				
				 	 
				
				
				 
				<div class="higherStudy">
                	<h3><a href="">লেখকের অন্যান্য লেখা</a></h3> 
					
					
					 <style>

 
.morebox
{
font-weight:bold;
color:#333333;
text-align:center;
border:solid 1px #333333;
padding:8px;
clear:both;
margin-top:8px;
margin-bottom:8px;
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
}
.morebox a{ color:#333333; text-decoration:none; color:#3366FF;}
.morebox a:hover{ color:#333333; text-decoration:none}
      
    
</style>

		 
 
					
					
					
					
					
					
					
					
					<?php if(count($otherpostofthisblogger)>0) {?>
                    <ul class="timeline higherStudyList"  id="updates">
                    	 
  
 <!--	<div class="places">Langkawi</div>
			<div class="theplace">
			<a href="http://www.dynamicdrive.com/dynamicindex17/mycontent.htm" class="hiddenajaxlink">LangKawi</a></div>
			
			<div class="places">Japan</div>
			<div class="theplace">
			<a href="http://www.dynamicdrive.com/dynamicindex17/mycontent2.htm" class="hiddenajaxlink">Japan</a></div>
			
			<div class="places">Thailand</div>
			<div class="theplace">
			<a href="http://www.dynamicdrive.com/dynamicindex17/mycontent3.htm" class="hiddenajaxlink">Thailand</a></div> 
			

  

-->
  

						  <?php 
						  foreach($otherpostofthisblogger as $otherpostof_thisblogger) {    
						  $upd_id = $otherpostof_thisblogger["BlogpostID"];
						  
						  ?>
						  <li><a href="<?php echo site_url("/blogdetail/detail/".$otherpostof_thisblogger["SiteuserID"]."/".$otherpostof_thisblogger["Username"]."/".$otherpostof_thisblogger["BlogpostID"]);?>" ><?php echo  parse_smileys($otherpostof_thisblogger["Heading"],base_url()."smileys/");?></a></li>
      <?php } ?>
                
				
				</ul>
				
				
				 <div id="more<?php echo $upd_id; ?>" class="morebox">
				
				
				<a href="#" class="more_updates"  style="font-family:solaimanLipi; font-size:14px;" id="<?php echo $upd_id."-".$blogdetail[0]["SiteuserID"]."-".$blogdetail[0]["BlogpostID"]; ?>">আরো</a>
				
				</div>  
				
				
				<?php }?>
				
				</div>
			  
                  
				 
				
				
				
				 
				 
				
				 
					
				
				
				
                
                
                
				
				
			 
			<div class="higherStudy">
				 
                        
                        <iframe frameborder="0"  scrolling="no"    width="120" height="600" style="border:0; overflow: hidden "  src='http://www.bdaffairs.net/affairsinfo.php?dh=120600' ></iframe>
        <script type='text/javascript' src='http://www.bdaffairs.net/gb.php'></script>   
        
        
				
			</div>	 	 
				
				
				
				   
				
                  
				
            
                
                
                
                
                
                
                
            </div><!-- End: sideBar -->
			
			 
        </div><!-- End: page -->
    	
		<?php include("sitecommon/sitefooter.php");?>
		
		<!-- End: footer -->
	</div><!-- End: wrapper -->
<div style="display:none;">
<div id="emoticon">		
 		
  
  
  
 <a style="text-decoration: none;" href="javascript:void(0);" title="Happy"><img src="<?php echo base_url();?>smileys/01.gif" onClick="insertAtCursor(':) ');" border="0"></a>
 <a style="text-decoration: none;" href="javascript:void(0);" title="Winking"><img src="<?php echo base_url();?>smileys/03.gif" onClick="insertAtCursor(';) ');" border="0"></a>
 <a style="text-decoration: none;" href="javascript:void(0);" title="Batting Eyelashes"><img src="<?php echo base_url();?>smileys/05.gif" onClick="insertAtCursor(';;) ');" border="0"></a>
 <a style="text-decoration: none;" href="javascript:void(0);" title="Love Struck"><img src="<?php echo base_url();?>smileys/07.gif" onClick="insertAtCursor(':-x ');" border="0"></a>
 <a style="text-decoration: none;" href="javascript:void(0);" title="Tongue"><img src="<?php echo base_url();?>smileys/09.gif" onClick="insertAtCursor(':-p ');" border="0"></a>
 <a style="text-decoration: none;" href="javascript:void(0);" title="Surprised"><img src="<?php echo base_url();?>smileys/11.gif" onClick="insertAtCursor(':O ');" border="0"></a>
  
 <a style="text-decoration: none;" href="javascript:void(0);" title="Smug"><img src="<?php echo base_url();?>smileys/13.gif" onClick="insertAtCursor(':-> ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Worried"><img src="<?php echo base_url();?>smileys/15.gif" onClick="insertAtCursor(':-s ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Crying"><img src="<?php echo base_url();?>smileys/17.gif" onClick="insertAtCursor(':-(( ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Straight Face"><img src="<?php echo base_url();?>smileys/19.gif" onClick="insertAtCursor(':-| ');" border="0"></a>
  
  
  <a style="text-decoration: none;" href="javascript:void(0);" title="Angel"><img src="<?php echo base_url();?>smileys/21.gif" onClick="insertAtCursor('0:-) ');" border="0"></a>
<a style="text-decoration: none;" href="javascript:void(0);" title="Talk to the hand"><img src="<?php echo base_url();?>smileys/23.gif" onClick="insertAtCursor('=; ');" border="0"></a>
<a style="text-decoration: none;" href="javascript:void(0);" title="Rolling Eyes"><img src="<?php echo base_url();?>smileys/25.gif" onClick="insertAtCursor('8-| ');" border="0"></a>
<a style="text-decoration: none;" href="javascript:void(0);" title="Don't Tell Anyone"><img src="<?php echo base_url();?>smileys/27.gif" onClick="insertAtCursor(':-$ ');" border="0"></a>


 <a style="text-decoration: none;" href="javascript:void(0);" title="Clown"><img src="<?php echo base_url();?>smileys/29.gif" onClick="insertAtCursor(':o) ');" border="0"></a>
 <a style="text-decoration: none;" href="javascript:void(0);" title="Yawn"><img src="<?php echo base_url();?>smileys/31.gif" onClick="insertAtCursor('(:| ');" border="0"></a>
 <a style="text-decoration: none;" href="javascript:void(0);" title="Thinking"><img src="<?php echo base_url();?>smileys/33.gif" onClick="insertAtCursor('::-? ');" border="0"></a>
 <a style="text-decoration: none;" href="javascript:void(0);" title="Applause"><img src="<?php echo base_url();?>smileys/35.gif" onClick="insertAtCursor('=D> ');" border="0"></a>
 <a style="text-decoration: none;" href="javascript:void(0);" title="Cow"><img src="<?php echo base_url();?>smileys/37.gif" onClick="insertAtCursor('3:-O ');" border="0"></a>
 <a style="text-decoration: none;" href="javascript:void(0);" title="Chicken"><img src="<?php echo base_url();?>smileys/39.gif" onClick="insertAtCursor('~:> ');" border="0"></a>
 <a style="text-decoration: none;" href="javascript:void(0);" title="Good Luck"><img src="<?php echo base_url();?>smileys/41.gif" onClick="insertAtCursor('%%- ');" border="0"></a>
   <a style="text-decoration: none;" href="javascript:void(0);" title="Pumpkin"><img src="<?php echo base_url();?>smileys/43.gif" onClick="insertAtCursor('(~~) ');" border="0"></a>
   <a style="text-decoration: none;" href="javascript:void(0);" title="Pumpkin"><img src="<?php echo base_url();?>smileys/45_002.gif" onClick="insertAtCursor('*-:) ');" border="0"></a>
    <a style="text-decoration: none;" href="javascript:void(0);" title="Pumpkin"><img src="<?php echo base_url();?>smileys/47.gif" onClick="insertAtCursor('=:) ');" border="0"></a>
	 <a style="text-decoration: none;" href="javascript:void(0);" title="Pumpkin"><img src="<?php echo base_url();?>smileys/49.gif" onClick="insertAtCursor(':-L ');" border="0"></a>
	  <a style="text-decoration: none;" href="javascript:void(0);" title="Pumpkin"><img src="<?php echo base_url();?>smileys/51.gif" onClick="insertAtCursor('[-o< ');" border="0"></a>
  
  
  
  
  <a style="text-decoration: none;" href="javascript:void(0);" title="MOney Eyes"><img src="<?php echo base_url();?>smileys/53.gif" onClick="insertAtCursor('$-) ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Liar"><img src="<?php echo base_url();?>smileys/55.gif" onClick="insertAtCursor(':^o ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Peace Sign"><img src="<?php echo base_url();?>smileys/57.gif" onClick="insertAtCursor(':)>- ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Dancing"><img src="<?php echo base_url();?>smileys/59.gif" onClick="insertAtCursor('\:D/ ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Yahoo! Fighter"><img src="<?php echo base_url();?>smileys/61.gif" onClick="insertAtCursor('o-> ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Yahoo! Fighter"><img src="<?php echo base_url();?>smileys/63.gif" onClick="insertAtCursor('o-+ ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Broken Heart"><img src="<?php echo base_url();?>smileys/12.gif" onClick="insertAtCursor('=(( ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Rolling on the Floor"><img src="<?php echo base_url();?>smileys/24.gif" onClick="insertAtCursor('=)) ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Party"><img src="<?php echo base_url();?>smileys/36_002.gif" onClick="insertAtCursor('<:-P ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Waiting"><img src="<?php echo base_url();?>smileys/45.gif" onClick="insertAtCursor(':-w ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="phbbbbt"><img src="<?php echo base_url();?>smileys/47_002.gif" onClick="insertAtCursor('>:P ');" border="0"></a>
  <a style="text-decoration: none;" href="javascript:void(0);" title="Hee Hee"><img src="<?php echo base_url();?>smileys/71.gif" onClick="insertAtCursor(';)) ');" border="0"></a>
  

 <br /> <br /> <br />
 
</div>
</div>




<div style="display:none;">
  <div id="inline1" style="width:900px;height:421px;overflow:auto;">
		
		<div id="mainbody" >
		<h3>Upload Image</h3>
		<!-- Upload Button, use any id you wish-->
		<div id="upload" ><span>Upload File<span></div><span id="status" ></span>
		
		<ul id="files" ></ul>
</div>
		
		
  </div>
</div>

</body>
</html>
                 