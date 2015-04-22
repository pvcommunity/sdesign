
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
<tr>

          
            <form action="personalityresult.php" method="post">
                <!-- Insert whatever radio button questions you want here. -->
            <br>
            <br>
            
                <legend> Question One </legend>
                <label>Select the option that best describes you?</label> <br>
                <input type="radio" name="question1" id ="question1" value="E" >Extrovert
                <input type="radio" name="question1" id ="question1" value="I" >Introvert
             
                <input type=button value="Help" href="#Question1"onClick="javascript:popUp('personalityhelp.php')"/>
        
                <br>
                <br>
  
                <legend> Question Two </legend>
                <label>What kind of information do you naturally notice and remember?</label> <br>
                <input type="radio" name="question2" id ="question2" value="S" >Sensor
                <input type="radio" name="question2" id ="question2" value="N" >Intuitive
             
                <input type=button value="Help" href="#Question2"onClick="javascript:popUp('personalityhelp.php')"/>
                <br>
                <br>
           
                <legend> Question Three </legend>
                <label> How do you decide or come to conclusions?</label> <br>
                <input type="radio" name="question3" id ="question3" value="T" >Thinker
                <input type="radio" name="question3" id ="question3" value="F" >Feeler
                <input type=button value="Help" href="#Question3"onClick="javascript:popUp('personalityhelp.php')"/>
               
                <br>
                <br>
                 <legend> Question Four: </legend>
                <label>What kind of environment makes you the most comfortable?</label> <br>
                <input type="radio" name="question4" id ="question4" value="J" >Judger
                <input type="radio" name="question4" id ="question4" value="P" >Perceiver
                <input type=button value="Help" href="#Question4"onClick="javascript:popUp('personalityhelp.php')"/>
                 <br>
                <button class="next">next</button>
                <br>
                <input type="submit" name="submit" value="Get Results" />
                
              
 </form>           


   <footer>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <p>Copyright &copy; PV Student Community 2014</p>
                </div>
            </div>
        </div>
    </footer>
<br>
  <br>  
</center>
 </div>  
</div>  
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
</body>
</html>
  <?php
            $question1 = $_POST['question1'];
            $question2 = $_POST['question2'];
            $question3 = $_POST['question3'];
            $question4 = $_POST['question4'];
            //$questions = array('question1','question2','question3','question4');
            $Quizresults = $question1. $question2. $question3. $question4;
            echo"<center>";
            echo " <div>";
               echo "<div id='results'> Your result is </div>";
                echo "<div id='results'>$Quizresults </div>"; 
            echo"</center>";
            echo "</div>";
         
            
            $preferenceScore = 
 /*
//***********************************            
            if ( $question1 == "I" && $question2 == "N" && $question3 == "F " && $question4 == "P")
            { 
                  echo "<div id='results'>$Quizresults / Your result is INFP </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//************************************           
            if ( $question1 == "I" && $question2 == "N" && $question3 == "F" && $question4 == "J")
            { 
                  echo "<div id='results'>$Quizresults / Your result is INFJ </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//*************************************           
            if ( $question1 == "I" && $question2 == "N" && $question3 == "T" && $question4 == "J")
            { 
                  echo "<div id='results'>$Quizresults / Your result is INTJ </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//**************************************
             if ( $question1 == "I" && $question2 == "N" && $question3 == "T" && $question4 == "P")
            { 
                  echo "<div id='results'>$Quizresults / Your result is INTP </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//**************************************
            if ( $question1 == "I" && $question2 == "S" && $question3 == "F" && $question4 == "J")
            { 
                  echo "<div id='results'>$Quizresults / Your result is ISFJ </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//**************************************
           if ( $question1 == "I" && $question2 == "S" && $question3 == "F" && $question4 == "P")
            { 
                  echo "<div id='results'>$Quizresults / Your result is ISFP </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//**************************************
            if ( $question1 == "I" && $question2 == "S" && $question3 == "T" && $question4 == "J")
            { 
                  echo "<div id='results'>$Quizresults / Your result is ISTJ </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//****************************************
            if ( $question1 == "I" && $question2 == "S" && $question3 == "T" && $question4 == "P")
            { 
                  echo "<div id='results'>$Quizresults / Your result is ISTP </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//*****************************************
            if ( $question1 == "E" && $question2 == "N" && $question3 == "F" && $question4 == "J")
            { 
                  echo "<div id='results'>$Quizresults / Your result is ENFJ </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//******************************************
            if ( $question1 == "E" && $question2 == "N" && $question3 == "F" && $question4 == "P")
            { 
                  echo "<div id='results'>$Quizresults / Your result is ENFP </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//******************************************
           if ( $question1 == "E" && $question2 == "N" && $question3 == "T" && $question4 == "J")
            { 
                  echo "<div id='results'>$Quizresults / Your result is ENTJ </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//*******************************************
           if ( $question1 == "E" && $question2 == "N" && $question3 == "T" && $question4 == "P")
            { 
                  echo "<div id='results'>$Quizresults / Your result is ENTP </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//*********************************************
           if ( $question1 == "E" && $question2 == "S" && $question3 == "F" && $question4 == "J")
            { 
                  echo "<div id='results'>$Quizresults / Your result is ESFJ </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//*********************************************
            if ( $question1 == "E" && $question2 == "S" && $question3 == "F" && $question4 == "P")
            { 
                  echo "<div id='results'>$Quizresults / Your result is ESFP </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//*********************************************
            if ( $question1 == "E" && $question2 == "S" && $question3 == "T" && $question4 == "J")
            { 
                  echo "<div id='results'>$Quizresults / Your result is ESTJ </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
//*********************************************
            if ( $question1 == "E" && $question2 == "S" && $question3 == "T" && $question4 == "P")
            { 
                  echo "<div id='results'>$Quizresults / Your result is ESTP </div>";
                  echo "<a href=personlityresult.php>Read Result details</a> ";
            }
            
     */       
/*if (isset($_POST['submit'])) {
if(isset($_POST['radio']))
{
echo "<span>Your results are:<b> 
print $question1;
print $question2;
print $question3;
print $question4;</b></span>";
}
}*/
            /*
            if($answer1 == "I"){$PersonalityResults++;} 
            if($answer1 == "E"){$PersonalityResults++;}
            if($answer2 == "S"){$PersonalityResults++;}
            if($answer2 == "N"){$PersonalityResults++;}
            if($answer3 == "T"){$PersonalityResults++;}
            if($answer3 == "F"){$PersonalityResults++;}
            if($answer4 == "J"){$PersonalityResults++;}
            if($answer4 == "P"){$PersonalityResults++;}*/            
            
            /* Algorithm Test 
             * 
             * loop for pull students from database 
             * QUERIES: GOES HERE FOR EXTRACTIONS
             * 
             * Calculation goes here 
             * $Quizresults
             */
?>   
            
            
            
            
            
            
            
            
            
            
            
            
        ?>
	
