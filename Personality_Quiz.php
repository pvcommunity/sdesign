
<!doctype html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="styles/Registration.css"</link>
<SCRIPT LANGUAGE="JavaScript">
<!-- This script generated free online at -->
<!-- Wilsoninfo http://www.wilsoninfo.com -->

<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=700,height=750,left = 450,top = 75');");
}
// End -->
</script>


<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=1,menubar=1,resizable=0,width=500,height=500,left = 550,top = 200');");
}
// End -->
</script>
</head>
<body>

    <p><a href="RegistrationPage.php">Register</a> | <a href="LoginPage.php">Login</a></p>

<div class="container">
<div id="wrapper"> 
    <div id="logo">
       
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <center><h2><a href="#">PV Student Community</a></h2></center>       
		</div>
    <br>
    <br>
    <br>
    <br>
 
    <div id="menu">
		<ul>
                    <li><a href="HomePage.php">Home</a></li>
                        <li class = "last"><a href="LoginPage.php">Login</a></li>
		</ul>
	</div>
   
    <!-- Registration Form - START -->
    <FORM ACTION="register.php" METHOD=get>
    <div class="container" id="container1">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">TEMPORARY SHELL</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                                 <!-- Question One  -->
                               <p class="question">1. Select the option that best describes you?</p>
                               <ul class="answers">
                               <input type="radio" name="q1" value="E" id="q1E"><label for="q1E">Extrovert</label>
                               <input type="radio" name="q1" value="I" id="q1I"><label for="q1I">Introvert</label>
                               <br><form>
                            <input type=button value="Help" href="#Question1"onClick="javascript:popUp('personalityhelp.php')"/>
                               </form>
                               </ul>
                               
                                 <!-- Question Two  -->
                                 <p class="question">2. What kind of information do you naturally notice and remember?</p>
                               <ul class="answers">
                               <input type="radio" name="q2" value="S" id="q2S"><label for="qS">Sensor</label>
                               <input type="radio" name="q2" value="N" id="q2N"><label for="q1N">Intuitive</label>
                               <form>
                            <input type=button value="Help" href="#Question2" onClick="javascript:popUp('personalityhelp.php')"/>
                            
                               </form>
                           
                               </ul>
                                 <!-- Question Three  -->
                                 <p class="question">3. How do you decide or come to conclusions??</p>
                               <ul class="answers">
                               <input type="radio" name="q3" value="T" id="q3T"><label for="q3T">Thinker</label>
                               <input type="radio" name="q3" value="F" id="q3F"><label for="q3F">Feeler</label>
                               <form>
                            <input type=button value="Help" onClick="javascript:popUp('personalityhelp.php')">
                            </form>
                               
                               </ul>
                                 <!-- Question Four  -->
                                 <p class="question">4. What kind of environment makes you the most comfortable?</p>
                               <ul class="answers">
                               <input type="radio" name="q4" value="J" id="q4J"><label for="q4J">Judger</label>
                               <input type="radio" name="q4" value="P" id="q4P"><label for="q4P">Perceiver</label>
                               <form>
                            <input type=button value="Help" onClick="javascript:popUp('personalityhelp.php')">
                            </form>
                               </ul>
                            <!-- when submit jquery ajax call -->
   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</FORM>   
                   
<style>


.centered-form {
    margin-top: 120px;
    margin-bottom: 120px;
}

.centered-form .panel {
    background: rgba(184, 134, 11, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
<!-- Registration Form - END -->

</div>
<!-- PHP CODE BEGINS-->
</body>
</html>
