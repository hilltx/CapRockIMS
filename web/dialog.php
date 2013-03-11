<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8" />
<title>Vehicle Extended Information</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<link rel="stylesheet" href="default.css" />
<script>
$(function() {
$( "#dialog-confirm" ).dialog({
resizable: true,
height:300,
width:1370,
modal: true
});
});
</script>
<style>
.div-table{display:table; border:1px solid #003399;}

.div-table-caption{display:table-caption; background:#009999;}

.div-table-row{display:table-row;}

.div-table-col{display:table-cell; padding: 5px; border: 1px solid #003399;}
</style>
</head>
<body>

<!--
modelyear, make, model,  dateassigned, pickupdate, datesecured, mileage, 
            titlestatus, legalsaledate,  vehiclegrade, vehicleisoperable, 
            framedamage,  hold, auctioncharges, avgmmr, floorprice, scheduledsaledate,  
            timesrun,  solddate, saleprice, auctionstatus
-->
<div id="dialog-confirm" title="Vechicle Extended Information" class="div-table">
<div  class="div-table-row">
    <div class="div-table-col">Year</div>
    <div class="div-table-col">Make</div>
    <div class="div-table-col">Model</div>
    <div class="div-table-col">Date Assigned</div>
    <div class="div-table-col">Date Picked Up</div>
    <div class="div-table-col">Date Secured</div>
    <div class="div-table-col">Mileage</div>
    <div class="div-table-col">Vehicle Grade</div>
    <div class="div-table-col">Drivable</div>
    <div class="div-table-col">Frame Damage</div>
    <div class="div-table-col">Auction Charges</div>
    <div class="div-table-col">AVG MMR</div>
    <div class="div-table-col">Floor Price</div>
    <div class="div-table-col">Sold Date</div>
    <div class="div-table-col">Sale Price</div>
</div>
    <div class="div-table-row">
        <?php include('scripts/getaascinventoryitem.php');
        $arg=$_GET["arg"];
        GetAASCInventoryItem($arg); ?>
    </div>

</div>

</body>
</html>