
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
	<img src='styles/images/PersonalityQuiz.png'>
			

<!--Questions Progression-->

<tr>
<br>
<br>
<!--
echo"
PHP STARTS HERE -->
 
  <div class ="fieldset"> 
 
                                          
             <div id="questions">
        <div id="step_1" class="question">
            <br>
                <br>
            <div>
                <!-- Insert whatever radio button questions you want here. -->
                 <legend> Question One </legend>
                <label>Select the option that best describes you?</label> <br>
                <input type="radio" name="q1" value="E" >Extrovert
                <input type="radio" name="q1" value="I" >Introvert
                
                <button class="next">next</button>
            </div>
                <br>
                <br>
            <img src='styles/images/0.png' class="aligncenter">
            <br>
            <form>
                <input type=button value="Help" href="#Question1"onClick="javascript:popUp('personality-help.php')"/></form>
        </div>
        
        <div id="step_2" class="question">
            <div>
                <br>
                <br>
            <legend> Question Two </legend>
                <label>What kind of information do you naturally notice and remember?</label> <br>
                <input type="radio" name="q2" value="S" >Sensor
                <input type="radio" name="q2" value="N" >Intuitive
             
                <button class="next">next</button>
            </div>
            <br>
                <br>
            <img src='styles/images/25.png' class="aligncenter">
            <br>
            <form>
                <input type=button value="Help" href="#Question1"onClick="javascript:popUp('personality-help.php')"/></form>
        </div>
        
        <div id="step_3" class="question">
            <br>
                <br>
            <div>
            <legend> Question Three </legend>
                <label> How do you decide or come to conclusions?</label> <br>
                <input type="radio" name="q3" value="T" >Thinker
                <input type="radio" name="q3" value="F" >Feeler
               
                <button class="next">next</button>
            </div>
                <br>
                <br>
            <img src='styles/images/50.png' class="aligncenter">
            <br>
            <form>
                <input type=button value="Help" href="#Question1"onClick="javascript:popUp('personality-help.php')"/></form>
        </div>
        
        <div id="step_4" class="question">
            <br>
                <br>
            <div>
            <legend> Question Four: </legend>
                <label>What kind of environment makes you the most comfortable?</label> <br>
                <input type="radio" name="q4" value="J" >Judger
                <input type="radio" name="q4" value="P" >Perceiver
              
                <button class="next">next</button>
            </div>
                <br>
                <br>
            <img src='styles/images/75.png' class="aligncenter">
            <br>
            <form>
                <input type=button value="Help" href="#Question1"onClick="javascript:popUp('personality-help.php')"/></form>
        </div>
        
        <div id="step_5" class="question">
            
            <h1><label> Quiz 100% Complete </label><h1>
                    <img src='styles/images/100.png' class="aligncenter">
            <div>
                
              <button class="Results">Results</button>
            </div>
        </div>
    </div>               
  </div>
 </form>

    
   <!--
echo"
PHP STARTS HERE -->
                        
    
    
    <!--
<label>Question</label>

<input type='radio' name='quiz_answer[s1][a0]' title class='value-answer' value='5'>
				
	

	
	<img src='images/50.png'>			
	

		
	<img src='images/75.png'>			
	-->
		
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
</body>
</html> 

