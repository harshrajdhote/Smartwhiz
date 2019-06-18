



<html>
<head>
    
    
    
    
    
    
    
<script type="text/javascript" src="jquery.js"></script> 
<script>
$(document).ready(function(){
$('.ids').on('change',function(){ //on checkboxes check
//sending checkbox value into serialize form
var hi=$('.ids:checked').serialize();
 if(hi){
$.ajax({
type: "POST",
cache: false,
url: "filter.php",
data:{brandss:hi},
success: function(response){
document.getElementById('getdata').style.display = "block";
document.getElementById("getdata").innerHTML = response;
$('#result').hide();
}
});
}
else
{
document.getElementById('getdata').style.display = "none";
$('#result').show();
}
});
});
</script>
<style>
#frm
{
width:auto;
float:left;
}
#result
{
border:2px dotted #ededed;

}
h3
{
border-bottom:2px solid;
}
</style>
    
    
    
    
    
    
    
    
    
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smartwhiz</title>

 <link rel="stylesheet" href="./Smartwhiz_files/animate.min.css"> 
  <!-- <script src="./Smartwhiz_files/html2canvas.min.js.download"></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
	<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>-->
<title>Management – Smartwhiz</title>
<!--<link rel="dns-prefetch" href="http://maxcdn.bootstrapcdn.com/">
<link rel="dns-prefetch" href="http://ajax.googleapis.com/">
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<link rel="dns-prefetch" href="http://s.w.org/">
<link href="https://fonts.gstatic.com/" crossorigin="" rel="preconnect">
<link rel="alternate" type="application/rss+xml" title="Smartwhiz » Feed" href="http://1neclick.co.in/demo/smart-whiz/feed/">
<link rel="alternate" type="application/rss+xml" title="Smartwhiz » Comments Feed" href="http://1neclick.co.in/demo/smart-whiz/comments/feed/">
<link rel="alternate" type="application/rss+xml" title="Smartwhiz » Management College Categories Feed" href="http://1neclick.co.in/demo/smart-whiz/eduword-cats/management/feed/">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/1neclick.co.in\/demo\/smart-whiz\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.9"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="./Smartwhiz_files/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script>-->
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
<!--<script type="text/javascript" src="./Smartwhiz_files/jquery.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/jquery-migrate.min.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/menu_scroll.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/scroll_up.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/slide_zoom.js.download"></script>
<script type="text/javascript" src="./Smartwhiz_files/bootstrap.min.js.download"></script>-->
<link rel="https://api.w.org/" href="http://1neclick.co.in/demo/smart-whiz/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://1neclick.co.in/demo/smart-whiz/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://1neclick.co.in/demo/smart-whiz/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.7.9">
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
<body>
      <section class="logo-img top1">
 <div class="container">
 <header class="top-section">
  <div class="row">

  <div class="col-sm-3 col-md-3 col-xs-12 logo-section">
  <a href="#"><img src="./Smartwhiz_files/Smart-Whiz.png" class="img-responsive l-img"></a>
  </div>
  <div class="col-sm-6 col-md-6 col-xs-12" id="menu1">
  		  		  <section class="search-form-inner-top">

<div id="exTabhome1" class="container">
<form role="search" method="get" class="search-form" action="http://1neclick.co.in/demo/smart-whiz">
	<select id="test-dropdown" class="searchfile" onchange="choice1(this)">
		<option value="College" id="college">College</option>
		<!--<option value="Entrance Exam" id="entrance">Entrance Exam</option>-->
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
	    <div class="menu-menu-1-container"><ul class="nav navbar-nav /ul&gt;"><li id="menu-item-695" class="menu-item menu-item-type-taxonomy menu-item-object-eduword_cat current-menu-item menu-item-695"><a href="management.php">Management</a></li>
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
    
    
    <header class="page-header">
				<h1 class="page-title">Management</h1>
								<div class="slctd-fltrtags" style="padding-top:20px">
<label>Selected Filters :</label>
<span></span>
<a class="clearAll">Clear All</a>
</div>
			</header>
    
    	<div class="col-sm-3 searchfilterpart"> 
				<div id="uwpqsf_id"><form id="uwpqsffrom_795"><div class="uform_title">Filter your search</div><input type="hidden" name="unonce" value="d2a38d415a"><input type="hidden" name="uformid" value="795"><input type="hidden" id="uajaxdiv" value="#alldata">
                    <div class="wrap locationblock" id="location-0"><span class="taxolabel-0">Location</span><span class="clearalltop" id="clear-0" name="clearall">Clear</span><span class="togglearrow"><a href="javascript:void"><i class="fa fa-chevron-up fa-x" aria-hidden="true"></i></a></span><div class="serp-filter-search"><input type="text" id="searchText" placeholder="Search Locations"><span id="filterClear-0" class="filterClear" style="display: none;">×</span></div>
                
                    <div class="cmf-custom-div">
                        <div id="frm" >
                        <form method="POST">
                         <ul class="filter">
                     <?php
                    $connection = mysqli_connect('localhost', 'root','');
                    $db = mysqli_select_db($connection,'smartwhiz_db');

                     $sql = mysqli_query($connection, "SELECT * FROM `college_details` GROUP BY `City`");

                      while($rows = mysqli_fetch_array($sql, MYSQLI_ASSOC))
                      {
                      ?>

                         <input type="checkbox" name="ids[]" value="<?php echo $rows['City'];?>" id="<?php echo $rows['Clg_Id'];?>" class="ids"/>
                        <?php echo $rows['City'];?><br>
                         <?php 
                      }
                         ?>
                            </ul>
                            </form>
                        </div>
                        </div>
                    </div>
                      <div class="uwpqsf_class  togglecheck" id="tax-check-3"><span class="taxolabel-3">
                    Courses</span><span class="clearall" id="clear-3" name="clearall">Clear</span><span class="togglearrow"><a href="javascript:void"><i class="fa fa-chevron-up fa-x" aria-hidden="true"></i></a></span>
                          <input type="hidden" name="taxo[3][name]" value="eduword_courses"><input type="hidden" name="taxo[3][opt]" value="">
                          <div class="cmf-custom-div">
                      <div id="frm" >
                        <form method="POST">
                         <ul class="filter">             
                     <?php
                    //$connection = mysqli_connect('localhost', 'root','');
                    //$db = mysqli_select_db($connection,'smartwhiz_db');

                     $sql = mysqli_query($connection, "SELECT * FROM `college_details` GROUP BY `Program`");

                      while($rows = mysqli_fetch_array($sql, MYSQLI_ASSOC))
                      {
                      ?>

                         <input type="checkbox" name="ids[]" value="<?php echo $rows['Program'];?>" id="<?php echo $rows['Clg_Id'];?>" class="ids"/>
                        <?php echo $rows['Program'];?><br>
                         <?php 
                      }
                         ?>
                            </ul>
                          </form>
                              </div>
                          </div>
                    </div>
                    <div class="uwpqsf_class  togglecheck" id="cmf-check-0"><span class="cmflabel-0">OwnerShip</span><span class="clearall" id="clear-" name="clearall">Clear</span><span class="togglearrow"><a href="javascript:void"><i class="fa fa-chevron-up fa-x" aria-hidden="true"></i></a></span><input type="hidden" name="cmf[0][metakey]" value="hvalues"><input type="hidden" name="cmf[0][compare]" value="7">
                        <div class="cmf-custom-div">
                            
                            <div id="frm" >
                            <form method="POST">
                             <ul class="filter">
                            <?php
                    //$connection = mysqli_connect('localhost', 'root','');
                    //$db = mysqli_select_db($connection,'smartwhiz_db');

                     $sql = mysqli_query($connection, "SELECT * FROM `college_details` GROUP BY `Priv_gov`");

                      while($rows = mysqli_fetch_array($sql, MYSQLI_ASSOC))
                      {
                      ?>

                         <input type="checkbox" name="ids[]" value="<?php echo $rows['Priv_gov'];?>" id="<?php echo $rows['Clg_Id'];?>" class="ids"/>
                        <?php echo $rows['Priv_gov'];?><br>
                         <?php 
                      }
                                 ?></ul></form></div>
                                 </div></div>
                    
                    <div class="uwpqsf_class  togglecheck" id="cmf-check-1"><span class="cmflabel-1">Approvals/ Recognition</span><span class="clearall" id="clear-" name="clearall">Clear</span><span class="togglearrow"><a href="javascript:void"><i class="fa fa-chevron-up fa-x" aria-hidden="true"></i></a></span><input type="hidden" name="cmf[1][metakey]" value="hvalues"><input type="hidden" name="cmf[1][compare]" value="7"><div class="cmf-custom-div">
                        <div id="frm" >
                        <form method="POST">
                         <ul class="filter">
                        <?php
                    //$connection = mysqli_connect('localhost', 'root','');
                    //$db = mysqli_select_db($connection,'smartwhiz_db');

                     $sql = mysqli_query($connection, "SELECT * FROM `college_details` GROUP BY `Approved_by`");

                      while($rows = mysqli_fetch_array($sql, MYSQLI_ASSOC))
                      {
                      ?>

                         <input type="checkbox" name="ids[]" value="<?php echo $rows['Approved_by'];?>" id="<?php echo $rows['Clg_Id'];?>" class="ids"/>
                        <?php echo $rows['Approved_by'];?><br>
                         <?php 
                      }
                             ?></ul></form></div>
                        </div></div>
                    
                    <div class="uwpqsf_class  togglecheck" id="cmf-check-2"><span class="cmflabel-2">Activities</span><span class="clearall" id="clear-" name="clearall">Clear</span><span class="togglearrow"><a href="javascript:void"><i class="fa fa-chevron-up fa-x" aria-hidden="true"></i></a></span><input type="hidden" name="cmf[2][metakey]" value="facilities"><input type="hidden" name="cmf[2][compare]" value="7">
                        <div class="cmf-custom-div">
                    <div id="frm" >
                    <form method="POST">
                     <ul class="filter">
                             <?php
                    $connection = mysqli_connect('localhost', 'root','');
                    $db = mysqli_select_db($connection,'smartwhiz_db');

                     $sql = mysqli_query($connection, "SELECT * FROM `activities` GROUP BY `Activ_Description`");

                      while($rows = mysqli_fetch_array($sql, MYSQLI_ASSOC))
                      {
                      ?>

                         <input type="checkbox" name="ids[]" value="<?php echo $rows['Activ_Description'];?>" id="<?php echo $rows['Activ_Id'];?>" class="ids"/>
                        <?php echo $rows['Activ_Description'];?><br>
                         <?php 
                      }
                         ?></ul></form></div>
                        </div>
                    </div>
                    
                    </form>
            </div></div>
                    
                    
                    
                    
                    <div class="col-sm-9" id="alldata">
       	<div class="col-sm-9">
			  <div id="" class="edubox">
    <div class="row">
<div id="result">

  <?php
$sql = mysqli_query($connection,"SELECT * FROM college_details");
while($rows=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
?>
 <div id="" class="edubox">
    <div class="row">
        
        <header class="entry-header">

		<h3><a href="#" rel="bookmark">
  <?php echo $rows['Name']."";  ?> 
            </a></h3></header>
            
            
	<div class="entry-content">

<div style="width: 100%;" class="pull-left eduwordpart">
	    	<span><i class="fa fa-map-marker"></i>
                <?php echo $rows['Address']."";  ?> </span>
                	<span><i class="fa fa-building-o"></i> <a href="#"><strong>Established in:</strong> 
                        <span> <?php echo $rows['Establishment']."";  ?></span></a></span>
        
        <span><a href="#"><strong>APROVED BY:</strong> 
            <span>  <?php echo $rows['Approved_by']."<br>";  ?></span></a></span>
    <br>
    
       <form method="post" action="more_details.php">
         <input type="submit" class="eduworddetails btn btn-primary" name="submit[<?php echo $rows['Clg_Id']; ?>]" id="m2" value="More Details">
        <!--   <a href="connect.php">More Details</a>-->
          </form>    
    
    <!--
    
<a href="connect.php" class="eduworddetails btn btn-primary" id="<?php //echo $rows['Clg_Id']; ?>" name="<?php //echo $rows['Clg_Id']; ?>">More Details</a>-->
        </div>        
        </div>
                
                
               
      </div></div>
<?php
  }
    ?>
 </div>
 <div id="getdata" style="height:auto;width:auto;"></div>
            
                  </div></div>
            
            

	<nav class="navigation pagination" role="navigation" >
		<h2 class="screen-reader-text">Posts navigation</h2>
		<div class="nav-links"><span class="page-numbers current">1</span>
<a class="page-numbers" href="#">2</a>
<a class="page-numbers" href="#">3</a>
<a class="next page-numbers" href="#">Next page</a></div>
	</nav>	</div>
	<div class="col-sm-3 entranceinfo">
						<div class="entrance_title">Entrance Exams</div>

		<ul>
	<li><h4>CAT</h4><a href="viewmore.html">(View Exam Details)</a><br></li>
<li><h4>CMAT</h4><a href="viewmore.html">(View Exam Details)</a><br></li>
<li><h4>MAT</h4><a href="viewmore.html">(View Exam Details)</a><br></li>
<li><h4>MAH-CET</h4><a href="viewmore.html">(View Exam Details)</a><br></li>
<li><h4>ATMA</h4><a href="viewmore.html">(View Exam Details)</a><br></li>
<li><h4>XAT</h4><a href="viewmore.html">(View Exam Details)</a><br></li>
<li><h4>SNAP</h4><a href="viewmore.html">(View Exam Details)</a><br></li>
<li><h4>IBSAT</h4><a href="viewmore.html">(View Exam Details)</a><br></li>
<li><h4>NMAT by GMAC</h4><a href="viewmore.html">(View Exam Details)</a><br></li>
<li><h4>TISSNET</h4><a href="viewmore.html">(View Exam Details)</a><br></li>
<li><a href="viewmore.html">View More</a></li>
</ul>
</div>
</div>
                    
                
                    
                    
   
<!-- footer section -->
<div class="fluid-container" id="footer1" >
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
<form action="http://1neclick.co.in/demo/smart-whiz/eduword-cats/management/#wpcf7-f609-o1" method="post" class="wpcf7-form" novalidate="novalidate">
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
<form action="http://1neclick.co.in/demo/smart-whiz/eduword-cats/management/#wpcf7-f610-o2" method="post" class="wpcf7-form" novalidate="novalidate">
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
    <li class="ts post1 show"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li class="ts post1 show"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    <li class="ts post1 show"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li class="ts post1 show"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
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
		<span class="copy post1 show">Copyright © 2017 Smartwhiz | All Rights Reserved | <a href="#">Privacy Policy</a></span> 
		</div>
		
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
		<span class="copy post1 show">Designed &amp; Developed By :  <a href="#"><span>Comp Pvt. Ltd.</span></a></span> 
		</div>
		
		</div>
		
		
	</div>
</section>
   </div>                 
                    
                    
                    
                    
                   
                  
           
  
</body>
</html>