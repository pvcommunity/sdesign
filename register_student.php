<html>
<body>

<div id='top'>

<div id='content'>

<!--<div id='left-nav'>-->
<title>Register</title>
<link rel='stylesheet' type='text/css' href='styles/Registration (2).css'</link>

<div class='container'>
<div id='wrapper'>
    <div id='logo'>
       
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                      <center><h2><a href='#'>PV Student Community</a></h2></center>       
		</div>
    <br>
    <br>
    <br>
    <br>
 
    <div id='menu'>
		<ul>
                    <li><a href='index.php'>Home</a></li>
                        <li class = 'last'><a href='login.php'>Login</a></li>
		</ul>
	</div>

 <div id='main'><center>
<div class='container' id='container1'>
        <div class='row centered-form'>
            <div class='col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                        <h3 class='panel-title text-center'>Submit Registration Request</h3>
                    </div>
                     <div class='panel-body'>
                            <div class='form-group'>





<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//Prevent the user visiting the logged in page if he/she is already logged in
if(isUserLoggedIn()) { header("Location: account.php"); die(); }

//Forms posted
if(!empty($_POST))
{
	$errors = array();
	$email = trim($_POST["email"]);
	list($username, $domain) = explode("@", $email);
	$check_email = strpos($email, $domain);
	//$username = trim($_POST["username"]);
	//$classification = isset($_POST["classification"]) ? $_POST["classification"] : ""; echo $classification;
	//$gender = isset($_POST["gender"]) ? $_POST["gender"] : ""; echo $gender;
	/*if(isset($_POST['submit'])){
		$gender = $_POST['gender'];
		$classification = $_POST['classification'];
	}*/
	$first_name = trim($_POST["firstname"]);
	$last_name = trim($_POST["lastname"]);
	$displayname = $first_name." ".$last_name;
        $gender = $_POST['gender'];
        $classification = $_POST['classification'];
	$password = trim($_POST["password"]);
	$confirm_pass = trim($_POST["passwordc"]);
	$captcha = md5($_POST["captcha"]);
	/*$type = "";
	$address = "";
	$city = "";
	$state = "";
	$zipcode = 0;*/
 

	
	if ($captcha != $_SESSION['captcha'])
	{
		$errors[] = lang("CAPTCHA_FAIL");
	}
	if(minMaxRange(5,25,$username))
	{
		$errors[] = lang("ACCOUNT_USER_CHAR_LIMIT",array(5,25));
	}
	if(!ctype_alnum($username)){
		$errors[] = lang("ACCOUNT_USER_INVALID_CHARACTERS");
	}
	/*if(minMaxRange(5,25,$displayname))
	{
		$errors[] = lang("ACCOUNT_DISPLAY_CHAR_LIMIT",array(5,25));
	}
	if(!ctype_alnum($displayname)){
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
	if(!isValidEmail($email))
	{
		$errors[] = lang("ACCOUNT_INVALID_EMAIL");
	}
	//End data validation
	if(count($errors) == 0)
	{	
               $user = new Student($username,$displayname,$gender,$password,$classification,$email);
		//Construct a user object
		
		
		//Checking this flag tells us whether there were any errors such as possible data duplication occured
		if(!$user->status)
		{
			if($user->username_taken) $errors[] = lang("ACCOUNT_USERNAME_IN_USE",array($username));
			if($user->displayname_taken) $errors[] = lang("ACCOUNT_DISPLAYNAME_IN_USE",array($displayname));
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
                echo "Congrats! You are now registered!";
	}
}





//echo "<div id='left-nav'>";

//include("left-nav.php");






echo resultBlock($errors,$successes);

echo "
<div id='regbox'>



<form name='newUser' action='".$_SERVER['PHP_SELF']."' method='post'>

<p>
<label>First Name:</label>
<input type='text' name='firstname' class='form-control input-sm' required/>
</p>
<p>
<label>Last Name:</label>
<input type='text' name='lastname' class='form-control input-sm' required/>
</p>
<!--<p>
<label>User Name:</label>
<input type='text' name='username' />
</p>-->
<!--<p>
<label>Display Name:</label>
<input type='text' name='displayname' />
</p>-->
<p>
<label>Gender:</label>
<select id ='gender' class='form-control input-sm' required>
    <option value=''>Select a Gender</option>
   <option value='F'>Female</option>
    <option value='M'>Male</option>
</select>
</p>
<p>
<label>Classification:</label>
<select id='classification' class='form-control input-sm' required>
    <option value=''>Select a Classification</option>
    <option value='Fr'>Freshman</option>
    <option value='So'>Sophomore</option>
    <option value='Ju'>Junior</option>
    <option value='Se'>Senior</option>
    <option value='Gr'>Grad Student</option>
</select>
<p>
<label>Password:</label>
<input type='password' name='password' class='form-control input-sm' required/>
</p>
<p>
<label>Confirm:</label>
<input type='password' name='passwordc' class='form-control input-sm' required/>
</p>
<p>
<label>Email:</label>
<input type='text' name='email' class='form-control input-sm' required/>
</p>
<p>
<label>Security Code:</label>
<img src='models/captcha.php'>
</p>
<label>Enter Security Code:</label>
<input name='captcha' type='text' class='form-control input-sm' required>
</p>
<label>&nbsp;<br>
<input type='submit' name='submit' value='Register'/>
</p>

</form>
</div>

</div>
<div id='bottom'></div>
</div>
</div>
</div>
</body>
</html>";
?>
