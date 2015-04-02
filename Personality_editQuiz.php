
<!DOCTYPE html>
<html lang='en'>

<head>
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
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>




<center> 
<!--Personality Quiz stylesheet-->
	<link rel='stylesheet' type='text/css' href='styles/PersonalityQuiz.css'</link>

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
<!--BANNER-->
	<img src='images/PersonalityQuiz.png'>
			

<!--Questions Progression-->

<tr>
<br>
<br>
<!--
echo"
PHP STARTS HERE -->

  <div class ="fieldset">                                 
             <div id="questions">
<?php 
echo "
       <form name='newUser' action='".$_SERVER['PHP_SELF']."' method='post'>
        <div id='step_1' class='question'>
            <br>
                <br>
            <div>
                <!-- Insert whatever radio button questions you want here. -->
                 <legend> Question One </legend>
                <label>Select the option that best describes you?</label> <br>
                <input type='radio' name='question1' id='question-1-answer-E' value='E' required/>
                <label for ='question-1-answer-E'> Extrovert</label>
                
                <input type='radio' name='question1' id='question-1-answer-I' value='I' required/>
                <label for ='question-1-answer-I'> Introvert</label>
  
                <button class='next'>next</button>
               
            </div>
                <br>
                <br>"
        ?>
            <img src='images/0.png' class="aligncenter">
            <br>
            <form><input type=button value="Help" href="#Question1"onClick="javascript:popUp('personalityhelp.php')"/></form>
        </div>
        
        <div id="step_2" class="question">
 <?php
            echo"
            <form name='newUser' action='".$_SERVER['PHP_SELF']."' method='post'> 
            <div>
                <br>
                <br>
            <legend> Question Two </legend>
                <label>What kind of information do you naturally notice and remember?</label> <br>
                <input type'radio' name='question2' id='question-2-answer-S' value='S' required/>
                <label for ='question-2-answer-S'> Sensor</label>
                
                <input type='radio' name='question2' id='question-2-answer-N' value='N' required/>
                <label for ='question-2-answer-N'> Intuitive</label>
               
                <button class='next'>next</button>
                
            </div>
            <br>
                <br>
                "
 ?>
            <img src='images/25.png' class="aligncenter">
            <br>
            <form>
                <input type=button value="Help" href="#Question1"onClick="javascript:popUp('personalityhelp.php')"/></form>
        </div>
<?php 
echo "
       <form name='newUser' action='".$_SERVER['PHP_SELF']."' method='post'>       
        <div id'step_3' class='question'>
            <br>
                <br>
            <div>
            <legend> Question Three </legend>
                <label> How do you decide or come to conclusions?</label> <br>
                <input type='radio' name='question3' id='question-3-answer-T' value='T' required/>
                <label for ='question-3-answer-T'> Thinker</label>
                    
                <input type='radio' name='question3' id='question-3-answer-F' value='F' required/>
                <label for ='question-3-answer-F'> Feeler</label>
      
                <button class='next'>next</button>
            </div>
                <br>
                <br>"
 ?>
            <img src='images/50.png' class="aligncenter">
            <br>
            <form>
                <input type=button value="Help" href="#Question1"onClick="javascript:popUp('personalityhelp.php')"/></form>
        </div>
<?php 
echo "
       <form name='newUser' action='".$_SERVER['PHP_SELF']."' method='post'>        
        <div id='step_4' class='question'>
            <br>
                <br>
            <div>
            <legend> Question Four: </legend>
                <label>What kind of environment makes you the most comfortable?</label> <br>
                <input type='radio' name='question4' id='question-4-answer-J' value='J' required/>
                <label for ='question-4-answer-J'> Judger</label>
          
                <input type='radio' name='question4' id='question-4-answer-P' value='P' required/>
                <label for ='question-4-answer-P'> Perceiver</label>
                <button class='next'>next</button>
            </div>
                <br>
                <br"
 ?>
            <img src='images/75.png' class="aligncenter">
            <br>
            <form>
                <input type=button value="Help" href="#Question1"onClick="javascript:popUp('personalityhelp.php')"/></form>
        </div>
        
        <div id="step_5" class="question">
            
            <h1><label> Quiz 100% Complete </label><h1>
                    <img src='images/100.png' class="aligncenter">
            <div>
                
              <button class="Results">Results</button>
              <!--$PersonalityResults = array ('answer1','answer2','answer3','answer4');-->
              </form>
            </div>
        </div>
    </div>  
  </form>           
  </div>
</center>
	





   <footer>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <p>Copyright &copy; PV Student Community 2014</p>
                </div>
            </div>
        </div>
    </footer>

    
  <script>
        // Some script James added
        
        // This hides all the question class divs, except the first one.
        $('.question').hide().filter('#step_1').show();
        
        // this handles clicking the next button
        $('.question .next').click(function() {
        
            // Hide all the question classes again
            $('.question').hide();
            
            // get the number of this section.
            var next = $(this).parent().parent().attr('id').split("_")[1];
            
            // Increase it by 1
            next = parseInt(next, 10);
            next++;
            
            // Show the next step
            $('#step_' + next).show();
            
        });
        
    </script>

</center>
<!-- PHP CODING STARTS HERE -->
<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
//Prevent the user visiting the logged in page if he/she is already logged in
if(isUserLoggedIn()) { header("Location: account.php"); die(); }
//Forms posted
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$questions = array('question1','question2','question3','question4');
$answer1 = $_POST[question1];
$answer2 = $_POST[question2];
$answer3 = $_POST[question3];
$answer4 = $_POST[question4];

echo $_POST['answer1'];
echo $_POST['answer2'];
echo $_POST['answer3'];
echo $_POST['answer4'];
$PersonalityResults = array ('answer1','answer2','answer3','answer4');


/*
if($answer1 == "I"){$PersonalityResults++;} 
if($answer1 == "E"){$PersonalityResults++;}
if($answer1 == "S"){$PersonalityResults++;}
if($answer1 == "N"){$PersonalityResults++;}
if($answer1 == "T"){$PersonalityResults++;}
if($answer1 == "F"){$PersonalityResults++;}
if($answer1 == "J"){$PersonalityResults++;}
if($answer1 == "P"){$PersonalityResults++;}
*/
if ( $answer1 == "I" && $answer2 == "S"  && $answer3 == "T" && $answer4 == "J")
{ 
   
}
else 
{ 
    echo('ERROR MESSAGE 4PV34');
}


if ($question1 == 'I' || $question1 == 'E')
{ 
    // store selection 
}
else 
{ 
   echo(' Every Question Must Be Answered '); 
} 

// Question 2 
if ($question2 == 'S' || $question2 == 'N')
{ 
    // store selection 
}
else 
{ 
   echo(' Every Question Must Be Answered '); 
} 
//Question 3
if ($question3 == 'T' || $question3 == 'F')
{ 
    // store selection 
}
else 
{ 
   echo(' Every Question Must Be Answered '); 
} 
if ($question4 == 'J' || $question4 == 'P')
{ 
    // store selection 
}
else 
{ 
   echo(' Every Question Must Be Answered '); 
} 


    


?>



</body>
</html>


