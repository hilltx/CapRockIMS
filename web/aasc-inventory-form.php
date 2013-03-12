<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<script src="../js/jquery.maskedinput.js"></script>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="caprockims.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />

<script src="scripts/jquery.validate.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>AASC Inventory Form</title>

<style>
    label.valid {
    width: 24px;
    height: 24px;
    background: url(assets/img/valid.png) center center no-repeat;
    display: inline-block;
    text-indent: -9999px;
    }
    label.error {
    font-weight: bold;
    color: red;
    padding: 2px 1px;
    margin-top: 2px;
    }
    
   .styled-select select {
   background: transparent;
   width: 268px;
   padding: 0px;
   font-size: 12px;
   font-weight: bold;
   line-height: 1;
   border: 0;
   border-radius: 0;
   height: 25px;
   -webkit-appearance: none;
   }
   
   .styled-select {
   width: 240px;
   height: 20px;
   border-radius: 0;
   overflow: hidden;
   background: url(images/down_arrow_select.jpg) no-repeat right #ddd;
   border: 1px solid #ccc;
   }
 </style>
 
 
</head>
<body>

<div id="header-wrapper">
<?php include ('header.php') ; ?>
</div>

<div id="wrapper">
<?php
    include ('scripts/utils.php');
    //check that user is logged in
	require_once('scripts/auth.php');
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {?>
		 <ul class="err">
		<?php
        foreach($_SESSION['ERRMSG_ARR'] as $msg) {
            ?>
		<li><?php $msg ?></li> 
		<?php } ?>
		</ul>
		<?php unset($_SESSION['ERRMSG_ARR']);} ?>

<div id="page">

<?php include ('logo.php');?>
                
<form id="aasc_inv_form" name ="aasc_inv_form" method="post" >
  <input type="hidden" id="cc_id" name="cc_id" value="<?php echo htmlspecialchars($_SESSION['SESS_CC_ID']) ?>" />
  <input type='hidden' name='txtsubmit' value="txtsubmit" />
             
<center> 
<table>
    <tr>

      <td><label class="control-group">* Required</label></td><td></td>
      
      <td><b>* Location Type:</b></td>
      <td>
      <div class="styled-select">
      <select id="locationType" tabindex="12" name="locationType"> 
             <option value='' selected='selected'>Select a Type</option>
             <option  value="1">Business</option>
             <option  value="2">Residence</option>
             <option  value="3">Marshalling Yard</option>
             <option  value="4">Auction</option>
             <option  value="5">Dealership</option>
             <option  value="6">Impound Lot</option>
             <option  value="7">Repo Agent</option>
             <option  value="8">Body Shop</option>
             <option  value="9">Repair Shop</option>
             <option  value="10">Government</option>
             <option  value="11">Tow Company</option>
             <option  value="12">Street</option>
             <option  value="13">Unknown</option>
      </select>
      </div>
      </td>
       <tr> <td><b>*VIN:</b></td>
        <td><input tabindex="1" name="VIN" type="text" maxlength="17" class="text100Percent" id="VIN"  /></td>
        
        <td><b>* Location Name:</b></td>
      <td><input tabindex="13" name="locationname" type="text" class="text100Percent" id="locationname" maxlength="50" /></td></tr>
    </tr>
     
   
      <!--BEGIN VIN YEAR MAKE MODEL -->
     <tr>
     
       
         <td><b>*Year:</b></td>
      <td><input tabindex="2" name="Year" type="text" class="text100Percent" id="Year" maxlength="4" /></td>
      
       <td><b>* Location Address 1:</b></td>
      <td><input tabindex="14" name="locationaddress1" type="text" class="text100Percent" id="locationaddress1" maxlength="50" /></td>
      
     </tr> 
     
     <tr>
     
    
      <td><b>*Make:</b></td>
      <td><input tabindex="3" name="Make" type="text"  class="text100Percent" id="Make" maxlength="30" /></td>
      
      <td><b>&nbsp;&nbsp; Location Address 2:</b></td>
      <td><input tabindex="15" name="locationaddress2" type="text" class="text100Percent" id="locationaddress2" maxlength="50" /></td>
      
     </tr> 
    <tr>
    
     
      <td><b>*Model:</b></td>
        <td><input tabindex="4" name="Model" type="text"  class="text100Percent" id="Model" maxlength="30"  /></td>
        
      <td><b>* Location City:</b></td>
      <td><input tabindex="16" name="locationaddresscity" type="text" class="text100Percent" id="locationaddresscity" maxlength="50"/></td>
      
    </tr>  
    <tr>
        
        
        <td><b>*Account Number:</b></td>
      <td><input id="clientaccountnumber" tabindex="5" name="clientaccountnumber" type="text"  class="text100Percent"  maxlength="25" /></td><td><b>* Location State:</b></td>
        <td><div class="styled-select"><?php CreateStatesSelect() ?> </div></td>
      
        
    </tr>
    <tr>
     <td><b>*Customer First Name:</b></td>
     <td><input tabindex="6" name="cust_first_name" id="cust_first_name" class="text100Percent" type="text" maxlength="35"/></td>
     
     <td><b>*Location Zip:</b></td>
     <td><input tabindex="18" name="locationaddresszip" type="text" class="text100Percent" id="locationaddresszip" maxlength="5"/></td>
      
      
    </tr>
    <tr>  
      <td><b>*Customer Last Name:</b></td>
      <td><input tabindex="7" name="cust_last_name" id="cust_last_name" class="text100Percent" type="text" maxlength="35"/></td>
        
      <td><b>&nbsp;&nbsp;Contact Name:</b></td>
      <td><input tabindex="19" name="contactperson1" type="text" class="text100Percent" id="contactperson1" maxlength="50"/></td>
      
      </tr>
     
      <td><div class="styled-select"><select id="pickdropdate"><option value="1">Pick Up Date</option><option value="2">Drop Off Date</option></select></div></td>
      <td><input tabindex="8" name="pickupdate" type="text" readonly="readonly" class="text100Percent" id="pickupdate" />
          <input tabindex="9" name="dropoffdate" type="text" readonly="readonly" class="text100Percent" id="dropoffdate" /></td>
       
      <td><b>&nbsp;&nbsp;*Contact Phone:</b></td>
     
      <td><input tabindex="20" name="phone1" type="text" class="text100Percent" id="phone1" maxlength="10" /></td>
      
     <tr>
     
     <td><b>*Legal Sale Date:</b></td>
      <td><input tabindex="10" name="legalsaledate" type="text" readonly="readonly" class="text100Percent" id="legalsaledate" /></td>
      <td><b>&nbsp;&nbsp;*Contact Fax:</b></td>
      <td><input tabindex="21" name="fax1" type="text" class="text100Percent" id="fax1" maxlength="10" /></td>
      
       
     </tr> 
 
      <tr> 
      
     <tr rowspan="2"><td><b>Vehicle is inoperable:</b></td>
      <td><input tabindex="11" name="vehicleisoperable" type="checkbox"  id="vehicleisoperable" /></td>
     <td><b>&nbsp;&nbsp;Contact Email:</b></td>
      <td><input tabindex="22" name="email1" type="text" class="text100Percent" id="email1" maxlength="60"/></td>
      <tr>
      
       <td><b>&nbsp;&nbsp;Pickup or Drop Off Note:</b></td>
      <td colspan="3"> <input tabindex="23" name="pickupordropoffnote"  type="textarea" class="text100Percent" id="pickupordropoffnote" maxlength="255" /></td>
    </tr>
      
      </tr>
    
     </tr>

 <tr>
  
  <td colspan="4" align="center">
    
 </td>
  
  </tr>
   </table>
  
  </center>

 </form>
 </div> <!--Page-->
</div> <!--wrapper-->

<div id="footer-bg">
<center>

<div id="dialog" title="IMS Item Added"><img src="images/accepted.png" />"Inventory Item Created</div>
   <a id="save" href=""  class="button-style" title="Save" >Save</a>
   <a id="back" href="client-landing-form.php" class="button-style" >Back</a>
   
<?php 
 
 if( isset($_GET['msg'])  ) {
	   if($_GET['msg']=="AutoIMSItemAdded")
       {$msg = "AutoIMS Item Added.";} ?>
		<div id="msg" class="msg">';
  			<?php $msg;?>
	
		</div>
		<?php unset($_GET['msg']);}?> 

</center>
</div>
<center>
<?php 
    include("footer.php")?>
</center>

<script>

(function($){
$.fn.validate = function(){  //input validation plugin
        
          if(this.val().length==0)
          {
            $(this).css('background-color', 'red');
            $(this).focus();
            $("#msg").val = $(this).attr("name") +  " Is a Required Field";
            return false;
          }else
          {
            $(this).css('background-color', 'white');
            return true;
          }
      }
}) (jQuery);
   $(document).ready(function(){
    
    $( "#dialog" ).dialog({ autoOpen: false });
    $( "#dialog" ).dialog( "option", "buttons", [ { text: "Ok", click: function() { 
        $( this ).dialog( "close" ); 
        $('#aasc_inv_form').each (function(){ this.reset();});
        $('#VIN').focus();
    
    } } ] );
         
     //setup input masks**************      
     $("#phone1").mask('(999) 999-9999');
     $("#fax1").mask('(999) 999-9999');    
     $("#Year").mask('9999'); 
     $("#locationaddresszip").mask('99999');
     // end input masks ***************
     
     //$('#result').hide();
     $('#dropoffdate').hide();
     
     $('td').attr('align', 'left');
     $('td').css('padding','5px');
     
   
     $("#save").click(function(e){
            try{  
                var retval = true;
                if (retval==true)
                    retval = $('#VIN').validate();
                if (retval==true)
                    retval = $('#Year').validate();
                if (retval==true)    
                    retval = $('#Make').validate();
                if (retval==true)    
                    retval = $('#Model').validate();
                if (retval==true)
                    retval = $('#clientaccountnumber').validate();
                if (retval==true)    
                    retval = $('#cust_first_name').validate();
                if (retval==true)    
                    retval = $('#cust_last_name').validate(); 
                if (retval==true)
                {
                    if (($("#pickdropdate").val()=="1") )   
                    {
                        //alert('hello')
                        $('#pickupdate').show();
                        $('#dropoffdate').hide();
                        $('#pickupdate').validate();
                       
                     }
                     else{
                        retval==true
                        $('#pickupdate').css('background-color','white')
                        $('#dropoffdate').css('background-color','white')
                     }
                }
                if (retval==true)    
                    retval = $('#legalsaledate').validate();    
                if (retval==true)    
                    retval = $('#locationType').validate();
                if (retval==true)    
                    retval = $('#locationname').validate();
                if (retval==true)    
                    retval = $('#locationaddress1').validate();
                if (retval==true)    
                    retval = $('#locationaddresscity').validate();
                if (retval==true)
                    retval = $('#State').validate();
                if (retval==true)    
                    retval = $('#locationaddresszip').validate();
                if (retval==true)    
                    retval = $('#phone1').validate();
                if (retval==true)    
                    retval = $('#fax1').validate();
 
                e.preventDefault();
                if(retval==true) {//save inventory
                    var url = "scripts/aasc-inventory-exec.php"; // the script where you handle the form input.
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $("#aasc_inv_form").serialize(), // serializes the form's elements.
                        success: function(data)
                        {
                           //alert(data);
                            //$("#aasc_inv_form").hide();
                            $("#dialog" ).dialog( "open" );// show response from the php script.
                        },
                        error: function (xhr, ajaxOptions, thrownError) 
                        {
                            alert(xhr.status);
                            alert(thrownError);
                        }
                        
                   });
                    
                    return false; // avoid to execute the actual submit of the form.
               }

             }
             catch(exc) {
                alert(exc);
             }
                
          
          });
    
       
      $("table").css("position","relative").css("top","-150px").css("left","100px");  
  
   
      $("#header-wrapper").css("width","100%");
      $("#header").css("width","100%");
      $("#menu").css("width","100%");
       $("#logo_a").css("width","200px").css("height","200px");
       
       $("#pickupdate").datepicker();
       $("#dropoffdate").datepicker();
       $("#legalsaledate").datepicker();
    
       $('#back').css("width","50px");
       $('#save').css("width","50px");
       $('#home').css("width","50px");
       $('#logout_btn').css("width","50px"); 
       
     
        $('#back_btn').click(function() {
            window.location = "client-landing-form.php" ;
        });
        
     
       //both dates are not required, but one of them have to be set
        $('#pickdropdate').change(function(){
            if ($('#pickdropdate').val()=='1'){
                $('#pickupdate').show();
                $('#dropoffdate').hide();
            }
            if ($('pickdropdate').val = '2'){
                $('#dropoffdate').show();
                $('#pickupdate').hide();
            }
        })
     

       
       $("li").css("width","150px");
       $("#home").css("width","100%");
       
       
        
       });
</script>
   
</body>
</html>



