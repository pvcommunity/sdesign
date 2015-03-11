<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//Prevent the user visiting the logged in page if he/she is already logged in
if(isUserLoggedIn()) { 
     
    $title = check_user($loggedInUser->username);
    
    switch($title){
        case "Administrator": header("Location: account.php"); break;
        case "Student": header("Location: student.php"); break;
        case "Property": header("Location: landlord.php"); break;
    }
    die();
}

//Forms posted
if(!empty($_POST))
{
	$errors = array();
	$email = trim($_POST["o-email"]);
	//$username = trim($_POST["username"]);
	$displayname = trim($_POST["p-name"]);
        $username = strtolower(str_replace(" ","-",$displayname));
	$password = trim($_POST["password"]);
	$confirm_pass = trim($_POST["passwordc"]);
	$captcha = md5($_POST["captcha"]);
        //$gender = "";
        //$classification = "";
        $o_fname = trim($_POST["o-fname"]);
        $o_lname = trim($_POST["o-lname"]);
        $o_name = $o_fname." ".$o_lname;
        $type = trim($_POST["p-type"]);
        $addr1 = $_POST["addr1"];
        $addr2 = $_POST["addr2"];
        $address = $addr1."\n".$addr2;
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zipcode = $_POST["zipcode"];
        $e_name = "";// $_POST["emp-name"];
	
	
	if ($captcha != $_SESSION['captcha'])
	{
		$errors[] = lang("CAPTCHA_FAIL");
	}
	/*if(minMaxRange(5,25,$username))
	{
		$errors[] = lang("ACCOUNT_USER_CHAR_LIMIT",array(5,25));
	}
	if(!ctype_alnum($username)){
		$errors[] = lang("ACCOUNT_USER_INVALID_CHARACTERS");
	}
	if(minMaxRange(5,25,$displayname))
	{
		$errors[] = lang("ACCOUNT_DISPLAY_CHAR_LIMIT",array(5,25));
	}
	/*if(!ctype_alnum($displayname)){
		$errors[] = lang("ACCOUNT_DISPLAY_INVALID_CHARACTERS");
	}*/
	if(minMaxRange(8,50,$password) && minMaxRange(8,50,$confirm_pass))
	{
		$errors[] = lang("ACCOUNT_PASS_CHAR_LIMIT",array(8,50));
	}
	else if($password != $confirm_pass)
	{
		$errors[] = lang("ACCOUNT_PASS_MISMATCH");
	}
	/*if(!isValidEmail($email))
	{
		$errors[] = lang("ACCOUNT_INVALID_EMAIL");
	}*/
	//End data validation
	if(count($errors) == 0)
	{	
		//Construct a user object
		$user = new Property($username,$displayname,$password,$email,$type,$address,$city,$state,$zipcode,$o_name,$e_name);
		
		//Checking this flag tells us whether there were any errors such as possible data duplication occured
		if(!$user->status)
		{
			//if($user->username_taken) $errors[] = lang("ACCOUNT_USERNAME_IN_USE",array($username));
			//if($user->displayname_taken) $errors[] = lang("ACCOUNT_DISPLAYNAME_IN_USE",array($displayname));
			if($user->email_taken) 	  $errors[] = lang("ACCOUNT_EMAIL_IN_USE",array($email));		
		}
		else
		{
			//Attempt to add the user to the database, carry out finishing  tasks like emailing the user (if required)
			if(!$user->userCakeAddUser())
			{
				if($user->mail_failure) $errors[] = lang("MAIL_ERROR");
				if($user->sql_failure)  $errors[] = lang("SQL_ERROR");
			}
		}
	}
	if(count($errors) == 0) {
		$successes[] = $user->success;
	}
}

echo "
<title>Register</title>
<link rel='stylesheet' type='text/css' href='styles/Registration (2).css'</link> ";

require 'models/site-templates/top.php';

echo"
    <div id='main'><center>
<div class='container' id='container1'>
        <div class='row centered-form'>
            <div class='col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4'>
                <div class='panel panel-default' style='width:350px;'>
                    <div class='panel-heading'>
                        <h3 class='panel-title text-center'>Submit Registration Request</h3>
                    </div>
                     <div class='panel-body'>
                            <div class='form-group'>";
/*require_once("models/header.php");
echo "
<body>
<div id='wrapper'>
<div id='top'><div id='logo'></div></div>
<div id='content'>
<h1>UserCake</h1>
<h2>Register</h2>

<div id='left-nav'>";
include("left-nav.php");
echo "
</div>

<div id='main'>";*/
echo resultBlock($errors,$successes);

echo "
<div id='regbox'>
<form name='newUser' action='".$_SERVER['PHP_SELF']."' method='post'>

<fieldset id='owner_info' sytle='display:block;'>
<legend>On Behalf Of:</legend>
<p>
<label>Owner's First Name:</label>
<input type='text' name='o-fname' class='form-control input-sm' required/>
</p>
<p>
<label>Owner's Last Name:</label>
<input type='text' name='o-lname' class='form-control input-sm' required/>
</p>
<p>
<label>Owner's Email:</label>
<input type='email' name='o-email' class='form-control input-sm' required/>
</p>
</fieldset>

<!--<p>
<label>User Name:</label>
<input type='text' name='username' />
</p>-->
<p>
<label>Property Name:</label>
<input type='text' name='p-name' class='form-control input-sm' required/>
</p>
<p>
<label>Type of Property:</label>
<select name='p-type' class='form-control input-sm' required>
    <option value=''>Please Select a Type</option>
    <option value='apartment'>Apartment</option>
    <option value='condo'>Condo</option>
    <option value='house'>House</option>
    <option value='townhome'>Townhome</option>
</select>
</p>

<!--<p>
<label>Submitter's Name:</label>
<input type='text' name='emp-name' />
</p>-->
<p>
<label>Address Line 1:</label>
<input type='text' name='addr1' class='form-control input-sm' required/>
</p>
<p>
<label>Address Line 2:</label>
<input type-'text' name='addr2' class='form-control input-sm'/>
</p>
<p>
<label>City:</label>
<input type='text' name='city' class='form-control input-sm' required/>
</p>
<p>
<label>State:</label>
<input type='text' name='state' class='form-control input-sm' required/>
</p>
<p>
<label>Zipcode:</label>
<input type='number' name='zipcode' class='form-control input-sm' required/>
</p>
<br>
<label>Password:</label>
<input type='password' name='password' class='form-control input-sm' required/>
</p>
<p>
<label>Confirm:</label>
<input type='password' name='passwordc' class='form-control input-sm' required/>
</p>
<!--<p>
<label>Email:</label>
<input type='text' name='email' />
</p>-->
<!--<p>
<label>Submitter's Name:</label>
<input type='text' name='emp-name' />
</p>-->
<br>
<p>
<label>Security Code:</label>
<img src='models/captcha.php'>
</p>
<label>Enter Security Code:</label>
<input name='captcha' type='text'class='form-control input-sm' required>
</p>
<label>&nbsp;<br>
<input type='submit' value='Register'/>
</p>

</form>
</div>

</div>
<div id='bottom'></div>
</div>
</body>
</html>";
?>
