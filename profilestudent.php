<?php
require_once('models/config.php');
if (!securePage($_SERVER['PHP_SELF'])){die();}


echo "
<!DOCTYPE html>
<html lang='en-US'>
<head>

<title>PV Student Community</title>
<style type="text/css">
body{
background-image:url(https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSvqrtMblxZERcRiBWfH8v0u_DxoB0P6GWJrd-A5mn_7lz9I_IuAA) ;
background-repeat:repeat;
background-color:#40113f;
font-family:"lucida sans unicode";
font-size:11px;
line-height:16px;
text-align:justify;
}

#container{
position:absolute;
left:50%;
margin-left:-392px;
top:0px;
width:775px;
background-image:url(http://cbimg6.com/layouts/10/07/36366ac.png);
background-repeat:repeat;
overflow:auto;
}

.header{
margin-top:40px;
text-align:center;
}

.navigation{
width:690px;
padding:5px;
margin-left:40px;
margin-top:40px;
margin-bottom:20px;
text-align:center;
}

.title{
font-family:"century gothic";
font-size:23px;
font-weight:bold;
color:#40113f;
display:block;
text-align:left;
margin-left:140px;
margin-top:5px;}

.sidebar{
float:left;
margin-left:40px;
width:200px;
}

.main{
float:right;
margin-right:50px;
_margin-right:30px;
width:460px;
}

a.nav, a.nav:active, a.nav:visited, a.nav:link{
color:#40113f;
text-decoration:none;
font-family:"century gothic";
font-weight:bold;
font-size:17px;
padding-right:70px;
}

a.nav:hover{
color:#785343;
text-decoration:none;
font-family:"century gothic";
font-weight:bold;
font-size:17px;
padding-right:70px;
}

a.nav2, a.nav2:active, a.nav2:visited, a.nav2:link{
color:#40113f;
text-decoration:none;
font-family:"century gothic";
font-weight:bold;
font-size:17px;
}

a.nav2:hover{
color:#785343;
text-decoration:none;
font-family:"century gothic";
font-weight:bold;
font-size:17px;
}

a, a:active, a:visited, a:link{
color:#dfc326;
text-decoration:none;
}

a:hover{
color:#dfc326;
text-decoration:none;
}

b, strong{
color:#dfc326;
text-decoration:none;
font-family:"century gothic";
font-size:11px;
}

i, em{
color:#dfc326;
}

u{
border-bottom:1px dotted #dfc326;
text-decoration:none;
}


h1{
font-family:"century gothic";
font-size:22px;
text-align:left;
letter-spacing:0px;
color:#40113f;
border-bottom:2px dotted #dfc326;
padding-top:10px;
margin-bottom:5px;
padding-bottom:4px;
}

</style>
</head>

<body>

<div id="container">

<div class="header">
<img src="C:\Users\Samsung\Desktop\profile.jpg">
</div>

<div class="navigation">
<a class="nav" href="C:\Users\Samsung\Desktop\sdesign\index.php">Home</a>
<a class="nav" href="C:\Users\Samsung\Desktop\sdesign\about.php">About</a>
<a class="nav" href="C:\Users\Samsung\Desktop\sdesign\suggestedusers.php">Suggested Users</a>
<a class="nav" href="C:\Users\Samsung\Desktop\sdesign\FAQs.php">FAQs</a>

</div>

<div class="sidebar">

<h1>Hello<strong><big>$loggedInUser->displayname</big></strong></h1>
		<br>
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
		<a href=#><img src='styles/images/message.jpg' style='height:20px; width=30px'></a>       


<h1>Personality Type</h1>
*EXTRACTED INFORMATION*
</div>
<br><br>


<div class="main">
<h1>Preferences</h1>
*EXTRACTED INFORMATION*
<br><br>
<br><br>
<br><br>


<h1>Suggested Roommates</h1>
*CALCULATED INFO*
<br><br>
<br><br>
<br><br>


<h1>Announcements</h1>
*EXTRACTED INFO FROM LANDLORDS PAGE*
<br>
"Pictures with links for enlargement"
<br><br>
<br><br>
<br><br>
<br><br>




</div>



</body>
</html>
</html> ";
?>