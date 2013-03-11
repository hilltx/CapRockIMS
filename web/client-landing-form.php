<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/minified/jquery-ui.min.js"></script>
<script type="text/javascript">
function submitform(arg)
{
  document.landingForm.nav_to.value=arg;
  document.landingForm.submit();
}
</script>
<?php 
    require_once('scripts/auth.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Client Landing Form</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="caprock.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div id="header-wrapper">
<?php include ('header.php') ; ?>
</div>

<div id="wrapper">
  
<div id="page">

<?php include ('logo.php');?>   	
    <center>
    
    <table>  
        
        <tr>
        <td>

                    <div id="buttonmenu" >
                    <form id="landingForm" name="landingForm" method="post" action="scripts/client-landing-exec.php">
                      
                      <input type="hidden" id="cc_id" name="cc_id" value =" <?php echo htmlspecialchars($_SESSION['SESS_CC_ID']) ?> "/>
                      <input type="hidden" id="nav_to" name="nav_to"/>
                      <input type="hidden" id="clientacctnbr" name="clientacctnbr" value =" <?php echo htmlspecialchars($_SESSION['SESS_CC_ACCT_NBR']) ?> "/>
 
                      <!--<a id="button_home" href="http://caprockremarketing.com/" class="button-style" title="Home">Home</a><br />-->

                      <tr>
                      <?php 
                        $retval = htmlspecialchars($_SESSION['SESS_ISADMIN']);
                        if ($retval=="1") { ?>
                           <tr><td><a id="button_register" href="register-form.php"  class="button-style" title="Register">Register User</a></td></tr>
                           <tr><td><a id="button_export" href=""  class="button-style" title="Export">Export IMS</a></td></tr>
                           <tr><td><a id="button_import" href=""  class="button-style" title="Import">Import IMS</a></td></tr>
                      <?php } ?>
                      </tr>
                      <tr>
                       <td><a href="" id="button_edit"  class="button-style" onclick = "submitform('add');return false;">Add Inventory Item</a></td>
                       </tr>
                      <tr>
                       
                       <td><a href="" id="button_view"  class="button-style" onclick = "submitform('view');return false;">View Inventory</a></td>
                       </tr>
                       <tr>
                      <td><a id="button_logout"  class="button-style" href="loggedout.php" title="Log Out">Log Out</a></td>
                      </tr>
                      
                    </form>
                   
                    </div>
        </td>      
         </tr>
   </table>
</center>
	</div>
 </div>

<div id="footer-bg"><center>
<div id="download" title="Download IMS Inventory">Click this link to download the IMS inventory file.<div id="file"></div></div>
<div id="import" title="Import AASC Inventory File"><div id="import_file">
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="importaascinventory.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
</div></div>
</center>
</div>
<center>
<?php include("footer.php")?>
</center>

<script>

    $(document).ready(function(){
        
        $( "#download" ).dialog({autoOpen:false});
        $("#import").dialog({autoOpen:false});

         $("table").css("position","relative").css("top","-130px");
                 
            $("#logo_a").css("width","200px").css("height","200px");
         
        $("#button_export").click(function(e){
            $("#file").load('exportaascinventory.php');
            $("#download").dialog('open',{resizable: true,height:300,width:1024,modal: true});
            
            return false;
           
        });
        $("#button_import").click(function(e){
            $("#import").dialog('open',{resizable:true,height:600,width:1024,modal:true});
            return false;
        })

        $("#button_import").click(function(){
            
        })
         
         $("#button_home").css("width","100px").css("text-align","center");
         $("#button_edit").css("width","100px").css("text-align","center");
         $("#button_view").css("width","100px").css("text-align","center");
         $("#button_logout").css("width","100px").css("text-align","center");
         $("#button_register").css("width","100px").css("text-align","center");
         $("#button_export").css("width","100px").css("text-align","center");
         $("#button_import").css("width","100px").css("text-align","center");
         
      
    });
       
</script>




</body>
</html>


