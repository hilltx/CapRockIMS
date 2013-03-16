<?php include('scripts/utils.php'); ?>
<html>
<head>
 <script src="http://code.jquery.com/jquery-latest.js"></script>
<link href="../DataTables/media/css/demo_table.css" rel="stylesheet" type="text/css" />    
<link href="caprockims.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css"/>
<link href="default.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="header-wrapper">
<center><?php include('header.php') ?></center>
</div>

<div id="wrapper">

   <div id="page">
   <div id="content" class="sec1div">
<?php

$uploaddir = 'FileIn';
$uploadfile = $uploaddir .'\\'. basename($_FILES['userfile']['name']);


try{
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    $oImport = new cAASCInventory();
    echo $oImport->ImportInventoryUpdateFile($uploadfile);
    //echo "File is valid, and was successfully uploaded.\n";
} else {
    echo $_FILES['userfile']['tmp_name'];
    
    //echo "Possible file upload attack!\n";
}
}
catch(Exception $e)
{
    echo $e;
}

?>

</div></div></div>
<center>
<?php include('footer.php') ?>
</center>

<script>
 $(document).ready(function() {
    $("#content").css("display","none");
    $("#content").css("position","relative").css("border","solid 1px").css("height","50px").css("width","100%").css("top","50%");
    $("#content").slideDown().delay(800).navigate("client-landing-form.php");
// Handler for .ready() called.
})
</script>
</body>
</html>
