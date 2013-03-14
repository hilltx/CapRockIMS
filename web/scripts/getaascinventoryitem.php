<?php
    //session_start();

 //Include database connection details
    
        	require_once('config.php');
        	//require_once('auth.php');
       
// GetAASCInventoryItem("1010");
 
        	
class DbConnection {
    private static $connection;
    private function __construct() {} // not needed in this example, really, as we only need a connection, which is a stable resource.
    private function __clone() {} // nothing to see here, move on!
    private function __wakeup() {} // ...and I really mean it!
    public static function getConnection() { 
         if (!isset(self::$connection)) { 
          self::$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
              // and so created was a connection for all creatures, big and small, 
              // to share and enjoy!
         }
         return self::$connection; 
    }
}

 function GetAASCInventoryItem($rowid)
 {
	//Connect to mysql server
    $link = DBConnection::getConnection();
 
    //If there are input validations, redirect back to the login form
  // 	if($errflag) {
//  		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
//        echo(html('$errmsg_arr;'));
//  		session_write_close();
//  		header("location: ../aasc-inventory-view.php");
//  		exit();
//   	}
    
    //sql statement
    $sql = "select modelyear, make, model,  dateassigned, pickupdate, datesecured, mileage, 
            vehiclegrade, vehicleisoperable, 
            framedamage,  auctioncharges, avgmmr, floorprice,   
            solddate, saleprice from  aasc_inventory where rowid = '$rowid'";
    
 
           $rowdata = "";
           
          //Create query 
        	$qry=$link->prepare($sql);
            //var_dump($qry);
            //var_dump($sql);
            
        	$qry->execute();
            $qry->bind_result($col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8,$col9,$col10, $col11, $col12, $col13, $col15, $col16);
            $cntr = 1;
            while($qry->fetch()) {
                
                
                $rowdata = $rowdata.'<div class="div-table-col">'.$col1.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col2.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col3.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col4.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col5.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col6.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col7.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col8.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col9.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col10.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col11.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col12.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col13.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col15.'</div>';
                $rowdata = $rowdata.'<div class="div-table-col">'.$col16.'</div>';
                
                $cntr +=1;
            }
            $qry->close();
  
            
            
                      
            
            echo $rowdata;
    

 }           
 ?>