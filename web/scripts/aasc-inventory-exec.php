<?php
//var_dump($_POST);
//exit();
CreateAASCInventoryItem();


 function CreateAASCInventoryItem()
  {
    
    
        include 'utils.php';
        $formData  = new cAASCInventory();
        $formData->ClientAccountNumber = $_POST['clientaccountnumber'];
        $formData->VIN = strtoupper($_POST['VIN']);
        
        $formData->ModelYear = $_POST['Year'];
        $formData->Make = strtoupper($_POST['Make']);
        $formData->Model = strtoupper($_POST['Model']);
        $formData->ClientField1 = strtoupper($_POST['cust_first_name']);
        $formData->ClientField2 = strtoupper($_POST['cust_last_name']);
  
        //$formData->AuctionID = $_POST['auctionid'];
        if ($_POST['pickupdate']==null){
            $formData->PickupDate = null;
        }
        else
        {
            $formData->PickupDate = date("Y-m-d",strtotime($_POST['pickupdate']));
        }
        if ($_POST['dropoffdate']==null){
            $formData->DropOffDate = null;
        }
        else{
            $formData->DropOffDate = date("Y-m-d",strtotime($_POST['dropoffdate']));
        }
         //get secondary client
        $formData->SecondaryClient =  strtoupper ($formData->GetClientName($_POST['cc_id']).'-'.$_POST['cust_first_name'].' '.$_POST['cust_last_name']);
        
        //$formData->SecondaryClient = "NA";
        $formData->LocationType = $_POST['locationType'];
        $formData->LocationName = strtoupper ($_POST['locationname']);
        $formData->locationaddress1 = strtoupper ($_POST['locationaddress1']);
        $formData->locationaddress2 = strtoupper ($_POST['locationaddress2']);
        $formData->LocationCity = strtoupper ($_POST['locationaddresscity']);
        $formData->LocationState = $_POST['State'];
        $formData->LocationZip = $_POST['locationaddresszip'];
        $formData->ContactPerson1=strtoupper($_POST['contactperson1']);
       // $formData->ContactPerson2=$_POST['contactperson2'];
        $formData->Phone1=$_POST['phone1'];
        //$formData->Phone2=$_POST['phone2'];
        $formData->Fax1=$_POST['fax1'];
        $formData->Email1=$_POST['email1'];    
        $formData->LegalSaleDate = date("Y-m-d",strtotime($_POST['legalsaledate']));;
        
        
        if (isset($_POST['vehicleisoperable']))
        {
            $operable = '1';
        }
        else
        {
            $operable = '0';
        }
        $formData->VehicleIsOperable=$operable;
        $formData->PickupOrDropOffNote=$_POST['pickupordropoffnote'];
        //$formData->CC_ID = $_POST['cc_id'];
        $formData->CC_ID = $_POST['cc_id'];
        //var_dump($formData);
        //exit();
        echo $results = $formData->add();

   
   // $oInventory->add();
    
    }

?>