<?php
    session_start();

 //Include database connection details
    
        	require_once('config.php');
        	require_once('auth.php');
       
 GetAASCInventoryData();
 

 function GetAASCInventoryItem($ClientAccountNumber)
 {
	//Connect to mysql server
    $link = DBConnection::getConnection();
    
    //If there are input validations, redirect back to the login form
   	if($errflag) {
  		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        echo(html('$errmsg_arr;'));
  		session_write_close();
  		header("location: ../aasc-inventory-view.php");
  		exit();
   	}
    
    //sql statement
    $sql = "select * from FROM aasc_inventory where clientaccountnumber = ".$ClientAccountNumber;
    $ccid=$_SESSION['SESS_CC_ID'];
 
           $rowdata = $rowdata."<tbody>";
           
          //Create query 
        	$qry=$link->prepare($sql);
        	$qry->execute();
            $qry->bind_result($col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8,$col9);
            $cntr = 1;
            while($qry->fetch()) {
                if (($cntr % 2)==0){
                    $evenodd = 'even';
                }
                else
                {
                    $evenodd = 'odd';
                }
                $rowdata = $rowdata. '<tr class="'.$evenodd.'"><td>'.$col1.'</td><td>'.$col2.'</td><td>'.$col5.'</td><td>'.$col3.' '.$col4.'</td><td>IMS Status</td><td>'.$col6.'</td><td>'.$col7.'</td><td>'.$col8.'</td><td>'.$col9.'</td></tr>';
                $cntr +=1;
            }
            $qry->close();
  
            $rowdata = $rowdata."</tbody>";
            
                      
            
            echo $rowdata;
    

 }           
 function GetAASCInventoryData()
 {          
           // var_dump($_POST);
//            exit();
            if (!empty($_POST['sorts'])){
                $sorts = $_POST['sorts'];
            }
                
                
            if (!empty($sorts))
            {
            $sortcol = $sorts[0];
            $sortdir = $sorts[1];
            
            $sortexp = $sortcol." ".$sortdir;
           // echo($sortexp);
//            exit();
            }
            else
            {
                $sortexp = "clientaccountnumber asc";
               // echo($sortexp);
//                exit();
            }
        	//Array to store validation errors
        	$errmsg_arr = array();
        	
        	//Validation error flag
        	$errflag = false;
        	
        	//Connect to mysql server
           $link = DBConnection::getConnection();
	       //$link = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
           //if ($mysqli->connect_errno) {
           //     die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
           // }
        	
        
        	
        	//If there are input validations, redirect back to the login form
        	if($errflag) {
        		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                echo(html('$errmsg_arr;'));
        		session_write_close();
        		header("location: ../aasc-inventory-view.php");
        		exit();
        	}
           
            $ccid=$_SESSION['SESS_CC_ID'];
 
           $rowdata="<table id='flexigrid' name='flexigrid' class='display' cellpadding='0' cellspacing='0' border='0' width='75%'><thead><tr><th>RowId</th><th>Acct Nbr.</th><th>VIN</th><th>Auction</th><th>Customer Name</th><th>Vehicle Status</th><th>Legal Sale Date</th><th>Title Status</th>";
           $rowdata = $rowdata."<th>Scheduled Sale Date</th><th>Hold Status</th></tr></thead><tbody>";
           
          //Create query
        	$qry=$link->prepare("SELECT rowid, clientaccountnumber, vin, clientfield1, clientfield2, auctionid,  legalsaledate, titlesent, ClearVehicleForSale,holdstatus  FROM aasc_inventory where cc_id='$ccid' order by ".$sortexp);
        	$qry->execute();
            $qry->bind_result($col0,$col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8,$col9);
            $cntr = 1;
            while($qry->fetch()) {
                if (($cntr % 2)==0){
                    $evenodd = 'even';
                }
                else
                {
                    $evenodd = 'odd';
                }
                $rowdata = $rowdata. '<tr class="'.$evenodd.'"><td>'.$col0.'<td>'.$col1.'</td><td>'.$col2.'</td><td>'.$col5.'</td><td>'.$col3.' '.$col4.'</td><td>IMS Status</td><td>'.$col6.'</td><td>'.$col7.'</td><td>'.$col8.'</td><td>'.$col9.'</td></tr>';
                $cntr +=1;
            }
            $qry->close();
  
            $rowdata = $rowdata."</tbody></table>";
            
                      
            
            echo $rowdata;
            
           
}
        
        	//Function to sanitize values received from the form. Prevents SQL injection
        	function clean($str) {
        		$str = @trim($str);
        		if(get_magic_quotes_gpc()) {
        			$str = stripslashes($str);
        		}
        		return mysql_real_escape_string($str);
        	}
        	
        	
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



?>