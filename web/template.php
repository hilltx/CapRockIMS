<html>


<head>

<script src="http://code.jquery.com/jquery-latest.js"></script>

</head>


<body>
<center>

<div id="outer_wrapper">

<div id="header"><?php include("logo.php") ?></div>
<div id="page"></div>
<div id="footer"><?php include('footer.php') ?></div>

</div>
</center>

</body>

<script>

$(document).ready(function(){
    
    $("#outer_wrapper").css("border","solid 1px").css("width","960px").css("height","100%");
    $("#header").css("border","solid 1px").css("width","100%").css("height","20%");
    $("#page").css("border","solid 1px").css("width","100%").css("height","60%");
    $("#footer").css("border","solid 1px").css("width","100%").css("height","20%");
    
    $("#logo_a").css("float","left");
})

</script>

</html>