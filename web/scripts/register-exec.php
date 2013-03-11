<?php
//var_dump($_POST);
    
    //exit();
    //Start session
	//session_start();
	
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
    $ccid = clean($_POST['client_companies']);
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$login = clean($_POST['login']);
	$password = clean($_POST['password']);
	$cpassword = clean($_POST['cpassword']);
    if ($_POST['activeuser']=='on')
    {
        $activeuser = 1;
    }
    else
    {
        $activeuser=0;
    }
 
	//Input Validations
	if($fname == '') {
	    header("location: ../register-form.php?err=First name missing.");
        exit();
	}
	if($lname == '') {
		header("location: ../register-form.php?err=Last name missing.");
        exit();
	}
	if($login == '') {
	    header("location: ../register-form.php?err=Login ID missing.");
        exit();
	}
	if($password == '') {
	    header("location: ../register-form.php?err=Password missing.");
        exit();
	}
	if($cpassword == '') {
	    header("location: ../register-form.php?err=Confirm password missing.");
        exit();
	}
	if( strcmp($password, $cpassword) != 0 ) {
		header("location: ../register-form.php?err=Passwords do not match.");
        exit();
       
	}
	
	//Check for duplicate login ID
	if($login != '') {
		$qry = "SELECT * FROM members WHERE login='$login'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				header("location: ../register-form.php?err=Login already in use.");
                exit();
			}
			@mysql_free_result($result);
		}
		else {
		  
			die("Query failed");
		}
	}
	
//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../register-form.php?err=".$_SESSION['ERRMSG_ARR']);
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO members(ccid,firstname, lastname, login, passwd, active) VALUES('$ccid','$fname','$lname','$login','".md5($_POST['password'])."','$activeuser')";
    //echo $qry;
	
    $result = @mysql_query($qry);
	//echo($result);
    
	//Check whether the query was successful or not
	if($result) {
		header("location: ../register-form.php?msg=UserAdded");
		exit();
	}else {
	   
		die("Query failed");
	}
?>