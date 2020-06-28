<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Paradise-Hotel Website Template | Activities :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
		<script type="text/javascript" src="js/JFCore.js"></script>
		<script type="text/javascript" src="js/JFForms.js"></script>
		<!-- Set here the key for your domain in order to hide the watermark on the web server -->
		<script type="text/javascript">
			(function() {
				JC.init({
					domainKey: ''
				});
				})();
		</script>
<!--nav-->
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index"><img src="assets/images/logo.png" alt=""></a>
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
				<li><a href="index">hotel</a></li> |
				<li><a href="rooms">rooms & suits</a></li> |
				<li><a href="reservation">reservation</a></li> |
				<li class="active"><a href="activities">activities</a></li> |
				<li><a href="contact">contact</a></li>
				<div class="clear"></div>
			</ul>
			<!-- start profile_details -->
					<form class="style-1 drp_dwn">
						<div class="row">
							<div class="grid_3 columns">
								<select class="custom-select" id="select-1">
									<option selected="selected">EN</option>
									<option>USA</option>
									<option>AUS</option>
									<option>UK</option>
									<option>IND</option>
								</select>
							</div>		
						</div>		
					</form>
		</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li class="active"><a href="index">hotel</a></li> 
				<li><a href="rooms">rooms & suits</a></li> 
				<li><a href="reservation">reservation</a></li> 
				<li><a href="activities">activities</a></li> 
				<li><a href="contact">contact</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
	</div>
</div>
</div>
<!--start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
<!-- start main_content -->
				<ul class="service_list">
					<li>
						<div class="ser_img">
							<a href="details">
								<img src="assets/images/ser_pic1.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>	
						<a href="details"><h3>Sed condimentum</h3></a>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a  href="details">Lorem ipsum</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details">
								<img src="assets/images/ser_pic2.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>	
						<a href="details"><h3>Integer facilisis</h3></a>
						 <p class="para">Our website design and development provides quality web,</p>
						 <h4><a href="details">Nulla accumsan</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details">
								<img src="assets/images/ser_pic3.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>						
						 <a href="details"><h3>Morbi sit amet mauris</h3></a>
						 <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						 <h4><a href="details">Vestilum feliing</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details">
								<img src="assets/images/ser_pic4.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>						
						<a href="details"><h3>Nulla commodo erat</h3></a>
						 <p class="para">Lorem ipsum dolor sit amet, consectetur elit,EIUSMOD tempor,</p>
						 <h4><a href="details">Nulla commodo</a></h4>
					</li>
					<div class="clear"></div>
				</ul>
				<ul class="service_list top">
					<li>
						<div class="ser_img">
							<a href="details">
								<img src="assets/images/ser_pic5.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>						
						 <a href="details"><h3>Nulla commodo erat</h3></a>
						 <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a  href="details">Lorem ipsum</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details">
								<img src="assets/images/ser_pic6.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>						
						 <a href="details"><h3>Morbi sit amet mauris</h3></a>
						 <p class="para">Lorem ipsum dolor sit amet, consectetur elit,EIUSMOD tempor,</p>
						 <h4><a href="details">Nulla accumsan</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details">
								<img src="assets/images/ser_pic7.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>	
						 <a href="details"><h3>Integer facilisis</h3></a>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a href="details">Vestilum feliing</a></h4>
											
					</li>
					<li>
						<div class="ser_img">
							<a href="details">
								<img src="assets/images/ser_pic8.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>		
						 <a href="details"><h3>Sed condimentum</h3></a>
						 <p class="para">Our website design and development provides quality web,</p>
						<h4><a  href="details">Lorem ipsum</a></h4>
					</li>
					<div class="clear"></div>
				</ul>
		<div class="clear"></div>
	<!-- end main_content -->

	</div>
</div>
</div>		
<!--start main -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
			<div class="copy">
				<p class="link"><span>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
			<div class="f_nav">
				<ul>
					<li><a href="index">home</a></li>
					<li><a href="rooms">rooms & suits</a></li>
					<li><a href="reservation">reservation</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</div>
			<div class="soc_icons">
				<ul>
					<li><a class="icon1" href="#"></a></li>
					<li><a class="icon2" href="#"></a></li>
					<li><a class="icon3" href="#"></a></li>
					<li><a class="icon4" href="#"></a></li>
					<li><a class="icon5" href="#"></a></li>
					<div class="clear"></div>
				</ul>	
			</div>
			<div class="clear"></div>
</div>
</div>
</div>		
</body>
</html>