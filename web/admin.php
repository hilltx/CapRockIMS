<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>


<script type="text/javascript">
   function submitForm()
   {
        try{
            document.forms["manageUsersForm"].submit();
        }
        catch(e)
        {
            alert(e);
        }
    
   }
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
<link href="CapRockIMS.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form class="form" id="manageUsersForm" name="managerUsersForm" action="scripts/users-list.php" method="post" >
<div id="outer_login_div">
    <div id="inner_register_div">
        <div id="logo" class="logo"><img src="images/caprocklogo.png" /></div>
        <div id="inquery" class="inquery">
            Toll Free Phone:<br>
             (877) 559-1767 <br><br>
            email:<br>
            Inquiries@caprem.com
        </div>

    <input type="button" class="button" id="AddNewUserBtn" value="Add New User" onclick="submitForm()"/>
    <p></p>
    <input type="button" class="button" id="ManageUserBtn" value="Manage Users"/>

    </div>
</div>
</form>
</body>
</html>

