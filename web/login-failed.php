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
	
		
	</div>
</div>

<!--BEGIN Content-->
<div id="wrapper">
	<div id="page-wrapper">		</div>
		<div id="page">
			<div id="wide-content">
   
 <div id="logo">
        <img id="img.alignleft" src="images/caprocklogo.png" />
        <div class="spacer"></div>            
        <div id="inquery">
        Toll Free Phone:<br>
         (877) 559-1767 <br><br>
        email:<br>
        Inquiries@caprem.com
    
        </div>
        
    </div>

<div id="Message"><br /><br />
<h4  class="err">Access Denied!<br /><br />
  Login in failed.  Check your username and password and try again.</h4>
  <div id="button_div">
        <a href="http://caprockremarketing.com/" class="button-style" title="Home">Homepage</a>
        <a href="login-form.php" class="button-style" title="Log In">Log In</a>
  </div>
</div>
  
  

</div></div></div>
<div id="footer-bg">
	<div id="footer-content" class="container">
		<div id="column1">
			
		</div>
	
	</div>
</div>
<div id="footer" class="container">
	<p align="center">Copyright (c) 2012 CapRock Auto Remarketing. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
<script>

    $(document).ready(function(){
        
        jQuery.fn.center = function () {
        this.css("position","relative");
        this.css("top", ( $("window").height() - this.height() ) / 2 + "px");
        this.css("left", ( $("window").width() - this.width() ) / 4 + "px");
        return this;
        }
    $("#Message").center();
    $("#button_div").center();
    
    $("#footer").css("left","35%").css("position","absolute");
    
    
    $("#home").click(function(e){
        
        window.location = "main-container.php";
        e.preventDefault();
    });
</script>
</body>
</html>
