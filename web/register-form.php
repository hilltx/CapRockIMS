<?php 
    session_start();
	require_once('scripts/auth.php'); ?>
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
<?php

	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
    
?>
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
		<div id="menu">
			<ul>
				<li class="current_page_item"><a id="home" href="http://caprockremarketing.com/" accesskey="1" title="Home">CapRock Home</a></li>
			</ul>
		</div>
	</div>
</div>

<!--BEGIN Content-->
<div id="wrapper">
<!--	<div id="page-wrapper">		</div>-->
<div id="page">
<?php include ('logo.php');?>


<center>
<table><tr>.<td>
<form id="loginForm" name="loginForm" method="post" action="">
  <tr>
  <td><b>Client Company</b></td>
  <td> 
  <?php
     include 'scripts/utils.php';
     CreateClientCompaniesSelect();
  ?>
  </td>
  </tr> 
 <tr>
  <td><b>First Name</b></td>
  <td><input name="fname" type="text" class="text100Percent"  /></td>
 </tr>  
 <tr> 
  <td><b>Last Name</b></td>
  <td><input name="lname" type="text" class="text100Percent"  /></td>
 </tr>	
 <tr>
  <td><b>User Name (Valid email address)</b></td>
  <td><input name="login" type="text" class="text100Percent"  /></td>
  </tr>
<tr>	
  <td><b>Password</b></td>
  <td><input name="password" type="password" class="text100Percent" /></td>
</tr> 
<tr>  
  <td><b>Confirm Password</b></td>
  <td><input name="cpassword" type="password" class="text100Percent"  /></td>
 </tr> 
 <tr>
 <td>
  Active User?</td>
 <td><input name="activeuser" type="checkbox" checked="checked" /></td>
  </tr>
  <tr>
  <td><a id="registerbtn" class="button-style" href="">Register User</a>  </td>
  <td><a id="backbtn" class="button-style" href="client-landing-form.php">Back</a>  </td>
  </tr>
 </form>
 </td></tr>
 </table>
 </center>
</div>
</div>

<center>
<div id="footer-bg">
<?php
    
	if( isset($_GET['msg'])  ) {
	   if($_GET['msg']=="UserAdded")
       {$msg = "User Record Added.";}
		echo '<ul class="msg">';
  
			echo '<li>',$msg,'</li>'; 
	
		echo '</ul>';
		unset($_GET['msg']);
       } 
    
    if( isset($_GET['err'])  ) {
		echo '<ul class="err">';
		
			echo '<li>',htmlspecialchars($_GET["err"]),'</li>'; 
	
		echo '</ul>';
		unset($_GET['err']);
       } 
	
?>

</div>
<div id="footer" class="container">
	<p>Copyright (c) 2012 CapRock Auto Remarketing. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a></p>
</div>
</center>

<script>
$(document).ready(function(){
    $("#registerbtn").click(function(){
        $.post("scripts/register-exec.php", $("#loginForm").serialize())
        .done(function(data) {alert("Data Loaded: " + data);});
    })
    
})

</script>
</body>

</html>
