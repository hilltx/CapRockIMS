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
	<?php include('header.php') ?>
</div>

<!--BEGIN Content-->
<div id="wrapper">
<!--	<div id="page-wrapper">		</div>-->
<div id="page">
<?php include ('logo.php');
?>

    <center>
    	<table><tr><td>
        <form id="loginForm" name="loginForm" method="post" action="scripts/login-exec.php">
          
          <tr>
          <td>User Name<br />
          <input name="login" type="text"   /><br />
          </td></tr>
          <tr><td>
          Password<br />
          <input name="password" type="password" /><br />
          <input id="login_btn" class="button-style"  type="button" value="Login"/>
          </td></tr>
           
         </form>
         </td>
         </tr>
         </table>
     </center>
 
     </div>
</div>
            
<!--END Content-->

<div id="footer-bg">
	<div id="footer-content" class="container">	
	</div>
</div>
<center>
<div id="footer" class="container">
	<p>Copyright (c) 2012 CapRock Auto Remarketing. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
</center>
<script>
    $(document).keypress(function(e) {
    if(e.which == 13) {
        // enter pressed
        document.forms['loginForm'].submit();
    }
    });


   // $('#wrapper').css("width","100%");
   // $('#page').css("width","100%");
    $("#logo_a").css("width","200px").css("height","200px");
    $("#login_btn").click(function(e){
        
        document.forms['loginForm'].submit();
        
    })
    $("#home").click(function(e){
        
        window.location = "main-container.php";
        e.preventDefault();
    });
</script>
</body>
</html>