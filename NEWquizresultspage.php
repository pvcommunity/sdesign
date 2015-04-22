
<!doctype html>
<html>
<head>
<head>
   <link rel='stylesheet' type='text/css' href='styles/PersonalityQuiz.css'</link>
<style type="text/css">
 .QRP { cursor:hand; cursor:pointer;
        border:1px solid white;  width:95%; }
 .PR { display:none; }
</style>
<script type="text/javascript">
function toggle(Info) {
  var CState = document.getElementById(Info);
  CState.style.display = (CState.style.display != 'block')
                       ? 'block' : 'none';
}

</script>
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
			
            
          <div id="content-area">
			            <div class="view view-page view-id-page view-display-id-page_1 img-plain view-dom-id-dad9922c7280c210042a75c81889f82e">
    
                                        <?php 
                                         $question1 = $_POST['question1'];
                                            $question2 = $_POST['question2'];
                                            $question3 = $_POST['question3'];
                                            $question4 = $_POST['question4'];
                                            //$questions = array('question1','question2','question3','question4');
                                            $Quizresults = $question1. $question2. $question3. $question4;
                                            echo"<center>";
                                            echo " <div>";
                                           
                                               echo "<div id='results'><h2><bold> Your result is<h2></bold></div>";
                                                echo "<div id='results'><h2><big><bold>$Quizresults</h2></bold></big></div>"; 
                                            echo"</center>";
                                            echo "</div>";
                                                                         ?>
                                        <br>
                                        
                                        

 <div class="view-content">
 <table class="views-view-grid col-4">
  <tbody>
<tr class="row-1 row-first">
    
    
 <td class="col-1 col-first">
    
     
     <DIV class="QRP" onclick="toggle('QRP1')">
     <img src="http://www.truity.com/sites/default/files/imagecache/width_180/INFP.png" alt="INFP, the Healer" title="INFP, the Healer Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191" /></a>
     </div>
     <?php
      // redirection link 
      
      
       ?>
     
     <div id="QRP1" class="PR">INFPs are imaginative idealists, guided by their own core values and beliefs. To a Healer, possibilities are paramount; the realism of the moment is only of passing concern. They see potential for a better future, and pursue truth and meaning with their own individual flair.
     INFPs are sensitive, caring, and compassionate, and are deeply concerned with the personal growth of themselves and others. Individualistic and nonjudgmental, INFPs believe that each person must find their own path. They enjoy spending time exploring their own ideas and values, and are gently encouraging to others to do the same. INFPs are creative and often artistic; they enjoy finding new outlets for self-expression.
    </div>
   
   
 </td>
 
  
 <td class="col-2">
              
  <DIV class="QRP" onclick="toggle('QRP2')">  
  <img src="http://www.truity.com/sites/default/files/imagecache/width_180/INFJ.png" alt="INFJ, the Counselor" title="INFJ, the Counselor Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191" />
  </div>
        <?php
      // redirection link 
      
      
       ?>
  <div id="QRP2" class="PR">
   INFJs are creative nurturers with a strong sense of personal integrity and a drive to help others realize their potential. Creative and dedicated, they have a talent for helping others with original solutions to their personal challenges.
    The Counselor has a unique ability to intuit others' emotions and motivations, and will often know how someone else is feeling before that person knows it himself. They trust their insights about others and have strong faith in their ability to read people. Although they are sensitive, they are also reserved; the INFJ is a private sort, and is selective about sharing intimate thoughts and feelings.
  </div> 
     
  </td>
  
  
<td class="col-3">
 
 <DIV class="QRP" onclick="toggle('QRP3')">  
 <img src="http://www.truity.com/sites/default/files/imagecache/width_180/INTJ.png" alt="INTJ, the Mastermind" title="INTJ, the Mastermind Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191" />
 </div>
       <?php
      // redirection link 
      
      
       ?>
 <div id="QRP3" class="PR">
 INTJs are analytical problem-solvers, eager to improve systems and processes with their innovative ideas. They have a talent for seeing possibilities for improvement, whether at work, at home, or in themselves.
Often intellectual, INTJs enjoy logical reasoning and complex problem-solving. They approach life by analyzing the theory behind what they see, and are typically focused inward, on their own thoughtful study of the world around them. INTJs are drawn to logical systems and are much less comfortable with the unpredictable nature of other people and their emotions. They are typically independent and selective about their relationships, preferring to associate with people who they find intellectually stimulating.
 </div>          
</td>

<td class="col-4 col-last">
  <DIV class="QRP" onclick="toggle('QRP4')">              
  <img src="http://www.truity.com/sites/default/files/imagecache/width_180/INTP.png" alt="INTP, the Architect" title="INTP, the Architect Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191" />
  </div>    
       <?php
      // redirection link 
      
      
       ?>

 <div id="QRP4" class="PR">  
INTPs are philosophical innovators, fascinated by logical analysis, systems, and design. They are preoccupied with theory, and search for the universal law behind everything they see. They want to understand the unifying themes of life, in all their complexity.
INTPs are detached, analytical observers who can seem oblivious to the world around them because they are so deeply absorbed in thought. They spend much of their time focused internally: exploring concepts, making connections, and seeking understanding. To the Architect, life is an ongoing inquiry into the mysteries of the universe.
 </div>
</td>

</tr>
  
 <!---- row one completed ----> 
 
  <!---- row Two Begins Here ----> 
<tr class="row-2">
    
<td class="col-1 col-first">
<DIV class="QRP" onclick="toggle('QRP5')">                
<img src="http://www.truity.com/sites/default/files/imagecache/width_180/ISFJ.png" alt="ISFJ, the Protector " title="ISFJ, the Protector Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191" />
</div>
       <?php
      // redirection link 
      
      
       ?>
<div id="QRP5" class="PR">  
ISFJs are industrious caretakers, loyal to traditions and organizations. They are practical, compassionate, and caring, and are motivated to provide for others and protect them from the perils of life.
ISFJs are conventional and grounded, and enjoy contributing to established structures of society. They are steady and committed workers with a deep sense of responsibility to others. They focus on fulfilling their duties, particularly when they are taking care of the needs of other people. They want others to know that they are reliable and can be trusted to do what is expected of them. They are conscientious and methodical, and persist until the job is done.
</div>
</td>
 
<td class="col-2">
<DIV class="QRP" onclick="toggle('QRP6')">                
<img src="http://www.truity.com/sites/default/files/imagecache/width_180/ISFP.png" alt="ISFP, the Composer" title="ISFP, the Composer Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191" />         
</div>
       <?php
      // redirection link 
      
      
       ?>

<div id="QRP6" class="PR">  
ISFPs are gentle caretakers who live in the present moment and enjoy their surroundings with cheerful, low-key enthusiasm. They are flexible and spontaneous, and like to go with the flow to enjoy what life has to offer. ISFPs are quiet and unassuming, and may be hard to get to know. However, to those who know them well, the ISFP is warm and friendly, eager to share in life's many experiences.

ISFPs have a strong aesthetic sense and seek out beauty in their surroundings. They are attuned to sensory experience, and often have a natural talent for the arts. ISFPs especially excel at manipulating objects, and may wield creative tools like paintbrushes and sculptor's knives with great mastery.
</div>
</div>
</td>
  
<td class="col-3">
<DIV class="QRP" onclick="toggle('QRP7')">               
<img src="http://www.truity.com/sites/default/files/imagecache/width_180/ISTJ.png" alt="ISTJ, the Inspector" title="ISTJ, the Inspector Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191" />       
</div>
<div id="QRP7" class="PR">  
       <?php
      // redirection link 
      
      
       ?>
ISTJs are responsible organizers, driven to create and enforce order within systems and institutions. They are neat and orderly, inside and out, and tend to have a procedure for everything they do. Reliable and dutiful, ISTJs want to uphold tradition and follow regulations.

ISTJs are steady, productive contributors. Although they are Introverted, ISTJs are rarely isolated; typical ISTJs know just where they belong in life, and want to understand how they can participate in established organizations and systems. They concern themselves with maintaing the social order and making sure that standards are met.
</div> 
    
</div>
</td>

<td class="col-4 col-last">
<DIV class="QRP" onclick="toggle('QRP8')">             
<img src="http://www.truity.com/sites/default/files/imagecache/width_180/ISTP.png" alt="ISTP, the Craftsman" title="ISTP, the Craftsman Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191" />    
</div>
       <?php
      // redirection link 
      
      
       ?>
<div id="QRP8" class="PR">  
ISTPs are observant artisans with an understanding of mechanics and an interest in troubleshooting. They approach their environments with a flexible logic, looking for practical solutions to the problems at hand. They are independent and adaptable, and typically interact with the world around them in a self-directed, spontaneous manner.

ISTPs are attentive to details and responsive to the demands of the world around them. Because of their astute sense of their environment, they are good at moving quickly and responding to emergencies. ISTPs are reserved, but not withdrawn: the ISTP enjoys taking action, and approaches the world with a keen appreciation for the physical and sensory experiences it has to offer.
</div> 
    
</div>

</td>
</tr>
              
  
 <!---- row two completed ----> 
 
  <!---- row Three Begins Here ----> 
               
<tr class="row-3">
<td class="col-1 col-first">
<DIV class="QRP" onclick="toggle('QRP9')">                      
<img src="http://www.truity.com/sites/default/files/imagecache/width_180/ENFJ.png" alt="ENFJ, the Teacher" title="ENFJ, the Teacher Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191" />         
</div>
       <?php
      // redirection link 
      
      
       ?>
<div id="QRP9" class="PR">      
ENFJs are idealist organizers, driven to implement their vision of what is best for humanity. They often act as catalysts for human growth because of their ability to see potential in other people and their charisma in persuading others to their ideas. They are focused on values and vision, and are passionate about the possibilities for people.

ENFJs are typically energetic and driven, and often have a lot on their plates. They are tuned into the needs of others and acutely aware of human suffering; however, they also tend to be optimistic and forward-thinking, intuitively seeing opportunity for improvement. The ENFJ is ambitious, but their ambition is not self-serving: rather, they feel personally responsible for making the world a better place.
</div>
</td>

<td class="col-2">
<DIV class="QRP" onclick="toggle('QRP10')">                       
<img src="http://www.truity.com/sites/default/files/imagecache/width_180/ENFP.png" alt="ENFP, the Champion" title="ENFP, the Champion Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191" />       
</div>
       <?php
      // redirection link 
      
      
       ?>
<div id="QRP10" class="PR">  
    ENFPs are people-centered creators with a focus on possibilities and a contagious enthusiasm for new ideas, people and activities. Energetic, warm, and passionate, ENFPs love to help other people explore their creative potential.

ENFPs are typically agile and expressive communicators, using their wit, humor, and mastery of language to create engaging stories. Imaginative and original, ENFPs often have a strong artistic side. They are drawn to art because of its ability to express inventive ideas and create a deeper understanding of human experience.
</div>

</td>

<td class="col-3">
 <DIV class="QRP" onclick="toggle('QRP11')">                      
<img src="http://www.truity.com/sites/default/files/imagecache/width_180/ENTJ.png" alt="ENTJ, the Commander" title="ENTJ, the Commander Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191" />   
 </div>
       <?php
      // redirection link 
      
      
       ?>
<div id="QRP11" class="PR">  
ENTJs are strategic leaders, motivated to organize change. They are quick to see inefficiency and conceptualize new solutions, and enjoy developing long-range plans to accomplish their vision. They excel at logical reasoning and are usually articulate and quick-witted.

ENTJs are analytical and objective, and like bringing order to the world around them. When there are flaws in a system, the ENTJ sees them, and enjoys the process of discovering and implementing a better way. ENTJs are assertive and enjoy taking charge; they see their role as that of leader and manager, organizing people and processes to achieve their goals.
</div>
</td>

<td class="col-4 col-last">
 <DIV class="QRP" onclick="toggle('QRP12')">                      
<img src="http://www.truity.com/sites/default/files/imagecache/width_180/ENTP.png" alt="ENTP, the Visionary" title="ENTP, the Visionary Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191" />
 </div>
       <?php
      // redirection link 
      
      
       ?>
 <div id="QRP12" class="PR">     
 ENTPs are inspired innovators, motivated to find new solutions to intellectually challenging problems. They are curious and clever, and seek to comprehend the people, systems, and principles that surround them. Open-minded and unconventional, Visionaries want to analyze, understand, and influence other people.

ENTPs enjoy playing with ideas and especially like to banter with others. They use their quick wit and command of language to keep the upper hand with other people, often cheerfully poking fun at their habits and eccentricities. While the ENTP enjoys challenging others, in the end they are usually happy to live and let live. They are rarely judgmental, but they may have little patience for people who can't keep up.
 </div>
 </td>
</tr>
              
 
 <!---- row three completed ----> 
 
  <!---- row Four Begins Here ----> 
  
<tr class="row-4 row-last">
<td class="col-1 col-first">
<DIV class="QRP" onclick="toggle('QRP13')">                
<img src="http://www.truity.com/sites/default/files/imagecache/width_180/ESFJ.png" alt="ESFJ, the Provider" title="ESFJ, the Provider Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191"/>    
</div>
       <?php
      // redirection link 
      
      
       ?>
<div id="QRP13" class="PR">    
ESFJs are conscientious helpers, sensitive to the needs of others and energetically dedicated to their responsibilities. They are highly attuned to their emotional environment and attentive to both the feelings of others and the perception others have of them. ESFJs like a sense of harmony and cooperation around them, and are eager to please and provide.
ESFJs value loyalty and tradition, and usually make their family and friends their top priority. They are generous with their time, effort, and emotions. They often take on the concerns of others as if they were their own, and will attempt to put their significant organizational talents to use to bring order to other people's lives.
</div>
</td>

<td class="col-2">
<DIV class="QRP" onclick="toggle('QRP14')">                
<img src="http://www.truity.com/sites/default/files/imagecache/width_180/ESFP.png" alt="ESFP, the Performer" title="ESFP, the Performer Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191"/>     
</div>
       <?php
      // redirection link 
      
      
       ?>
<div id="QRP14" class="PR">  
ESFPs are vivacious entertainers who charm and engage those around them. They are spontaneous, energetic, and fun-loving, and take pleasure in the things around them: food, clothes, nature, animals, and especially people.
ESFPs are typically warm and talkative and have a contagious enthusiasm for life. They like to be in the middle of the action and the center of attention. They have a playful, open sense of humor, and like to draw out other people and help them have a good time.
</div>
</td>
<td class="col-3">
<DIV class="QRP" onclick="toggle('QRP15')">               
<img src="http://www.truity.com/sites/default/files/imagecache/width_180/ESTJ.png" alt="ESTJ, the Supervisor" title="ESTJ, the Supervisor Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191"/>      
</div>
       <?php
      // redirection link 
      
      
       ?>
<div id="QRP15" class="PR">   
ESTJs are hardworking traditionalists, eager to take charge in organizing projects and people. Orderly, rule-abiding, and conscientious, ESTJs like to get things done, and tend to go about projects in a systematic, methodical way.
ESTJs are the consummate organizers, and want to bring structure to their surroundings. They value predictability and prefer things to proceed in a logical order. When they see a lack of organization, the ESTJ often takes the initiative to establish processes and guidelines, so that everyone knows what's expected.
</div>
</td>
<td class="col-4 col-last">
<DIV class="QRP" onclick="toggle('QRP16')">                
<img src="http://www.truity.com/sites/default/files/imagecache/width_180/ESTP.png" alt="ESTP, the Dynamo" title="ESTP, the Dynamo Personality Type"  class="imagecache imagecache-width_180 imagecache-default imagecache-width_180_default" width="180" height="191"/>     
</div>
       <?php
      // redirection link 
      
      
       ?>
<div id="QRP16" class="PR">   
ESTPs are energetic thrillseekers who are at their best when putting out fires, whether literal or metaphorical. They bring a sense of dynamic energy to their interactions with others and the world around them. They assess situations quickly and move adeptly to respond to immediate problems with practical solutions.
Active and playful, ESTPs are often the life of the party and have a good sense of humor. They use their keen powers of observation to assess their audience and adapt quickly to keep interactions exciting. Although they typically appear very social, they are rarely sensitive; the ESTP prefers to keep things fast-paced and silly rather than emotional or serious.
</div>
</td>
</tr>
              
               
 <!---- rows Finished ----> 

  
      </tbody>
</table>
     <!-- footer--> 
     
      <h5>All rights reserved.<br> PVCOMMUNITY </h5>
      <h6> Myers Briggs Images provide by http://www.truity.com/ </h6>
    </div>
  
  
  
  
  
  
</div>            <div style="clear:both;"></div>
          </div> <!-- /#content-area -->

          
          
          </div>
          <div style="clear:both;"></div>
        </div> <!-- /content-inner /content -->

</div>
</div>

</body>
</html>

<?php 


?>
