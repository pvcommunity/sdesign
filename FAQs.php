<?php
echo "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>

<center> <link rel='stylesheet' type='text/css' href='styles/FAQs.css'</link>

<!-- jQuery -->
    <script src='js/jquery.js'></script>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
</head>

<body>

<div class='container'>
<div id='wrapper'> 
    <div id='logo'>
       
                  
                    <br>
                    <br>
                    <br>
                      <center><h1><a href='#'>PV Student Community</a></h1></center>       
					<br>
					<br>
                    <br>
</div>
	<div id='menu'>
		<ul>
			<li class='current_page_item'><a href='index.php'>Home</a></li>
			<li><a href='login.php'>Login</a></li>
			<li class ='last'><a href=#>Question/Concerns</a></li>
		</ul>
	</div>
	<center>
			<br>
			<img src='images/FAQs.png'>
	
	
<!-- QUESTIONS -->
<!--Questions Style-->

<style>
.content
{
	color: #ffffff;
}
.faq {	
	background: #3f194a;
	font-size: 1.6em;
	
}

.label {
	background: white;
	
}

</style>


<!-- Actual Questions -->

<div class='faq'>
	<div id='first' class='label'>
		<a href=#1>Why Can't I Register?</a>
	</div>
	<div class='content'>
		<a name='1'><font color=white>Only Students are able to register using their @pvamu.edu email addresses.</font></a>
	</div>
</div>



<div class='faq'>
	<div id='second' class='label'>
		<a href=#2>Are the properties only on campus?</a>
	</div>
	<div class='content'>
		<a name='2'><font color='white'>The properties are properties in the entire Prairie View area, not just on campus.</a></font>
	</div>
</div>



<div class='faq'>
	<div id='third' class='label'>
		<a href=#3>How can I change my profile picture?</a>
	</div>
	<div class='content'>
		<a name='3'><font color='white'>On your student website, click the edit profile picture link that is located under the current profile picture</a></font>
	</div>
</div>

<div class='faq'>
	<div id='fourth' class='label'>
		<a href=#4>What does my suggested users section on my profile mean?</a>
	</div>
	<div class='content'>
		<a name='4'><font color='white'>The suggested users are based on your likes and these are the individuals around you with like personalities and are possible roommate candidates.</a></font>
	</div>
</div>

<div class='faq'>
	<div id='fifth' class='label'>
		<a href=#5>Am I able to retake my personality quiz because I don't think that my personality answer is correct?</a>
	</div>
	<div class='content'>
		<a name='5'><font color='white'>There are only two times available to take the personality quiz, but its best not to.</a></font>
	</div>
</div>

<div class='faq'>
	<div id='sixth' class='label'>
		<a href=#6>How can I contact the landlord properties?</a>
	</div>
	<div class='content'>
		<a name='6'><font color='white'>You can contact them by visiting their profiles' contact information once you click on the desired property from your home page.</a></font>
	</div>
</div>

<div class='faq'>
	<div id='seven' class='label'>
		<a href=#7>What does my personality quiz results mean?</a>
	</div>
	<div class='content'>
		<a name='7'><font color='white'>Once on your personal profile, you can view the description of your personality result.</a></font>
	</div>
</div>

<div class='faq'>
	<div id='eighth' class='label'>
		<a href=#8>Can I use this website on my phone and find it fully functional?</a>
	</div>
	<div class='content'>
		<a name='8'><font color='white'>Indeed you can. Just visit the website from a mobile browser and you will be redirected to the mobile version of the website.</a></font>
	</div>
</div>

<div class='faq'>
	<div id='tenth' class='label'>
		<a href=#9>Is this service free?</a>
	</div>
	<div class='content'>
		<a name='9'><font color='white'>It is indeed free to use.</a></font>
	</div>
</div>

	</center>
	
 </div>
</div>
</div>
<!-- /.container -->

	


<!-- SCRIPT FOR QUESTIONS -->
<script>
	$('.content').hide();
	$('.label').click(function()
	{
	
		if ($('.content').is(':visible'))
		{
		$('.content').hide();
		}
		else
		$('.content').show();
	
		$('.content').hide(); 
		$(this).parent().children('.content').toggle();
	});
	
</script>




   <footer>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <p>Copyright &copy; PV Student Community 2014</p>
                </div>
            </div>
        </div>
    </footer>

    

    <!-- Bootstrap Core JavaScript 
    <script src='js/bootstrap.min.js'></script>-->
</center>
</body>
</html> ";
?>