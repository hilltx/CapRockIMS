<?php include('scripts/utils.php'); 
$a = new cAASCInventory();
//echo 'http://localhost//caprockims/web//'
$results = $a->ExportUnsentInventory();
if ($results=="No Data To Export")
{
    echo $results;
}
else
{
    echo "<a href=http://localhost/caprockims/web/".$results.">Download File for IMS </a>";
}
?>

