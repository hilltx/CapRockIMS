<?php //session_start();
      require_once('scripts/auth.php');
?>
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
<script src='..js/Table2CSV.js'></script>;
<script src='../../DataTables/media/js/jquery.dataTables.min.js'></script>

<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="caprock.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
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
<div id="header-wrapper">
	<div id="header">
	
		
	</div>
</div>

<!--BEGIN Content-->
<div id="wrapper">

  <div id="page">
 <?php include ('logo.php');?>

           <div id="sortbtns">
            <strong>Sort Column:</strong> <select id="sortcol">
                <option>ClientAccountNumber</option>
                <option>VIN</option>
                <option>AuctionId</option> 
                <option>PickupDate</option>
                <option>DropOffDate</option>
                <option>SecondaryClient</option>  contactperson1, phone1, fax1, email1, legalsaledate, vehicleisoperable
                <option>ContactPerson1</option>
                <option>Phone1</option>
                <option>Fax1</option>
                <option>Email1</option>
                <option>LegalSaleDate</option>
                <option>VehicleIsOperable</option>
            </select>
            <select id="sortdir" >
            <option>ASC</option> 
            <option>DESC</option> 
            </select>
            <input type="button" id="submitsort" class="button-style" value="Sort"/>
            <input type="button" id="back_btn"   class="button-style"  value="Back" />
            <input type="button" id="export_btn" class="button-style" value="Export" />
            <input type="button" id="logout_btn" class="button-style" value="Log Out" />
            
            </div>
            <div id="griddiv"></div>

	</div>
    
 </div>

<!--END Content-->
<center>
<div id="footer-bg">

</div>
</center>
<center>
<div id="footer" class="container">
	<p>Copyright (c) 2012 CapRock Auto Remarketing. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a></p>
</div>
</center>

</body>

<script>
    
    function LoadInventory()
        {
            //  $("#submitsort").click(function(){
               
              var strsortcol,strsortdir;
                strsortcol = $("#sortcol").val();
                strsortdir = $("#sortdir").val();  
            $('#griddiv').load("scripts/getaascinventory.php",{'sorts[]':[strsortcol,strsortdir]},function(){
            
                    
                     //table style
                     $("table").css({'border':'solid 1px','font-family': 'Sans-Serif',"color":"black","position":"relative","top":"0%","width":"80%","height":"50%","left":"0px","float":"left"});
                     
                     $("th").css({'font-size': '13px',
                                  'font-weight':'bold',
                                  'padding': '4px',
                                  'background': '#000000',
                                  'border-top': '2px solid #000000',
        	                      'border-bottom': '1px solid #000000',
        	                      'color': '#F8F9FA','width':'100px'
                     })
                     
                     $("td").css({'font-size': '10px',
                                  'font-weight': 'bold',
                                  'padding':'1px',
                                  'background': '#D4C6C6',
                                  'border-top': '1px solid #000000',
                                  'border-bottom': '1px solid #fff',
                                  'color': '#08111A','width':'100px'
                     })
                     
                    $("tr:hover").css({'background':'#d0dafd;','color':'#339'})
                    //end table styles
                 
                    
                    
                });
                return false;
        } 
  
  
   
    $(document).ready(function(){
   
             //load table
             LoadInventory();  

            $("#footer").css("height","50px").css("position","relative");
 
            $("#submitsort").css("width","110px").css("margin","1px");
            
            $('#logout_btn').css("width","110px");
   
            $('#back_btn').css("width","110px");  
            
            $('#sortbtns').css("position","relative").css("top","0px").css("float","left");
            
            $("#wrapper").css("width","100%");
            
            $("#page").css("background-color","#FCF7F7").css("position","relative").css("width","100%").css("overflow","scroll");
            
            $("#logo_a").css("width","180px").css("height","180px").css("top","0px").css("position","relative");
            
           //end move stuff around
           
           //bind click event to menu
                       
            $("#home").click(function(e){
                window.location = "main-container.php";
                e.preventDefault();
            });
            
            $("#back_btn").click(function(e) {
                window.location = "client-landing-form.php";
                e.preventDefault();
            });
             
            $("#logout_btn").click(function(e){
                window.location = "scripts/logout.php"
                e.preventDefault();
            })
            
            
            
 
            $("#export_btn").click(function(e){
                     //window.open('data:application/vnd.ms-excel,' + $('#flexigrid').html());
                    var strsortcol;
                    var strsortdir;
                    strsortcol = $("#sortcol").val();
                    strsortdir = $("#sortdir").val();
                    var x = $(this).load("scripts/getaascinventory.php",{'sorts[]':[strsortcol,strsortdir]})
                    alert(x.text())
                    
            }) 
          
          //load inventory on sort click  
          $("#submitsort").click(function(){
                
                var strsortcol;
                var strsortdir;
                strsortcol = $("#sortcol").val();
                strsortdir = $("#sortdir").val();
             
                $('#griddiv').load("scripts/getaascinventory.php",{'sorts[]':[strsortcol,strsortdir]},function(){
                    
                    
                     //table style
                    $("table").css({'border':'solid 1px','font-family': 'Sans-Serif',"color":"black","position":"relative","top":"0%","width":"80%","height":"50%","left":"0px","float":"left"});
                     
                    $("th").css({'font-size': '13px',
                                  'font-weight':'bold',
                                  'padding': '4px',
                                  'background': '#000000',
                                  'border-top': '2px solid #000000',
        	                      'border-bottom': '1px solid #000000',
        	                      'color': '#F8F9FA','width':'100px'
                     })
                     
                      $("td").css({'font-size': '11px',
                                  'font-weight': 'bold',
                                  'padding':'1px',
                                  'background': '#D4C6C6',
                                  'border-top': '1px solid #000000',
                                  'border-bottom': '1px solid #fff',
                                  'color': '#08111A','width':'100px'
                     })

                    $("tr:hover").css({'background':'#d0dafd;','color':'#339'})
                    //end table styles
                    
 
                });

          }); 
         
        
         $('#flexigrid tr rd a').each(function() {
            // need this to skip the first row
            if ($(this).find("td:first").length > 0) {
                var cutomerId = $(this).find("td:first").html();
                alert(customerId);
  }
});


         
    

       }     
          
         
          
     );   
      
</script>
</html>
