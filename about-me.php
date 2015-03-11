
<!DOCTYPE html>
<html lang='en'>

<head>
<SCRIPT LANGUAGE='JavaScript'>
<!-- This script generated free online at -->
<!-- Wilsoninfo http://www.wilsoninfo.com -->

<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval('page' + id + ' = window.open(URL, '' + id + '', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=700,height=750,left = 450,top = 75');');
}
// End -->
</script>
<meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>




<center> 
<!--Personality Quiz stylesheet-->
	<link rel='stylesheet' type='text/css' href='styles/PersonalityQuiz.css'</link>

<!-- jQuery -->
    <script src='js/jquery.js'></script>

<!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
	
	<style>
	div.fieldset{
		height: auto;
	}
</style>

<title>About Me</title>
  <!--<script>
    var btn = document.getElementById('last');
    btn.addEventListener('click', function() {
      document.location.href = 'personality-quiz.php';
    });
  </script>-->
	
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
                        <li class ='last'><a href='faqs.php'>Question/Concerns</a></li>
		</ul>
	</div>
	
	
	
<center>
<!--BANNER-->
	<img src='styles/images/Preferences.png'>
			

<!--Questions Progression-->

<tr>
<br>
<br>
<!--
echo'
PHP STARTS HERE -->
 
  <div class ='fieldset'> 
 
                                          
             <div id='questions'>
        <div id='step_1' class='question'>
            <br>
                <br>
            <div>
                <!-- Insert whatever radio button questions you want here. -->
				<legend>About Me </legend>
				<p>
				   <label>Major:<label>
				   <select name='major'>
						<option value=''>Please Select a Major</option>
						<option value='Agriculture & Human Sciences'>Agriculture & Human Sciences</option>
						<option value='Architecture'>Architecture</option>
						<option value='Arts & Sciences'>Arts & Sciences</option>
						<option value='Business'>Business</option>
						<option value='Education'>Education</option>
						<option value='Engineering'>Engineering</option>
						<option value='Juvenile Justice & Psychology'>Juvenile Justice & Psychology</option>
						<option value='Nursing'>Nursing</option>
						<option value='Graduate Studies'>Graduate Studies</option>
				   </select>
				</p>
				<p>
				   <label>Self Statement:</label>
				   <textarea name='self-stmt' cols='40' rows='5'></textarea>
			   </p>
                <button class='next'>Next</button>
            </div>
                <br>
                <br>
            <!--<img src='styles/images/0.png' class='aligncenter'>-->
            <br>
            <!--<form>
                <input type=button value='Help' href='#Question1'onClick='javascript:popUp('personality-help.php')'/></form>-->
        </div>
        
        <div id='step_2' class='question'>
            <div>
                <br>
                <br>
            <legend style='height:auto;'> Roommate Preferences </legend>
                
			   <p>
			   <label>Age:<label>
			   <select name='age'>
					<option value=''>Please Select an Age Range</option>
					<option value='<21'><21</option>
					<option value='21-24'>21-24</option>
					<option value='25-29'>25-29</option>
					<option value='30+'>30+</option>
			   </select>
			   </p>
			   <p>
			   <label>Major:<label>
			   <select name='major'>
					<option value=''>Doesn't Matter</option>
					<option value='Agriculture & Human Sciences'>Agriculture & Human Sciences</option>
					<option value='Architecture'>Architecture</option>
					<option value='Arts & Sciences'>Arts & Sciences</option>
					<option value='Business'>Business</option>
					<option value='Education'>Education</option>
					<option value='Engineering'>Engineering</option>
					<option value='Juvenile Justice & Psychology'>Juvenile Justice & Psychology</option>
					<option value='Nursing'>Nursing</option>
					<option value='Graduate Studies'>Graduate Studies</option>
			   </select>
			   </p>
			   <p>
			   <label>Social Habits:<label>
			   <select name='social-habits'>
					<option value=''>Doesn't Matter</option>
					<option value='Friendly and Outgoing'>Friendly and Outgoing</option>
					<option value='Moderately Social'>Moderately Social</option>
					<option value='Quiet and Reserved'>Quiet and Reserved</option>
			   </select>
			   </p>
			   <p>
			   <label>Sleep Habits:<label>
			   <select name='sleep-habits'>
					<option value=''>Doesn't Matter</option>
					<option value='Early Bird'>Early Bird</option>
					<option value='Flexible'>Flexible</option>
					<option value='Night Owl'>Night Owl</option>
			   </select>
			   </p>
			   <p>
			   <label>Cleaning Habits:<label>
			   <select name='cleaning-habits'>
					<option value=''>Doesn't Matter</option>
					<option value='Chaotic'>Chaotic</option>
					<option value='Casual'>Casual</option>
					<option value='Neat'>Neat</option>
			   </select>
			   </p>
                <button class='next'>next</button>
            </div>
            <br>
                <br>
        </div>
        
        <div id='step_3' class='question'>
            <br>
                <br>
            <div>
            <legend> Property Preferences </legend>
				<p>
                <label>Type of Residence:<label>
			   <select name='type'>
					<option value=''>Doesn't Matter</option>
					<option value='Apartment'>Apartment</option>
					<option value='Condo'>Condo</option>
					<option value='House'>House</option>
					<option value='Townhome'>Townhome</option>
			   </select>
			   </p>
			   <p>
			   <label>Rent:<label>
			   <select name='rent'>
					<option value=''>Doesn't Matter</option>
					<option value='< $500'>< $500</option>
					<option value='$500-$800'>$500-$800</option>
					<option value='$800+'>$800+</option>
			   </select>
			   </p>
			   <p>
			   <label>Sharing:<label>
			   <select name='share'>
					<option value=''>Doesn't Matter</option>
					<option value='<1'><1</option>
					<option value='<2'><2</option>
					<option value='<3'><3</option>
					<option value='3+'>3+</option>
			   </select>
			   </p>
			   <p>
			   <label>Smoking:<label>
			   <select name='smoking'>
					<option value=''>Doesn't Matter</option>
					<option value='Non-Smoking'>Non-Smoking</option>
					<option value='Occasional Smoker'>Occasional Smoker</option>
					<option value='Smoker'>Smoker</option>
			   </select>
			   </p><br>
               
                <button  onClick="window.location = 'personality-quiz.php'" class='next' id='last'  >next</button>
            </div>
                <br>
                <br>
            
        </div>
        
        
    </div>               
  </div>
 </form>

    
   <!--
echo'
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
            var next = $(this).parent().parent().attr('id').split('_')[1];
            
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
