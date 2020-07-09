<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Paradise-Hotel Website Template | Hotel :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<!---strat-date-piker---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
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
			<?php
      // On recupere l'URL de la page pour ensuite affecter class = "active" aux liens de nav
      $page = $_SERVER['REQUEST_URI'];
	  $page = str_replace("/siteyetistudio/", "",$page); ?>
	  
			<ul class="menu">
				<li <?php if($page == "/"){echo 'class="active"';} ?>><a href="/">hotel</a></li> |
				<li <?php if($page == "/rooms"){echo 'class="active"';} ?>><a href="rooms">rooms & suits</a></li> |
				<li <?php if($page == "/reservation"){echo 'class="active"';} ?>><a href="reservation">reservation</a></li> |
				<li <?php if($page == "/activities"){echo 'class="active"';} ?>><a href="activities">activities</a></li> |
				<li <?php if($page == "/contact"){echo 'class="active"';} ?>><a href="contact">contact</a></li>

<!-- Authentication Links -->
	@guest
                <li class="nav-item">
                    <a class="nav-link" href="/acceuilclient">{{ __('Login') }}</a>
                </li>
      
                <li class="nav-item">
                    <a class="nav-link" href="register">{{ __('Register') }}</a>
                </li>
       
	@endguest
    
	@auth
                <li class="nav-item dropdown">
                	<a style="color:white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

        			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('auth.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                    </a>

                    <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
                    </form>
                                
            		<div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">Mon profil</a>
           			</div>
					</div>
            	</li>
    @endauth
	
<!-- fin Authentication Links -->
				<div class="clear"></div>
			</ul>
			<!-- start profile_details -->
					<form class="style-1 drp_dwn">
						<div class="row">
							<div class="grid_3 columns">
								<select class="custom-select" id="select-1">
									<option selected="selected">EN</option>
									<option>AR</option>
									<option>FR</option>
									
									
								</select>
							</div>		
						</div>		
					</form>
		</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li <?php if($page == "/"){echo 'class="active"';} ?>><a href="/">hotel</a></li> |
				<li <?php if($page == "/rooms"){echo 'class="active"';} ?>><a href="rooms">rooms & suits</a></li> |
				<li <?php if($page == "/reservation"){echo 'class="active"';} ?>><a href="reservation">reservation</a></li> |
				<li <?php if($page == "/activities"){echo 'class="active"';} ?>><a href="activities">activities</a></li> |
				<li <?php if($page == "/contact"){echo 'class="active"';} ?>><a href="contact">contact</a></li>
				<li><a href="/acceuilclient">login</a></li>
				
				</ul>
				<a href="#" id="pull">Menu</a>

				
			</nav>
		</div>
	</div>
</div>
</div>
@yield('content')
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