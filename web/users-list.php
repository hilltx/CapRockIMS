<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="http://http://localhost/flexigrid/css/style.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/flexigrid/css/flexigrid.pack.css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://localhost/flexigrid/js/flexigrid.js"></script>

</head>

<body>


<?php
 
    include 'scripts/getUsers.php';

?>
<div id="output"></div>
</body>
<script>

   
    
  
         //<![CDATA[
		$(document).ready(function($) {
            
			$('#flexigrid').flexigrid();
		});
		//]]>        
  

</script>
</html>
