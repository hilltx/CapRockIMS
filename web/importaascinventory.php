<?php include('scripts/utils.php'); 
//$a = new cAASCInventory();
////echo 'http://localhost//caprockims/web//'
//$results = $a->ImportInventoryUpdateFile();
//
//
//    echo "File Imported";
//

// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

$uploaddir = 'FileIn';
$uploadfile = $uploaddir .'\\'. basename($_FILES['userfile']['name']);

//echo '<pre>';
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
//echo 'Here is some more debugging info:';
//print_r($_FILES);

//print "</pre>";
?>
