<html>
<head>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../js/jquery.maskedinput.js"></script>
<style>

#move {border:solid;width:50px;}
</style>

</head>
<body>

<div>
<p>Phone:  <input type='text' id='phone'/></p>
<p>Email:  <input type="text" id="email" /></p>

TEST
</div>

</body>

<script>

$(document).ready(function(){
    
    alert('');
    $("#phone").mask('(999) 999-9999');
    $("#email").mask('********@**********.***');
    
})

</script>

</html>