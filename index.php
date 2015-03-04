<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
//require_once("models/header.php");
echo "
<title>Home</title>
<link rel='stylesheet' type='text/css' href='styles/AssembledStylesheet.css'</link>";

echo "
<!-- TITLE HERE -->
<div id='wrapper'>
<p><a href='registration-select.php'>Register</a> | <a href='login.php'>Login</a></p>
	<div id='header'>
		<div id='logo'>
                    <h1> </h1>
                    <br>
                    <br>
                    <br>
			 <h1><a href='#'>PV Student Community</a></h1>

                   
                        
		</div>
	</div>
	<!-- MENU HERE -->
	<div id='menu'>
		<ul>
			<li class='current_page_item'><a href='index.php'>Home</a></li>
                        <li><a href='login.php'>Login</a></li>
                        <li><a href='about.php'>About</a></li>
                        <li class ='last'><a href='FAQs.php'>Question/Concerns</a></li>
		</ul>
	</div>
        <!-- BANNER IMAGE HERE -->
        <div id='banner'><img src='styles/images/PVBanner.jpg' width='1100' height='450' alt='' /></div>
        
        <!-- COLUMNS BEGIN HERE -->
	<div id='three-columns'>
		<div class='content'>
			<div id='column1'>
				<h2>Participating Properties</h2>
				<ul class='list-style1'>
					<li class='first'> <!-- EDIT HERE -->
						<big> Scenes 1, 2, 3, & 6 <br>
                                                The Look <br>
                                                SideBrook <br>
                                                SideCreek <br>
                                                LandingBrooks <br>
                                                Monopoly Homes <br>
                                                Panther Town Homes 
                                        </big>
					</li>
				</ul>
			</div>
			<div id='column2'>
				<h2>Why is PV Student Community Beneficial?</h2>
				<ul class='list-style2'>
					<li class='first'><p>
                                            PV Student Community is a very user friendly 
                                            way for students to view aspects of nearby
                                            housing and finding exactly what they are seeking.
                                            Whether its exact location or whether its 
                                            specific blueprints that they are looking for. 
                                            This is also a virtual way to finding a roommate.
                                            Each student will select their specific property that
                                            they are interested in and then be revealed of 
                                            those who are also interested in the same properties
                                            and the same likes and interests based off of their
                                            personality quizzes that were taking at the beginning
                                            of student registration. This eliminates the middle
                                            man and their aren't any paper surveys to keep track
                                            of and there is no inputting specific data because 
                                            everything within the app will be recorded and is 
                                            able to access and match easily. This is less work for
                                            the staff of the properties to do.
                                        </p></li>
				</ul>
			</div>
			<div id='column3'>
				<h2>The Student Body</h2>
				<p>Every student needs this app and 
                                   if one student has it, they will 
                                   tell another and another and another.
                                   This app will also be promoted on World's 
                                   famous Instagram through the PV Life page.
                                   Flyers will also be posted colorfully around
                                   campus to grasp the attention of the student 
                                   body. 
                                </p>
			</div>
			
		</div>
	</div>

    </div>
	<div id='footer'>
            <p> All rights reserved. </p>
	</div>
	
</div>";
?>
