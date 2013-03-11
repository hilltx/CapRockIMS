<?php session_start();
      require_once('scripts/auth.php');
?>
<html>
<head>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="../TableTools-2.1.4/media/js/tabletools.js"></script>
<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/minified/jquery-ui.min.js"></script>

<link href="../DataTables/media/css/demo_table.css" rel="stylesheet" type="text/css" />    
<link href="caprockims.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css"/>
<link href="default.css" rel="stylesheet" type="text/css" />
 
</head>

</head>
<body>
<div id="header-wrapper">
<center><?php include('header.php') ?></center>
</div>

<div id="wrapper">

   <div id="page">
	<?php include ('logo.php');?>
        <center>
        <table>
            <tr>
            <td>
            <div>
                <div id="demo">
                    <div id="griddiv"></div>
                </div>
           </div>
           </td>
           </tr>
           
       </table>
      
      </center>
    </div>
    
</div>

<center><a href="" id="back_btn" class="button-style">Back</a>

<div id="header-wrapper">   
<div id="header-bg">       
<?php include('footer.php') ?>
</div>
</div>  


</center>
 
<div id="dialog-confirm" title="Vechicle Extended Information">
    <div>Year</div><div>Make</div><div>Model</div><div>Date Assigned</div><div>Date Picked Up</div><div>Date Secured</div><div>Mileage</div>
        <div>Vehicle Grade</div><div>Drivable</div><div>Frame Damage</div><div>Auction Charges</div><div>AVG MMR</div>
        <div>Floor Price</div><div>Times Run</div><div>Sold Date</div><div>Sale Price</div>
        <?php include('scripts/getaascinventoryitem.php');
        GetAASCInventoryItem('1'); ?>

</div> 

</body>
<script type="text/javascript">

/* Formating function for row details */
function fnFormatDetails ( oTable, nTr )
{
    var aData = oTable.fnGetData( nTr );
    
    window.showModalDialog("dialog.php?arg="+aData[1],"Inventory Extended Information","dialogWidth:1424px;dialogHeight=480px;center:1;menubar:no;addressbar:no;titlebar:no;")
    
}


    $(function () {
       $("#dialog-confirm").dialog({ autoOpen: false, appendTo: "#dialog-confirm", width:600 });
 
       $('#demo').css("border","thin").css("height","83%").css("position","relative").css("left","90px").css("top","-100px").css("overflow","auto").css("z-index","0");
       
       $('#griddiv').load("scripts/getaascinventory.php", function(){
           // $("#flexigrid").dataTable();
            
            
            var nCloneTh = document.createElement( 'th' );
            var nCloneTd = document.createElement( 'td' );
            nCloneTd.innerHTML = '<img src="images/details_open.png">';
            nCloneTd.className = "center";
             
            $('#flexigrid thead tr').each( function () {
                this.insertBefore( nCloneTh, this.childNodes[0] );
            } );
             
            $('#flexigrid tbody tr').each( function () {
                this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
            } );
             
            /*
             * Initialse DataTables, with no sorting on the 'details' column
             */
           var oTable = $('#flexigrid').dataTable( {
                "aoColumnDefs": [
                    { "bSortable": false, "aTargets": [ 0 ] }
                ],
                "aaSorting": [[1, 'asc']]
            });
               
            $('#flexigrid tbody td img').on('click', function () {
            var nTr = $(this).parents('tr')[0];
            this.src = "images/details_open.png";
            oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
         
       });
            
      });
      
       $("#demo").css("width","100%");
       $("#logo").css("width","180px").css("height","180px").css("top","0px").css("position","relative").css("float","left");
       $("#header-wrapper").css("width","100%").css("height","150px");
       $("#back_link").css("postion","relative").css("left","-100px") ;
       
       $("#page").css("left","0px").css("position","relative").css("padding","0px").css("width","100%").css("overflow","scroll").css("height","100%");
       if (window.navigator.userAgent.indexOf('MSIE')!=-1)
       {
            $("#footer-bg").css("height","100px").css("position","relative").css("top","100%").css("width","100%");
            $("#footer").css("width","100%").css("position","relative").css("height","100px");
            
           // $("#button_div").css("position","relative").css("top","-35px");     
           // $("#back_btn").css("position","relative").css("top","-20px");
           // $("#logout_btn").css("position","relative").css("top","-20px");
       }
       else
       {
            $("#footer-bg").css("height","10px").css("position","relative");
            $("#footer").css("width","100%").css("position","relative").css("height","120px");
            
           // $("#button_div").css("position","relative").css("top","-45px");     
          //  $("#back_btn").css("position","relative").css("top","-45px");
           // $("#logout_btn").css("position","relative").css("top","-45px");
       }     
       

       $("#back_btn").click(function(e) {
                window.location = "client-landing-form.php";
                e.preventDefault();
            });
             
            $("#logout_btn").click(function(e){
                window.location = "scripts/logout.php"
                e.preventDefault();
            })
       
       
       $("#sec_1_div").css("width","80%").css("height","60%");
 
    });
</script>
</html>
