<?php
require_once('models/config.php');
if (!securePage($_SERVER['PHP_SELF'])){die();}


echo "
<!DOCTYPE html>
<html lang='en-US'>
<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content='STUDENTPROFILE'>
    <meta name='author' content='LISA P'>

	<title>Student Profile</title>

	<link rel='stylesheet' type='text/css' href='styles/TestStylesheet.css'</link>
	<link rel='stylesheet' type='text/css' href='styles/AssembledStylesheet.css'</link>

</head>



<!-- TITLE HERE -->
<div id='wrapper'>
	<div id='header'>
		<div id='logo'>
                   
                    <br>
                    <br>
                    <br>
			<center><h2> Welcome To </h2>
			 <h1><a href='index.php'>PV Student Community</a></h1></center>
                   
                        
		</div>
		<br>
	</div>
	<!-- MENU HERE -->
	<div id='menu'>
		<ul>
			<li class='current_page_item'><a href='index.php'>Home</a></li>
                        <li><a href='about.php'>About</a></li>
                        <li class ='last'><a href='faqs.php'>Question/Concerns</a></li>
						<li><a href='logout-1.php'>Logout</a></li>
		</ul>
	</div>
    
        
        <!-- COLUMNS BEGIN HERE -->
	<div id='wrap'>
	<div id='two-columns'>
		<div class='content'>
				<div id='wrap'>
	
		<br>
		<div class='name'>
		Hello <strong><big>$loggedInUser->displayname</big></strong>
		<br><br>
		<img src='styles/images/blank_avatar.jpg'> 
		<br>                  
		<a href=#><small><u>edit picture</u></small></a>
		<br>
		Gender: $loggedInUser->gender
		<br>
		Classification: $loggedInUser->classification
		<br>
		Major:
		<br>
		<i>'self statement'</i>
		<br>
		<br>
		<a href=#><img src='styles/images/message.jpg' style='height:20px; width=30px'></a>       
	</div>
	
					</li>
				</ul>
			</div>
			<div id='column2'>
				<div class='preferences'>
		<center><strong><big>Preferences</big></strong></center>
		<br>
		'extracted information'
		<br>
	</div>


	
			</div>
			<div id='column3'>
				<div class='suggestedroommates'>
		<center><strong><big>Suggested Roommates</big></strong></center>
		<br>
		'calculated info'
	</div>       

	<div class='personality'>
		<center><strong><big>Personality Type</strong>
		<br>
		'extracted personality name'
		</big>
		</center>   
		<br>
		'personality description'
		<br> 
	</div>
	
	<div class='personality'>
		<center><strong><big>Announcements</strong>
		<br>
		'extracted the landlord's page'
		</big>
		</center>   
		<br>
		'pictures with attached links for enlargement as the marquee scroll them'
		<br> 
	</div>
			</div>
			
		</div>
	</div>

    </div>
	<div id='footer'>
            <p> All rights reserved. </p>
	</div>
	
</div>
</html> ";
?>