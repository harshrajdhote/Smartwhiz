<?php
$code=key($_POST['submit']);
//echo $code;

$connection = mysqli_connect('localhost', 'root','');
$db = mysqli_select_db( $connection, 'smartwhiz_db');

$sql = mysqli_query($connection, "SELECT * FROM college_details WHERE Clg_Id IN ('$code')");

?>






<!DOCTYPE html>
<!-- saved from url=(0071)http://1neclick.co.in/demo/smart-whiz/eduword/doon-business-school-dbs/ -->
<html lang="en-US" class="js"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smartwhiz</title>

 <link rel="stylesheet" href="./Smartwhiz_files/animate.min.css"> 
   <script src="./Smartwhiz_files/html2canvas.min.js.download"></script>
    <script src="./Smartwhiz_files/jspdf.min.js.download"></script>
	<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<title>Doon Business School, (DBS) – Smartwhiz</title>
<link rel="dns-prefetch" href="http://maxcdn.bootstrapcdn.com/">
<link rel="dns-prefetch" href="http://ajax.googleapis.com/">
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<link rel="dns-prefetch" href="http://s.w.org/">
<link href="https://fonts.gstatic.com/" crossorigin="" rel="preconnect">
<link rel="alternate" type="application/rss+xml" title="Smartwhiz » Feed" href="http://1neclick.co.in/demo/smart-whiz/feed/">
<link rel="alternate" type="application/rss+xml" title="Smartwhiz » Comments Feed" href="http://1neclick.co.in/demo/smart-whiz/comments/feed/">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/1neclick.co.in\/demo\/smart-whiz\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.9"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="./Smartwhiz_files/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="contact-form-7-css" href="./Smartwhiz_files/styles.css" type="text/css" media="all">
<link rel="stylesheet" id="jquery-ui-theme-css" href="./Smartwhiz_files/jquery-ui.min.css" type="text/css" media="all">
<link rel="stylesheet" id="jquery-ui-timepicker-css" href="./Smartwhiz_files/jquery-ui-timepicker-addon.min.css" type="text/css" media="all">
<link rel="stylesheet" id="udefault-css" href="./Smartwhiz_files/default.css" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-css" href="./Smartwhiz_files/font-awesome.min.css" type="text/css" media="all">
<link rel="stylesheet" id="animate-css" href="./Smartwhiz_files/animate.css" type="text/css" media="all">
<link rel="stylesheet" id="animate.min-css" href="./Smartwhiz_files/animate.min(1).css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="./Smartwhiz_files/style.css" type="text/css" media="all">
<link rel="stylesheet" id="bootstrap.min-css" href="./Smartwhiz_files/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" id="owl.carousel-css" href="./Smartwhiz_files/owl.carousel.css" type="text/css" media="all">
<link rel="stylesheet" id="owl.theme-css" href="./Smartwhiz_files/owl.theme.css" type="text/css" media="all">
<link rel="stylesheet" id="twentyfifteen-fonts-css" href="./Smartwhiz_files/css" type="text/css" media="all">
<link rel="stylesheet" id="genericons-css" href="./Smartwhiz_files/genericons.css" type="text/css" media="all">
<link rel="stylesheet" id="twentyfifteen-style-css" href="./Smartwhiz_files/style.css" type="text/css" media="all">
<!--[if lt IE 9]>
<link rel='stylesheet' id='twentyfifteen-ie-css'  href='http://1neclick.co.in/demo/smart-whiz/wp-content/themes/twentyfifteen/css/ie.css?ver=20141010' type='text/css' media='all' />
<![endif]-->
<!--[if lt IE 8]>
<link rel='stylesheet' id='twentyfifteen-ie7-css'  href='http://1neclick.co.in/demo/smart-whiz/wp-content/themes/twentyfifteen/css/ie7.css?ver=20141010' type='text/css' media='all' />
<![endif]-->
<script type="text/javascript" src="./Smartwhiz_files/jquery.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/jquery-migrate.min.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/menu_scroll.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/scroll_up.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/slide_zoom.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/bootstrap.min.js.download"></script>
<link rel="https://api.w.org/" href="http://1neclick.co.in/demo/smart-whiz/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://1neclick.co.in/demo/smart-whiz/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://1neclick.co.in/demo/smart-whiz/wp-includes/wlwmanifest.xml"> 
<link rel="prev" title="Taxila Business School" href="http://1neclick.co.in/demo/smart-whiz/eduword/taxila-business-school/">
<meta name="generator" content="WordPress 4.7.9">
<link rel="canonical" href="http://1neclick.co.in/demo/smart-whiz/eduword/doon-business-school-dbs/">
<link rel="shortlink" href="http://1neclick.co.in/demo/smart-whiz/?p=771">
<link rel="alternate" type="application/json+oembed" href="http://1neclick.co.in/demo/smart-whiz/wp-json/oembed/1.0/embed?url=http%3A%2F%2F1neclick.co.in%2Fdemo%2Fsmart-whiz%2Feduword%2Fdoon-business-school-dbs%2F">
<link rel="alternate" type="text/xml+oembed" href="http://1neclick.co.in/demo/smart-whiz/wp-json/oembed/1.0/embed?url=http%3A%2F%2F1neclick.co.in%2Fdemo%2Fsmart-whiz%2Feduword%2Fdoon-business-school-dbs%2F&amp;format=xml">
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
			<style type="text/css" id="twentyfifteen-header-css">
			.site-header {

			/*
			 * No shorthand so the Customizer can override individual properties.
			 * @see https://core.trac.wordpress.org/ticket/31460
			 */
			background-image: url(http://1neclick.co.in/demo/smart-whiz/wp-content/uploads/2018/01/Smart-Whiz.png);
			background-repeat: no-repeat;
			background-position: 50% 50%;
			-webkit-background-size: cover;
			-moz-background-size:    cover;
			-o-background-size:      cover;
			background-size:         cover;
		}

		@media screen and (min-width: 59.6875em) {
			body:before {

				/*
				 * No shorthand so the Customizer can override individual properties.
				 * @see https://core.trac.wordpress.org/ticket/31460
				 */
				background-image: url(http://1neclick.co.in/demo/smart-whiz/wp-content/uploads/2018/01/Smart-Whiz.png);
				background-repeat: no-repeat;
				background-position: 100% 50%;
				-webkit-background-size: cover;
				-moz-background-size:    cover;
				-o-background-size:      cover;
				background-size:         cover;
				border-right: 0;
			}

			.site-header {
				background: transparent;
			}
		}
		</style>
	    </head>
    <body class="eduword-template-default single single-eduword postid-771 single-format-standard">
	<!--<div class="loader"></div>-->
	
	
		<!-- Top Section -->
	<!--<section class="top-one">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-6 col-md-6 col-xs-12 text-left i-r">
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</div>
				
				<div class="col-sm-6 col-md-6 col-xs-12 text-right p-e">					
					<li><div class="fa-icons"><i class="fa fa-phone" aria-hidden="true"></i></div><p>+91-94141-26915</p></li>
					<li><div class="fa-icons"><i class="fa fa-envelope" aria-hidden="true"></i></div><p>nayasavera019@gmail.com</p></li>
				</div>
				
				
				
			</div>
		</div>
	</section>-->
	<!-- End of topsection -->

<!-- header section -->
 <section class="logo-img top1">
 <div class="container">
 <header class="top-section">
  <div class="row">

  <div class="col-sm-3 col-md-3 col-xs-12 logo-section">
  <a href="http://1neclick.co.in/demo/smart-whiz"><img src="./Smartwhiz_files/Smart-Whiz.png" class="img-responsive l-img"></a>
  </div>
  <div class="col-sm-6 col-md-6 col-xs-12" id="menu1">
  		  		  <section class="search-form-inner-top">

<div id="exTabhome1" class="container">
<form role="search" method="get" class="search-form" action="http://1neclick.co.in/demo/smart-whiz">
	<select id="test-dropdown" class="searchfile" onchange="choice1(this)">
		<option value="College" id="college">College</option>
		<option value="Entrance Exam" id="entrance">Entrance Exam</option>
	</select>
	<label>
		<span class="screen-reader-text"></span>
		<input type="search" class="search-field collegefield" placeholder="FIND COLLEGES, UNIVERSITY &amp; COURSES" value="" name="s">
	</label>
	<label>
		<span class="screen-reader-text"></span>
		<input type="search" class="search-field examfield" placeholder="FIND Exam by name or course" value="" name="s" style="display: none;">
	</label>
	<input type="submit" class="search-submit" value="Search">
	<input type="hidden" name="post_type" value="eduword">

</form>
</div>

</section>

  <!-- nav section -->
   <nav class="navbar navbar-inverse">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	    <div class="menu-menu-1-container"><ul class="nav navbar-nav /ul&gt;"><li id="menu-item-695" class="menu-item menu-item-type-taxonomy menu-item-object-eduword_cat current-eduword-ancestor current-menu-parent current-eduword-parent menu-item-695"><a href="management.php">Management</a></li>
<li id="menu-item-754" class="menu-item menu-item-type-taxonomy menu-item-object-eduword_cat menu-item-754"><a href="#">Medical</a></li>
<li id="menu-item-755" class="menu-item menu-item-type-taxonomy menu-item-object-eduword_cat menu-item-755"><a href="#">Engineering</a></li>
<li id="menu-item-756" class="menu-item menu-item-type-taxonomy menu-item-object-eduword_cat menu-item-756"><a href="#">Law</a></li>
<li id="menu-item-579" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-579"><a href="#">Study Abroad</a></li>
<li id="menu-item-777" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-777"><a href="#">Counselling</a>
<ul class="sub-menu">
	<li id="menu-item-779" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-779"><a href="harshraj2/myenquiry.php">Enquiry Form</a></li>
	<li id="menu-item-780" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-780"><a href="harshraj2/myswap.php">Swap Form</a></li>
	<li id="menu-item-778" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-778"><a href="harshraj2/counselling.php">Get Expert Counselling</a></li>
</ul>
</li>
</ul></div>    </div>

</nav>
  <!-- end of nav section -->
  </div>

  <div class="col-sm-3 col-md-3 col-xs-12 top-contact">
  	<p>|Student Helpline Number|</p>
  	<p class="sn"> | 78880-66601 | 78880-66602 |</p>
  	<p>|info@smartwhiz.in|</p>
  </div>

  </div></header>

</div>
</section>


  <section class="banner" id="banner">
  <!-- Home Page banner section -->
    <!-- end of Home Page banner section -->

  	<!-- Inner Page Banner -->
		<!-- End of Inner Page Banner -->
</section>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<article id="post-771" class="post-771 eduword type-eduword status-publish format-standard hentry tag-15 eduword_cat-management eduword_state-karnataka eduword_location-banglore eduword_courses-mbapgdm eduword_courses-mbapgdm-part-time">
<div class="container">
    
<?php    while($rows=mysqli_fetch_array($sql)){
?>
  

   
   
<div class="col-sm-12 single-edu-header">
						<h1 class="entry-title"><?php echo $rows['Name']."<br>";  ?></h1>		<div class="col-sm-offset-10 col-sm-2 brochureinfo" style="display: block;">
			<a class="btn-primary pdf"><p class="download">Download Brochure</p>
				<span class="srpHoverCntnt"><p>Download details of eligibility, admissions, fees, infra etc.</p></span>
			</a>
		</div>
	</div> 
    

	<div id="completedetails">	
	<div class="entry-content eduwordtable">
		<table class="table" id="table1">
			<tbody>
				<tr>
				<td><strong>College</strong></td>
				<td colspan="2"><?php echo $rows['Name']."<br>";  ?></td>
			</tr>
				<tr>
				<td><strong>Heading</strong></td>
				<td>
					<table class="htable">
			  					
  				<tbody><tr id="hval_1">
  					<td>TRUST</td>
  					<td><?php echo $rows['Trust']."<br>";  ?></td>
  				</tr>
								
  				<tr id="hval_2">
  					<td>ESTABLISHED</td>
  					<td><?php echo $rows['Establishment']."<br>";  ?></td>
  				</tr>
								
  				<tr id="hval_3">
  					<td>ADDRESS</td>
  					<td><?php echo $rows['Address']."<br>";  ?></td>
  				</tr>
								
  				<tr id="hval_4">
  					<td>PRIVATE/GOV</td>
  					<td><?php echo $rows['Priv_gov']."<br>";  ?></td>
  				</tr>
								
  				<tr id="hval_5">
  					<td>AFILIATED</td>
  					<td><?php echo $rows['Afiliated']."<br>";  ?></td>
  				</tr>
								
  				<tr id="hval_6">
  					<td>APROVED BY</td>
  					<td><?php echo $rows['Approved_by']."<br>";  ?></td>
  				</tr>
								
  				<tr id="hval_7">
  					<td>CAMPUS</td>
  					<td><?php echo $rows['Campus']."<br>";  ?></td>
  				</tr>
								</tbody></table>	
			</td>
		</tr>
		<tr>
			<td><strong>Specialization</strong></td>
			<td>
				<?php echo $rows['Specialization']."<br>";  ?>
		</td>
		</tr>
<tr>
	<td><strong>Activities</strong></td>
	<td>          					
		<table class="table">
			<tbody>
			  			  				<tr>
  					<td>EVENTS</td>
  					<td><?php echo $rows['Events']."<br>";  ?></td>
  				</tr>
  				<tr>
  					<td>INDUSTRIAL VISIT</td>
  					<td><?php echo $rows['Industrial_visit']."<br>";  ?></td>
  				</tr>
  				<tr>
  					<td>GUEST LECTURE</td>
  					<td><?php echo $rows['Guest_lect']."<br>";  ?></td>
  				</tr>
  				<tr>
  					<td>SEMINARS</td>
  					<td><?php echo $rows['Seminars']."<br>";  ?></td>
  				</tr>
	
			  			</tbody>
			  		</table>
			  	</td>
</tr>
<tr>
	<td><strong>Facilities</strong></td>
	<td>
		<table class="table2">
			  			<tbody>
			  			  				<tr>
  					<td>HOSTEL &amp; MESS</td>
  					<td><?php echo $rows['Hostel_mess']."<br>";  ?></td>
  				</tr>
  				<tr>
  					<td>CAFETERIA</td>
  					<td><?php echo $rows['Cafeteria']."<br>";  ?></td>
  				</tr>
  				<tr>
  					<td>CONFERENCE ROOM</td>
  					<td><?php echo $rows['Conference_room']."<br>";  ?></td>
  				</tr>
  				<tr>
  					<td>LAB</td>
  					<td><?php echo $rows['Lab']."<br>";  ?></td>
  				</tr>
  				<tr>
  					<td>WIFI AT CAMPUS</td>
  					<td><?php echo $rows['wifi']."<br>";  ?></td>
  				</tr>
  				<tr>
  					<td>LIBRARY</td>
  					<td><?php echo $rows['Library']."<br>";  ?></td>
  				</tr>
  				<tr>
  					<td>GYM</td>
  					<td><?php echo $rows['Gym']."<br>";  ?></td>
  				</tr>
	
			  			</tbody>
			  		</table>
			  	</td>
</tr>
<tr>
	<td><strong>Scholarship</strong></td>
	<td>
		           ---<br>          	
	</td>
</tr>
<tr>
	<td><strong>Education Loan</strong></td>
	<td>
		        		        		---<br>        			</td>
</tr>
<tr>
	<td><strong>Faculty</strong></td>
	<td>				 ---<br>				 </td>
</tr>
<tr>
	<td><strong>Ranking</strong></td>
	<td>         		    	
	
	
	
	<style type="text/css">p { margin-bottom: 0.25cm; direction: ltr; line-height: 120%; text-align: left; widows: 2; orphans: 2; }a:link { color: rgb(0, 0, 255); }</style>


<p style="margin-bottom: 0.35cm; line-height: 115%">Ranked 'Best
Management College in India for Industrial Interface' &amp; 'Best
Business School in India for Top Faculty' by Career Links 2016</p>

         		    	</td>
</tr>
<tr>
	<td><strong>Eligibilty</strong></td>
	<td>  				 
	
	
	
	<style type="text/css">p { margin-bottom: 0.25cm; direction: ltr; line-height: 120%; text-align: left; widows: 2; orphans: 2; }a:link { color: rgb(0, 0, 255); }</style>


<p style="margin-bottom: 0.35cm; line-height: 115%"><b><font color="#333333"><span style="background: #ffffff">Qualification
:</span></font></b></p>
<p style="margin-bottom: 0.35cm; line-height: 115%"><font color="#333333"><span style="background: #ffffff">CAT,
XAT, CMAT, ATM</span></font></p>
<p style="margin-bottom: 0.35cm; line-height: 115%"><font color="#333333"><span style="background: #ffffff">A
graduate of any recognized university in any discipline with 50% or
more marks (45% for SC/ST candidates)</span></font></p>
<p style="margin-bottom: 0.35cm; line-height: 115%">Students with
work experience will be given preference. Final year students
awaiting results may also apply</p>

				 </td>
</tr>
<tr>
	<td><strong>Admission Process</strong></td>
	<td> 				 
	
	
	
	<style type="text/css">h3 { margin-top: 0.35cm; margin-bottom: 0cm; direction: ltr; color: rgb(79, 129, 189); text-align: left; page-break-inside: avoid; widows: 2; orphans: 2; }h3.western { font-family: "Cambria",serif; font-size: 11pt; }h3.cjk { font-family: "Droid Sans Fallback"; font-size: 11pt; }h3.ctl { font-size: 11pt; }p { margin-bottom: 0.25cm; direction: ltr; line-height: 120%; text-align: left; widows: 2; orphans: 2; }a:link { color: rgb(0, 0, 255); }</style>


<ul><li><h3 class="western" style="margin-top: 0cm; margin-bottom: 0.26cm; background: #ffffff; line-height: 100%; page-break-inside: auto; page-break-after: auto">
	<font color="#00000a"><font face="Calibri, serif">Register and Apply</font></font></h3>
</li></ul>
<p style="margin-top: 0.49cm; margin-bottom: 0.49cm; background: #ffffff; line-height: 115%" lang="en-IN">
<font face="Times New Roman, serif"><font style="font-size: 12pt" size="3"><font face="Calibri, serif"><font style="font-size: 11pt" size="2">Interested
candidates can apply online/offline with required information.</font></font></font></font></p>
<ul><li><h3 class="western" style="margin-top: 0cm; margin-bottom: 0.26cm; background: #ffffff; line-height: 100%; page-break-inside: auto; page-break-after: auto">
	<font color="#00000a"><font face="Calibri, serif">Group Discussion</font></font></h3>
</li></ul>
<p style="margin-top: 0.49cm; margin-bottom: 0.49cm; background: #ffffff; line-height: 115%" lang="en-IN">
<font face="Times New Roman, serif"><font style="font-size: 12pt" size="3"><font face="Calibri, serif"><font style="font-size: 11pt" size="2">Shortlisted
candidate will be called for group discussion/ case analysis based on
the score in CAT/MAT/CMAT/XAT/GMAT/Graduation.</font></font></font></font></p>
<ul><li><h3 class="western" style="margin-top: 0cm; margin-bottom: 0.26cm; background: #ffffff; line-height: 100%; page-break-inside: auto; page-break-after: auto">
	<font color="#00000a"><font face="Calibri, serif">Personal Interview</font></font></h3>
</li></ul>
<p style="margin-top: 0.49cm; margin-bottom: 0.49cm; background: #ffffff; line-height: 115%" lang="en-IN">
<font face="Times New Roman, serif"><font style="font-size: 12pt" size="3"><font face="Calibri, serif"><font style="font-size: 11pt" size="2">Shortlisted
candidate will be called for personal interview based on score
obtained in group discussion/ case analysis.</font></font></font></font></p>
<ul><li><h3 class="western" style="margin-top: 0cm; margin-bottom: 0.26cm; background: #ffffff; line-height: 100%; page-break-inside: auto; page-break-after: auto">
	<font color="#00000a"><font face="Calibri, serif">Final Selection</font></font></h3>
</li></ul>
<p style="margin-top: 0.49cm; margin-bottom: 0.49cm; background: #ffffff; line-height: 115%" lang="en-IN">
<font face="Times New Roman, serif"><font style="font-size: 12pt" size="3"><font face="Calibri, serif"><font style="font-size: 11pt" size="2">Candidates
are selected based on graduation percentage, score in
CAT/MAT/CMAT/XAT/GMAT, performance in group discussion and personal
interview.<br><br>Selection parameters and weightages:<br>Graduation
percentage: 25%<br>CAT/MAT/CMAT/XAT/GMAT scores: 25%<br>GD/Case
analysis: 25%<br>Personal interview: 25%<br><br>Admission offers are
given to the candidates who score aggregate to 60% in total in the
above criteria</font></font></font></font></p>

				 </td>
</tr>
<tr>
	<td><strong>Rule For Cancelation</strong></td>
	<td> 				 ---<br>				 </td>
</tr>
<tr>
	<td><strong>Contact Details</strong></td>
	<td><table class="table3">
			  			<tbody>
			  			  				<tr>
  					<td>ADDRESS</td>
  					<td><?php echo $rows['Address']."<br>";  ?></td>
  				</tr>
  				<tr>
  					<td>WEBSITE</td>
  					<td><?php echo $rows['Website']."<br>";  ?></td>
  				</tr>
	<?php
  }

?>
			  			</tbody>
			  		</table></td>
</tr>

			</tbody>
		</table>

	</div><!-- .entry-content -->
</div>
</div>
</article><!-- #post-## -->


		</main><!-- .site-main -->
	</div><!-- .content-area -->


<!-- footer section -->
<div class="fluid-container" id="footer1">
<div class="container" id="footer-1">

<div class="col-sm-3 col-md-3 col-xs-12">
<h3>Quick Links</h3>
<div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu"><li id="menu-item-78" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-78"><a href="front.html">Home</a></li>
<li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79"><a href="harshraj3/aboutus.php">About Us</a></li>
<li id="menu-item-628" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-628"><a href="adv.php">Advertise With us</a></li>
<li id="menu-item-627" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-627"><a href="add_clg.php">Add Colleges</a></li>
<li id="menu-item-626" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-626"><a href="harshraj2/feedbackservice.php">Feedback(Service)</a></li>
<li id="menu-item-625" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-625"><a href="harshraj2/feedbackweb.php">Feedback(Website)</a></li>
     <li id="menu-item-625" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-625"><a href="Admin/Admin.php">Admin Panel</a></li>
</ul></div></div>

<div class="col-sm-3 col-md-3 col-xs-12 f-address">
<h3>Contact</h3>
<div class="adrs">
<div class="row">
<div class="col-sm-1 col-md-1 col-xs-12">
<b><i class="fa fa-map-marker" aria-hidden="true"></i></b>
</div>
<div class="col-sm-10 col-md-10 col-xs-12">
<p class="addresspart">Adnan Complex, Behind Naidu Hospital, Mohan Nagar, Nagpur</p>
</div>

</div>
<!-- <div class="row">
<div class="col-sm-1 col-md-1 col-xs-12">
<b><i class="fa fa-phone" aria-hidden="true"></i></b>
</div>
<div class="col-sm-10 col-md-10 col-xs-12">
  <h4>Get Expert Counseling</h4>
<p style="font-size:22px;"> +91-96658-47499</p>
</div>
</div> -->
<div class="row">
<div class="col-sm-1 col-md-1 col-xs-12">
<b><i class="fa fa-envelope" aria-hidden="true"></i></b>
</div>
<div class="col-sm-10 col-md-10 col-xs-12">
<p>info@smartwhiz.in</p>
</div>
</div>

</div>
</div>
<div class="pop-up"><iframe src="./Smartwhiz_files/embed.html" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe></div>

<div class="col-sm-6 col-md-6 col-xs-12 cform-f">
<h3>Call Back Request</h3>
<div role="form" class="wpcf7" id="wpcf7-f609-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="609">
<input type="hidden" name="_wpcf7_version" value="4.9.1">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f609-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
</div>
<section class="call-back">
<div class="row">
<div class="col-sm- 8 col-md-8 col-xs-12 form-group">
<span class="wpcf7-form-control-wrap c-no"><input type="text" name="c-no" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Enter Your Contact Number"></span>
</div>
<div class="col-sm- 4 col-md-4 col-xs-12 form-group">
<input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span>
</div>
</div>
</section>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
<br>
<h3>News Letter</h3>
<div role="form" class="wpcf7" id="wpcf7-f610-o2" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="http://1neclick.co.in/demo/smart-whiz/eduword/doon-business-school-dbs/#wpcf7-f610-o2" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="610">
<input type="hidden" name="_wpcf7_version" value="4.9.1">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f610-o2">
<input type="hidden" name="_wpcf7_container_post" value="0">
</div>
<section class="news">
<div class="row">
<div class="col-sm- 8 col-md-8 col-xs-12 form-group">
<span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Enter Your Email"></span>
</div>
<div class="col-sm- 4 col-md-4 col-xs-12 form-group">
<input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span>
</div>
</div>
</section>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left i-r">
    <li class="ts post1 show"><a href="http://1neclick.co.in/demo/smart-whiz/eduword/doon-business-school-dbs/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li class="ts post1 show"><a href="http://1neclick.co.in/demo/smart-whiz/eduword/doon-business-school-dbs/#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    <li class="ts post1 show"><a href="http://1neclick.co.in/demo/smart-whiz/eduword/doon-business-school-dbs/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li class="ts post1 show"><a href="http://1neclick.co.in/demo/smart-whiz/eduword/doon-business-school-dbs/#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
    </div>

</div>



</div>
</div>
<!-- footer section -->


   <div class="fluid-container">
   <section class="copyright">
	<div class="container">
		<div class="row">

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left">
		<span class="copy post1 show">Copyright © 2017 Smartwhiz | All Rights Reserved | <a href="http://1neclick.co.in/demo/smart-whiz/privacy-policy/">Privacy Policy</a></span> 
		</div>
		
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
		<span class="copy post1 show">Designed &amp; Developed By :  <a href="http://1neclick.com/"><span>comp Pvt. Ltd.</span></a></span> 
		</div>
		
		</div>
		
		
	</div>
</section>
   </div>
   
    <script src="./Smartwhiz_files/jquery.min.js.download"></script>
  <script src="./Smartwhiz_files/owl.carousel.js.download"></script>
    <script src="./Smartwhiz_files/viewportchecker.js.download"></script>
   <!-- end of footer section -->
   <a href="http://1neclick.co.in/demo/smart-whiz/eduword/doon-business-school-dbs/#" class="scrollup">Scroll</a>
   
   <script type="text/javascript">
	           
	</script>
	
	<script>
     jQuery(".examfield").hide();
      function choice1(select){
      var x= select.options[select.selectedIndex].text;
      
       if(x=='Entrance Exam'){
        // $("#serMemtb").attr("placeholder", "FIND Exam by name or course").placeholder();
           // $('input[name="post_type"]').val('exampattern');
         jQuery(".examfield").show();
          jQuery(".collegefield").hide();
      }
      else{
        jQuery(".collegefield").show();
         jQuery(".examfield").hide();
      }
      }
    jQuery(document).ready(function() {
 
       jQuery("#owl-demo-colleges").owlCarousel({
     
          autoPlay: 5000, //Set AutoPlay to 3 seconds
          items :4,
          itemsDesktop : [1199,4],
           itemsDesktopSmall : [979,4],
           itemsTablet : [768,2],
          itemsMobile : [479,1],
      pagination:false,
       navigation: true,
    navigationText: [
"<i class='fa fa-chevron-left' aria-hidden='true'></i>",
      "<i class='fa fa-chevron-right' aria-hidden='true'></i>"
      ], 
      });
       
	    jQuery("#owl-demo5").owlCarousel({
     
          autoPlay: 5000, //Set AutoPlay to 3 seconds
          items :1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1],
		  pagination:false,
	     navigation: true,
    navigationText: [
"<i class='fa fa-angle-left' aria-hidden='true'></i>",
      "<i class='fa fa-angle-right' aria-hidden='true'></i>"
      ],
 
      });

	    jQuery("#owl-demo1").owlCarousel({
     
          autoPlay: 5000, //Set AutoPlay to 3 seconds
          items :1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1],
		  pagination:false,
	     navigation: true,
    navigationText: [
"<i class='icon-chevron-left icon-white'></i>",
      "<i class='icon-chevron-right icon-white'></i>"
      ],
 
      });

      jQuery("#owl-demo-course").owlCarousel({
     
          autoPlay: 5000, //Set AutoPlay to 3 seconds
          items :4,
          itemsDesktop : [1199,4],
          itemsDesktopSmall : [979,4],
      pagination:false,
       navigation: true,
    navigationText: [
"<i class='icon-chevron-left icon-white'></i>",
      "<i class='icon-chevron-right icon-white'></i>"
      ],
 
      });
    });


    </script>

 <script>
  jQuery(document).ready(function(){
  $('.pdf').click(function () {
   generatePDF();
    $('.brochureinfo').css('display','block'); });
    function generatePDF(sysfields) {
            $('.brochureinfo').css('display','none');
            var pdf;
            pdf = new jsPDF('p', 'mm', 'a4');
            pdf.addHTML(($("article")[0]),0,0, { pagesplit: true }, function () {
                console.log("THING");
                pdf.save();
            });

        }
         $('.brochureinfo').css('display','block');
jQuery('#hval_7 td:last-child ').each(function () {
var test = jQuery(this).text();
var result = test.replace(/\,/g,',<br/>');   

jQuery('#hval_7 td:last-child').html(result);
});


   jQuery(document).on("click",".login-button",function(){
     var form = $(this).closest("form");
     //console.log(form);
     form.submit();
   });

      jQuery("#owl-demo-service").owlCarousel({
     
          autoPlay: 5000, //Set AutoPlay to 3 seconds
          items :4,
          itemsDesktop : [1199,4],
          itemsDesktopSmall : [979,4],
      pagination:false,
       navigation: true,
    navigationText: [
"<i class='icon-chevron-left icon-white'></i>",
      "<i class='icon-chevron-right icon-white'></i>"
      ],
 
      });

        
    });

jQuery(function() {
   
  jQuery('.addresspart').hover(function() {
    jQuery('.addresspart').css('cursor','pointer');
    jQuery('div.pop-up').show();
  }, function() {
    jQuery('div.pop-up').hide();
  });
  /*$('.addresspart').mousemove(function(e) {
$('div#pop-up').hide();
  });*/
});

    </script>

    <script type="text/javascript">
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/1neclick.co.in\/demo\/smart-whiz\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type="text/javascript" src="./Smartwhiz_files/scripts.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/core.min.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/datepicker.min.js.download"></script>
<script type="text/javascript">
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type="text/javascript" src="./Smartwhiz_files/jquery-ui-timepicker-addon.min.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/widget.min.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/mouse.min.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/slider.min.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/button.min.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/jquery-ui-sliderAccess.js.download"></script>
<script type="text/javascript">
/* <![CDATA[ */
var ajax = {"url":"http:\/\/1neclick.co.in\/demo\/smart-whiz\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="./Smartwhiz_files/uwpqsfscript.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/skip-link-focus-fix.js.download"></script>
<script type="text/javascript">
/* <![CDATA[ */
var screenReaderText = {"expand":"<span class=\"screen-reader-text\">expand child menu<\/span>","collapse":"<span class=\"screen-reader-text\">collapse child menu<\/span>"};
/* ]]> */
</script>
<script type="text/javascript" src="./Smartwhiz_files/functions.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/wp-embed.min.js.download"></script>

  

</body></html>