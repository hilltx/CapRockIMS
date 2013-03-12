	<?php
    function CreateClientCompaniesSelect()
	{
		
		
		//Include database connection details
		require_once('config.php');
		
		//Array to store validation errors
		$errmsg_arr = array();
		
		//Validation error flag
		$errflag = false;
		
		//Connect to mysql server
		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		if(!$link) {
			die('Failed to connect to server: ' . mysql_error());
		}
		
		//Select database
		$db = mysql_select_db(DB_DATABASE);
		if(!$db) {
			die("Unable to select database");
		}
		
	   $html_select_item = "";
		//Create query
		$qry="SELECT * FROM client_companies";
		$result=mysql_query($qry);
		$html_select_begin = "<select id='client_companies' name='client_companies'>";
		//Check whether the query was successful or not
		if($result) {
			while ($row = mysql_fetch_array($result)){
				$html_select_item = $html_select_item."<option value='" . $row['cc_id'] . "'>" . $row['cc_name']."</option>";
				//Login Successful
			}
			$html_select_end = "</select>";
            echo $html_select_begin.$html_select_item.$html_select_end;
		
		
		}
        else
        {die('Did not get a result');}
	}
    class cAASCInventory
    {
         public $ClientAccountNumber='';
         public $VIN='';
         public $AuctionID='';
         public $PickupDate='';
         public $DropOffDate='' ;
         public $DeleteCancelRequest='';
         public $SecondaryClient='' ;
         public $ModelYear='' ;
         public $Make='' ;
         public $Model='' ;
         public $Series='' ;
         public $BodyStyle='';
         public $ExteriorColor='' ;
         public $Classification ='';
         public $InteriorColor='' ;
         public $ClientField1='' ;
         public $ClientField2='' ;
         public $DriversName='' ;
         public $ReplacementVehicleNumber='' ;
         public $ReplacementVehicleModelYear='' ;
         public $ReplacementVehicleColor='' ;
         public $PayoutAmount='' ;
         public $LocationType ='';
         public $LocationName='' ;
         public $LocationAddress1='' ;
         public $LocationAddress2='' ;
         public $LocationCity='' ;
         public $LocationState='' ;
         public $LocationZip='' ;
         public $ContactPerson1='' ;
         public $ContactPerson2='' ;
         public $Phone1='' ;
         public $Phone2='' ;
         public $Fax1='' ;
         public $Fax2='' ;
         public $Email1='' ;
         public $Email2='' ;
         public $LegalSaleDate='' ;
         public $HoldStatus='' ;
         public $HoldUntil='' ;
         public $VehicleIsOperable='' ;
         public $PickupOrDropOffNote='';
         public $FloorPrice='' ;
         public $ClientWorkStatus='' ;
         public $ClearVehicleForSale='' ;
         public $RedeemVehicle='' ;
         public $TitleSent='' ;
         public $RequestedRunOrder='' ;
         public $FundsReceived='' ;
         public $ReplacementVehicleMake='' ;
         public $ReplacementVehicleModel='' ;
         public $TitleShipmentMethod='' ;
         public $TitleShipmentTrackingNumber='' ;
         public $ClientInternetSellingSuggestion='' ;
         public $SendNotificationsToEmail1='' ;
         public $SendNotificationsToEmail2='' ;
         public $PrivateBookValue='' ;
         public $PrivateComment1='' ;
         public $PrivateComment2='' ;
         public $PrivateAmount1 ='';
         public $PrivateAmount2 ='';
         public $PrivateDate1='' ;
         public $PrivateDate2='' ;
         public $PrivateCode1='' ;
         public $PrivateCode2='' ;
         public $TransportationMethod='' ;
         public $TransportationCompany='' ;
         public $AccountType='' ;
         public $PrivateFloorPrice='' ;
         public $VehicleType='' ;
         public $VehicleKeyCode='' ;
         public $VehicleContact='' ;
         public $TrueMileageUnknown='' ;
         public $TrueMileageUnknownReason='' ;
         public $ExcessWearAndUseClient='' ;
         public $CleaningLevelRequested='' ;
         public $ManagedMaintenanceProgram='' ;
         public $WarrantyExpirationDate='' ;
         public $WarrantyExpirationMileage='' ;
         public $WarrantyProvider='' ;
         public $ClientDate1='' ;
         public $ClientDate2='' ;
         public $ActualCashValue='' ;
         public $CauseOfClaim='' ;
         public $DateOfLoss='' ;
         public $AdjusterName='' ;
         public $AdjustPhone='' ;
         public $DamageAmount='' ;
         public $TransportLoadID='' ;
         public $AuctionBusinessUnit='' ;
         public $ReservedIT='' ;
         public $ReservedCT='' ;
         public $LicensePlate ='';
         public $SubSeries='' ;
         public $ClientAmount1 ='';
         public $OnlinePricingDate='' ;
         public $OnlinePricingBy='' ;
         public $AlternateClientUniqueID='' ;
         public $OnlineFixedPrice='' ;
         public $OnlineStartingBid='' ;
         public $OnlineBidIncrement='' ;
         public $OnlineFloorPrice='' ;
         public $MarshalVehicle='' ;
         public $CRRequested_Marshal='' ;
         public $MarshalingPurpose='' ;
         public $MarshaledVehicleReleaseInstructions='' ;
         public $ClientAmount2='' ;
         public $ClientAmount3 ='';
         public $ClientAmount4='' ;
         public $ClientAmount5 ='';
         public $ClientAmount6 ='';
         public $CC_ID=''; 
     
         public function add()
         {
            //Start session
    		session_start();
    		
                   
    		//Include database connection details
    		require_once('config.php');
    		
    		//Array to store validation errors
    		$errmsg_arr = array();
    		
    		//Validation error flag
    		$errflag = false;
    		
    		//Connect to mysql server
    		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    		if(!$link) {
    			die('Failed to connect to server: ' . mysql_error());
    		}
    		
    		//Select database
    		$db = mysql_select_db(DB_DATABASE);
    		if(!$db) {
    			die("Unable to select database");
    		}
            
           
      
            //Create INSERT query
        	$qry = "INSERT INTO aasc_inventory(clientaccountnumber, vin, modelyear, make, model, clientfield1, clientfield2, auctionid, pickupdate,dropoffdate,secondaryclient,
                                                  locationtype, locationname, locationaddress1, locationaddress2, locationcity, locationstate, locationzip,
                                                  contactperson1, phone1, fax1, email1, legalsaledate, vehicleisoperable, pickupordropoffnote,cc_id) 
                                                  VALUES('$this->ClientAccountNumber','$this->VIN','$this->ModelYear','$this->Make','$this->Model','$this->ClientField1','$this->ClientField2','$this->AuctionID', '$this->PickupDate', '$this->DropOffDate', 
                                                  '$this->SecondaryClient', '$this->LocationType', '$this->LocationName', '$this->LocationAddress1',
                                                  '$this->LocationAddress2', '$this->LocationCity', '$this->LocationState', '$this->LocationZip', '$this->ContactPerson1',
                                                  '$this->Phone1', '$this->Fax1', '$this->Email1', '$this->LegalSaleDate', '$this->VehicleIsOperable', '$this->PickupOrDropOffNote', '$this->CC_ID')";
           
        	
            $result = @mysql_query($qry);
            
        	//Check whether the query was successful or not
        	if($result) {
        		echo '<returnvalue>SUCCESS</returnvalue>';
               // echo '<script type="text/javascript">
//                        <!--
//                       top.window.location = "../aasc-inventory-form.php?msg=AutoIMSItemAdded"
//                      //-->
//                      </script>';
           		exit();
        	}else {
        	   
        		die("Query failed");
        	}
            
         }
         
        //Function to sanitize values received from the form. Prevents SQL injection
    	function clean($str) {
    		$str = @trim($str);
    		if(get_magic_quotes_gpc()) {
    			$str = stripslashes($str);
    		}
    		return mysql_real_escape_string($str);
    	}
        function GetClientName($ccid)
        {
       	    //Include database connection details
    		require_once('config.php');
    		
    		//Array to store validation errors
    		$errmsg_arr = array();
    		
    		//Validation error flag
    		$errflag = false;
    		
    		//Connect to mysql server
    		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    		if(!$link) {
    			die('Failed to connect to server: ' . mysql_error());
    		}
    		
    		//Select database
    		$db = mysql_select_db(DB_DATABASE);
    		if(!$db) {
    			die("Unable to select database");
    		}
    		
    	   $html_select_item = "";
    		//Create query
    		$qry="SELECT cc_name FROM client_companies where cc_id = ".$ccid;
           
    		$result=mysql_query($qry);
    		
    		//Check whether the query was successful or not
    		if($result) {
    			while ($row = mysql_fetch_array($result)){
    			
    			 $cc_name= $row['cc_name'];
              
    			}
    		
                return $cc_name;
    		
    		
    		}
            else
            {die('Did not get a result');}
                
        }
        function update()
        {
            //Start session
    		session_start();
    		
    		//Include database connection details
    		require_once('config.php');
    		
    		//Array to store validation errors
    		$errmsg_arr = array();
    		
    		//Validation error flag
    		$errflag = false;
    		
    		//Connect to mysql server
    		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    		if(!$link) {
    			die('Failed to connect to server: ' . mysql_error());
    		}
    		
    		//Select database
    		$db = mysql_select_db(DB_DATABASE);
    		if(!$db) {
    			die("Unable to select database");
    		}
            //Create INSERT query
        	$qry = "UPDATE aasc_inventory(clientaccountnumber, vin, auctionid, pickupdte,dropoffdate,deletecancelrequest,secondaryclient,modelyear,
                                                locationtype, locationname, locationaddress1, locationaddress2, locationcity, locationstate, locationzip,
                                                contactperson1, phone1, fax1, email1, legalsaledate, vehicleisoperable, pickupordropoffnote,cc_id)";
            echo $qry;
        	$result = @mysql_query($qry);
        	
        	//Check whether the query was successful or not
        	if($result) {
        		header("location: register-success.php");
        		exit();
        	}else {
        	   
        		die("Query failed");
        	}
            
            
        }
      
        function ExportUnsentInventory()
        {
            //Include database connection details
    		require_once('config.php');
  
            
            //get db connection
            $link = DBConnection::getConnection();
 
            
            //query data
            $sql = "select 
                    `ClientAccountNumber`,`VIN`,'' as `AuctionID`,date_format(`PickupDate`, '%Y%m%d'),date_format(`DropOffDate`, '%Y%m%d'),'' as `DeleteCancelRequest`, `SecondaryClient`,
                    `ModelYear`,`Make`,`Model`,`Series`,`BodyStyle`,`ExteriorColor`,`Classification`,`InteriorColor`,`ClientField1`,
                    `ClientField2`,`DriversName`,`ReplacementVehicleNumber`,`ReplacementVehicleModelYear`,`ReplacementVehicleColor`, '' as Payout,
                    '' as `PayoutAmount`,`LocationType`,`LocationName`,`LocationAddress1`,`LocationAddress2`,`LocationCity`,`LocationState`,
                    `LocationZip`,`ContactPerson1`, `ContactPerson2`, `Phone1`, '' as `Phone2`, `Fax1`, '' as `Fax2`, `Email1`, `Email2`,
                     date_format(`LegalSaleDate`,'%Y%m%d'), `HoldStatus`, `HoldUntil`,`VehicleIsOperable`, `PickupOrDropOffNote`, `FloorPrice`, `ClientWorkStatus`, 
                    `ClearVehicleForSale`, `RedeemVehicle`, `TitleSent`, `RequestedRunOrder`, `FundsReceived`, `ReplacementVehicleMake`,
                    `ReplacementVehicleModel`, `TitleShipmentMethod`,`TitleShipmentTrackingNumber`, `ClientInternetSellingSuggestion`, 
                    `SendNotificationsToEmail1`, `SendNotificationsToEmail2`, `PrivateBookValue`, `PrivateComment1`, `PrivateComment2`,
                    '' as `PrivateAmount1`, '' as `PrivateAmount2`,'' as `PrivateDate1`, '' as `PrivateDate2`, `rowid` as PrivateCode1, `PrivateCode2`, `TransportationMethod`, 
                    `TransportationCompany`, `AccountType`, `PrivateFloorPrice`, `VehicleType`, `VehicleKeyCode`, `VehicleContact`,`TrueMileageUnknown`, 
                    `TrueMileageUnknownReason`, `ExcessWearAndUseClient`, `CleaningLevelRequested`, `ManagedMaintenanceProgram`, `WarrantyExpirationDate`, 
                    `WarrantyExpirationMileage`, `WarrantyProvider`, '' as `ClientDate1`, '' as `ClientDate2`, '' as `ActualCashValue`,`CauseOfClaim`, `DateOfLoss`, `AdjusterName`, 
                    `AdjustPhone`, `DamageAmount`, `TransportLoadID`, `AuctionBusinessUnit`, `ReservedIT`, `ReservedCT`, `LicensePlate`, `SubSeries`, `ClientAmount1`, 
                    '' as `OnlinePricingDate`, `OnlinePricingBy`, `AlternateClientUniqueID`, '' as `OnlineFixedPrice`, '' as `OnlineStartingBid`, '' as `OnlineBidIncrement`, '' as `OnlineFloorPrice`, 
                    `MarshalVehicle`,`CRRequested_Marshal`, `MarshalingPurpose`, `MarshaledVehicleReleaseInstructions`, `ClientAmount2`, `ClientAmount3`, 
                    '' as `ClientAmount4`, '' as `ClientAmount5`, '' as `ClientAmount6`
                    from  aasc_inventory where (SentToIMSDte = '0000-00-00' or SentToIMSDte is null)";
    
            //var_dump($sql);
           $rowdata = "";
           
          //Create query 
        	$qry=$link->prepare($sql);
 
           
            //var_dump($sql);
            
        	$qry->execute();
            
             /* store result */
            $qry->store_result();
           // var_dump($qry);
            
            $qry->bind_result($col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8,$col9,$col10, $col11, $col12, $col13, $col14, $col15, $col16, $col17, $col18, $col19, $col20
            , $col21, $col22, $col23, $col24,$col25,$col26,$col27,$col28,$col29,$col30,$col31,$col32,$col33,$col34,$col35,$col36,$col37,$col38,$col39
            , $col40,$col41,$col42,$col43,$col44,$col45,$col46,$col47,$col48,$col49,$col50,$col51,$col52,$col53,$col54,$col55,$col56,$col57,$col58,$col59
            , $col60,$col61,$col62,$col63,$col64,$col65,$col66,$col67,$col68,$col69,$col70,$col71,$col72,$col73,$col74,$col75,$col76,$col77,$col78,$col79
            , $col80,$col81,$col82,$col83,$col84,$col85,$col86,$col87,$col88,$col89,$col90,$col91,$col92,$col93,$col94,$col95,$col96,$col97,$col98,$col99
            , $col100,$col101,$col102,$col103,$col104,$col105,$col106,$col107,$col108,$col109,$col110,$col111,$col112);
            $cntr = 1;
           // var_dump($qry);
            
            if ($qry->num_rows>0)
            {
                //open file for writing
                $file = "FileOut//WIND_INVENT_C2.UPL.".date("YmdHis").".csv";
               
                $fh = fopen($file,'w');
            //make sure that which ever date pickup or dropoff is null that it is ''
            //all dates should be in YYYYMMDD format
          
            
                while($qry->fetch()) {
                    if ($col4=='0000-00-00' || $col4=='0')
                    {
                        $col4 = '';
                    }
                    if ($col5=='0000-00-00' || $col5=='0')
                    {
                        $col5='';
                    }
                    $col43 = preg_replace('/[^a-z\d ]/i', ' ', $col43);//drop off pick up note, remove non alpha numeric characters
                    //for each row
                        $rowdata = $col1.','.$col2.','.$col3.','.$col4.','.$col5.','.$col6.','.$col7.','.$col8.','.$col9.','.$col10.','.$col11.','.$col12.','.$col13.','.$col14.','.$col15.','.$col16.','.$col17.','.$col18.','.$col19.','.$col20.','.$col21.','.$col22.','.$col23.','.$col24
                                  .','.$col25.','.$col26.','.$col27.','.$col28.','.$col29.','.$col30.','.$col31.','.$col32.','.$col33.','.$col34.','.$col35.','.$col36.','.$col37.','.$col38.','.$col39
                                  .','.$col40.','.$col41.','.$col42.','.$col43.','.$col44.','.$col45.','.$col46.','.$col47.','.$col48.','.$col49.','.$col50.','.$col51.','.$col52.','.$col53.','.$col54.','.$col55.','.$col56.','.$col57.','.$col58.','.$col59
                                  .','.$col60.','.$col61.','.$col62.','.$col63.','.$col64.','.$col65.','.$col66.','.$col67.','.$col68.','.$col69.','.$col70.','.$col71.','.$col72.','.$col73.','.$col74.','.$col75.','.$col76.','.$col77.','.$col78.','.$col79
                                  .','.$col80.','.$col81.','.$col82.','.$col83.','.$col84.','.$col85.','.$col86.','.$col87.','.$col88.','.$col89.','.$col90.','.$col91.','.$col92.','.$col93.','.$col94.','.$col95.','.$col96.','.$col97.','.$col98.','.$col99
                                  .','.$col100.','.$col101.','.$col102.','.$col103.','.$col104.','.$col105.','.$col106.','.$col107.','.$col108.','.$col109.','.$col110.','.$col111.','.$col112;
                        $rowdata = $rowdata."\r\n";
                        //write data to file
                        
                        fwrite($fh,$rowdata);
                        
                        
                        
                        //update sent date
                        $updateqry = "update aasc_inventory set SentToIMSDte= '".date("Y-m-d H:i:s")."' where rowid = ".$col65;  //col65 is rowid
                       
                        $upt=$link->prepare($updateqry);
                        $upt->execute();
                    //next
                }
 
                //close connection
                unset($link);
                
                //close file
                //$fh->close();
                unset($fh);
                return $file;;
                 
            }
            else{
                return 'No Data To Export';
            }
        }
        function ImportInventoryUpdateFile($file)
        {
             /*
             
             0.  Cn. Acc. #,
             1.  VIN,
             2.  Auction,
             3.  Secondary Client,
             4.  Status,
             5.  Legal Sale Date,
             6.  Title Status,
             7.  Scheduled Sale Date,
             8.  Hold Type,
             9.  Year,
             10. Make,
             11. Model,
             12. Date Entered AutoIMS,
             13. Date Picked Up,
             14. Secured Date,
             15. Mileage,
             16. Vehicle Grade,
             17. Drivable,
             18. UniBody/Frame Damage,
             19. Total Charges,
             20. MMR,
             21. Floor Price (Accepted),
             22. Sold Date,
             23. Sale Price,
             24. Private Code 1
             
             */
            //Include database connection details
    		require_once('config.php');
            $link = '';
            $fh = '';
            
            try{
            //open file
            $fh = fopen($file,'r');
            }
            catch(Excecption $e)
            {
                return 'Error opening file: '.$e;
            }
            
            //read file into memory
            $row = 1;
            try{
                $link = DBConnection::getConnection();
            }
            catch(Exception $e)
            {
                return 'Error opening database connection: '.$e;
            }
            try{
                while (($data = fgetcsv($fh, 1000, ",")) !== FALSE) {
                    $num = count($data);
                    //echo "<p> $num fields in line $row: <br /></p>\n";
                    if ($row>2){
                        $mileage = preg_replace('/[^a-z\d ]/i', '', $data[15]);
                        if ($mileage=='')
                        {
                            $mileage = 0;
                        }
                        $auctionstatus=preg_replace('/[^a-z\d ]/i', '', $data[4]);
                        $vehiclegrade=preg_replace('/[^a-z\d ]/i', '', $data[16]);
                        
                        $auctioncharges = trim(preg_replace('/[^a-z\d ]/i', '', $data[19]));
                        if ($auctioncharges==''){
                            $auctioncharges = 0;
                        }
                        $avgmmr = preg_replace('/[^a-z\d ]/i', '', $data[20]);
                    
                        if ($data[17] == 'Yes'){
                            $vio = 0;
                        }
                        else
                        {
                            $vio = 1;
                        }
                        $sqlsetstring = " update aasc_inventory set auctionid='".$data[2]."',AuctionStatus='".$auctionstatus."', TitleStatus='".$data[6]."', ScheduledSaleDate='".$data[7]."', HoldStatus='".$data[8]."', DateSecured='".$data[14]."', Mileage=".$mileage.", VehicleGrade='".$vehiclegrade."', VehicleIsOperable='".$vio."', FrameDamage='".$data[18]."', AuctionCharges='".$auctioncharges."', AvgMMR='".$avgmmr."', FloorPrice='".$data[21]."', SoldDate='".$data[22]."', SalePrice='".$data[23]."'";
                        $sqlwherestring = " where rowid=".$data[24];
                       // var_dump($sqlsetstring.$sqlwherestring);
                        //exit();
                       //var_dump($data[24]);
                      // exit();
                        if ($data[24] != ''){
                        //prepare and execute
                             echo $sqlsetstring.$sqlwherestring;
                            $upt=$link->prepare($sqlsetstring.$sqlwherestring);
                            
                            if(!$upt){
                              echo "prepare failed\\n";
                              echo "error: ", $link->error, "\\n";
                              echo "OBJECT NOT CREATED";
                              return;
                              }
                            else{
                                
                                echo "Row ".$row." updated.\\n";
                            }
                            $upt->execute();
                            
                        }
                    }
                    //echo $sqlsetstring.$sqlwherestring."\n";
                   
                    $row++;
                    //for ($c=0; $c < $num; $c++) {
    //                    echo $data[$c] . "<br />\n";
    //                }
                
                }
            
            }
            catch(Exception $e)
            {
                return 'Errors occured processing updates: '.$e;
            }
            unset($link);
            fclose($fh);

          
 
            //open connection db
            
            //for each line item
                
                //update row in data table
               
            //next
            
            //close  connection 
            //clear variable for row data
            
            //close file
            
            //send notification of updates
            
            
        }
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
    
    class Users
    {
        function updateuser()
        {
            
        }
        function getuser($username)
        {
            //Include database connection details
        	require_once('config.php');
        	
        	//Array to store validation errors
        	$errmsg_arr = array();
        	
        	//Validation error flag
        	$errflag = false;
        	
        	//Connect to mysql server
        	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        	if(!$link) {
        		die('Failed to connect to server: ' . mysql_error());
        	}
        	
        	//Select database
        	$db = mysql_select_db(DB_DATABASE);
        	if(!$db) {
        		die("Unable to select database");
        	}
        	
        	//Function to sanitize values received from the form. Prevents SQL injection
        	function clean($str) {
        		$str = @trim($str);
        		if(get_magic_quotes_gpc()) {
        			$str = stripslashes($str);
        		}
        		return mysql_real_escape_string($str);
        	}
        	
        	//Sanitize the POST values
        	$login = clean($_POST['login']);
        	$password = clean($_POST['password']);
        	
        	//Input Validations
        	if($login == '') {
        		$errmsg_arr[] = 'Login ID missing';
        		$errflag = true;
        	}
        	if($password == '') {
        		$errmsg_arr[] = 'Password missing';
        		$errflag = true;
        	}
        	
        	//If there are input validations, redirect back to the login form
        	if($errflag) {
        		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        		session_write_close();
        		header("location: login-form.php");
        		exit();
        	}
        	
        	//Create query
        	$qry="SELECT ccid, firstname , lastname, active FROM members WHERE login='$login' AND passwd='".md5($_POST['password'])."'";
        	$result=mysql_query($qry);
        	
        	//Check whether the query was successful or not
        	if($result) {
        		if(mysql_num_rows($result) == 1) {
        			//Login Successful
        			session_regenerate_id();
        			$member = mysql_fetch_assoc($result);
        			$_SESSION['SESS_CC_ID'] = $member['ccid'];
        			$_SESSION['SESS_CC_NAME'] = $member['firstname']. ' '.$member['lastname'];
        			$_SESSION['SESS_CC_ACTIVE'] = $member['active'];
                    $_SESSION['SESS_MEMBER_ID'] = $member['ccid'].'_'.$member['firstname']. ' '.$member['lastname'].$member['passwd'];
        			session_write_close();
        			header("location: aasc-inventory-form.php");
        			exit();
        		}else {
        			//Login failed
        			header("location: login-failed.php");
        			exit();
        		}
        	}else {
        		die("Query failed");
    	}
        }
        function getusers()
        {
             //Include database connection details
        	require_once('config.php');
        	
        	//Array to store validation errors
        	$errmsg_arr = array();
        	
        	//Validation error flag
        	$errflag = false;
        	
        	//Connect to mysql server
        	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        	if(!$link) {
        		die('Failed to connect to server: ' . mysql_error());
        	}
        	
        	//Select database
        	$db = mysql_select_db(DB_DATABASE);
        	if(!$db) {
        		die("Unable to select database");
        	}
        	
        	//Function to sanitize values received from the form. Prevents SQL injection
        	function clean($str) {
        		$str = @trim($str);
        		if(get_magic_quotes_gpc()) {
        			$str = stripslashes($str);
        		}
        		return mysql_real_escape_string($str);
        	}
        	
        	//Sanitize the POST values
        	$login = clean($_POST['login']);
        	$password = clean($_POST['password']);
        	
        	//Input Validations
        	if($login == '') {
        		$errmsg_arr[] = 'Login ID missing';
        		$errflag = true;
        	}
        	if($password == '') {
        		$errmsg_arr[] = 'Password missing';
        		$errflag = true;
        	}
        	
        	//If there are input validations, redirect back to the login form
        	if($errflag) {
        		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        		session_write_close();
        		header("location: login-form.php");
        		exit();
        	}
        	
        	//Create query
        	$qry="SELECT ccid, firstname , lastname, active FROM members";
        	$result=mysql_query($qry);
        	
        	//Check whether the query was successful or not
        	if($result) {
        		if(mysql_num_rows($result) == 1) {
        			//Login Successful
        			session_regenerate_id();
        			$member = mysql_fetch_assoc($result);
        			$_SESSION['SESS_CC_ID'] = $member['ccid'];
        			$_SESSION['SESS_CC_NAME'] = $member['firstname']. ' '.$member['lastname'];
        			$_SESSION['SESS_CC_ACTIVE'] = $member['active'];
                    $_SESSION['SESS_MEMBER_ID'] = $member['ccid'].'_'.$member['firstname']. ' '.$member['lastname'].$member['passwd'];
        			session_write_close();
        			header("location: aasc-inventory-form.php");
        			exit();
        		}else {
        			//Login failed
        			header("location: login-failed.php");
        			exit();
        		}
        	}else {
        		die("Query failed");
    	   }
        }
        function GetClientAccountNumber($userid)
        {
             //Include database connection details
        	require_once('config.php');
        	
        	//Array to store validation errors
        	$errmsg_arr = array();
        	
        	//Validation error flag
        	$errflag = false;
        	
        	//Connect to mysql server
        	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        	if(!$link) {
        		die('Failed to connect to server: ' . mysql_error());
        	}
        	
        	//Select database
        	$db = mysql_select_db(DB_DATABASE);
        	if(!$db) {
        		die("Unable to select database");
        	}
            
            //Create query
        	$qry="SELECT cc_account_number FROM `client_companies` as t1 inner join members t2 on t1.cc_id = t2.ccid WHERE t2.login = '$userid'";
        	$result=mysql_query($qry);
        	
        	//Check whether the query was successful or not
        	if($result) {
        		if(mysql_num_rows($result) == 1) {
        			//Login Successful
        			session_regenerate_id();
        			$member = mysql_fetch_assoc($result);
        			
                    return $result['cc_account_number'];
                    
        			exit();
        		}else {
        			//Login failed
        			return 'error';
        			exit();
        		}
        	}else {
        		die("Query failed");
    	   }
            
            
        }
        
    }
function CreateStatesSelect()
    {
     $html_state_select = "<select tabindex='17' name='State' id='State'>
    02.<option value='' selected='selected'>Select a State</option>
    03.<option value='AL'>Alabama</option>
    04.<option value='AK'>Alaska</option>
    05.<option value='AZ'>Arizona</option>
    06.<option value='AR'>Arkansas</option>
    07.<option value='CA'>California</option>
    08.<option value='CO'>Colorado</option>
    09.<option value='CT'>Connecticut</option>
    10.<option value='DE'>Delaware</option>
    11.<option value='DC'>District Of Columbia</option>
    12.<option value='FL'>Florida</option>
    13.<option value='GA'>Georgia</option>
    14.<option value='HI'>Hawaii</option>
    15.<option value='ID'>Idaho</option>
    16.<option value='IL'>Illinois</option>
    17.<option value='IN'>Indiana</option>
    18.<option value='IA'>Iowa</option>
    19.<option value='KS'>Kansas</option>
    20.<option value='KY'>Kentucky</option>
    21.<option value='LA'>Louisiana</option>
    22.<option value='ME'>Maine</option>
    23.<option value='MD'>Maryland</option>
    24.<option value='MA'>Massachusetts</option>
    25.<option value='MI'>Michigan</option>
    26.<option value='MN'>Minnesota</option>
    27.<option value='MS'>Mississippi</option>
    28.<option value='MO'>Missouri</option>
    29.<option value='MT'>Montana</option>
    30.<option value='NE'>Nebraska</option>
    31.<option value='NV'>Nevada</option>
    32.<option value='NH'>New Hampshire</option>
    33.<option value='NJ'>New Jersey</option>
    34.<option value='NM'>New Mexico</option>
    35.<option value='NY'>New York</option>
    36.<option value='NC'>North Carolina</option>
    37.<option value='ND'>North Dakota</option>
    38.<option value='OH'>Ohio</option>
    39.<option value='OK'>Oklahoma</option>
    40.<option value='OR'>Oregon</option>
    41.<option value='PA'>Pennsylvania</option>
    42.<option value='RI'>Rhode Island</option>
    43.<option value='SC'>South Carolina</option>
    44.<option value='SD'>South Dakota</option>
    45.<option value='TN'>Tennessee</option>
    46.<option value='TX'>Texas</option>
    47.<option value='UT'>Utah</option>
    48.<option value='VT'>Vermont</option>
    49.<option value='VA'>Virginia</option>
    50.<option value='WA'>Washington</option>
    51.<option value='WV'>West Virginia</option>
    52.<option value='WI'>Wisconsin</option>
    53.<option value='WY'>Wyoming</option>
    54.</select>";
                                
    echo ($html_state_select);   
    }
    
 
    ?>