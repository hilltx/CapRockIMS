<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Stabilize 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20121118

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>CapRock Client Portal</title>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="caprock.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>

<div id="header-wrapper">
	<div id="header">
	
	<!--	<div id="menu">
			<ul>
				<li class="current_page_item"><a href="http://caprockremarketing.com/" accesskey="1" title="Home">Homepage</a></li>
				<li><a href="login-form.php" accesskey="2" title="Log In">Log In</a></li>
				
			</ul>
		</div>
        -->
	</div>
</div>

<!--BEGIN Content-->
<div id="wrapper">
	<div id="page-wrapper">		</div>
		<div id="page">
		
 
  <?php include('logo.php') ?>
   <center><table>
     <a id="button_home" href="http://caprockremarketing.com/" class="button-style" title="Home">Homepage</a><br />
     <a id="button_login" href="login-form.php" class="button-style" title="Log In">Log In</a>
	 </table></center>	
    
     </div>
    	
            
		</div>



<!--END Content-->

<div id="footer-bg">
	<div id="footer-content" class="container">
		<div id="column1">
			
		</div>
	
	</div>
</div>
<div id="footer" class="container">
	<center><p>Copyright (c) 2012 CapRock Auto Remarketing. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p></center>
</div>
<script>
    
   $("#wrapper").css("width","100%");
      $("#page").css("display","relative").css("border","solid").css("margin-bottom","100px").css("width","100%");
      $("#footer").css("width","100%");
    $("#logo").css("width","200px").css("height","200px");
    $("#button_home").css("position","relative").css("width","120px").css("left","0px"); 
    $("#button_login").css("position","relative").css("width","120px").css("left","0px");
    
    $("#home").click(function(e){
        
        window.location = "main-container.php";
        e.preventDefault();
    });
</script>
</body>
</html>
