<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function fetchStudent($id)
{
    global $mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT 
            user_name,
            display_name,
            password,
            email,
            gender,
            classification
            FROM ".$db_table_prefix."users
            WHERE
            $id = ?");
    $stmt->execute();
    $stmt->bind_param($user,$display,$password,$email,$gender,$classification);
    
    while($stmt->fetch()) {
        $row[] = array('user_name'=>$user,'display_name'=>$display,'password'=>$password,'email'=>$email,'gender'=>$gender,'classification'=>$classification);
    }
    
    $stmt->close();
    return($row);
}

require_once("models/config.php");
if(!securePage($_SERVER['PHP_SELF'])){die();}

// Forms posted
if(!empty($_POST))
{
    $errors = array();
    $s_id = REQUEST["id"];
    
    $s_major = $_POST["s_major"];
    $s_self_stmt = $_POST["s_self_stmt"];
    $s_social = $_POST["s_social"];
    $s_sleep = $_POST["s_sleep"];
    $s_cleaning = $_POST["s_cleaning"];
    
    $r_major = array();
    $r_social = array();
    $r_sleep = array();
    $r_cleaning = array();
    
    $p_type = array();
    $p_rent = array();
    $p_sharing = array();
    $p_smoking = array();
    
    switch($p_rent[])
    {
	case "<$500":
	case "":
    }

    if(count($errors) == 0)
    {
        $row = fetchStudent($s_id);
        $student = Student($row[id],$row[user_name],$row[display_name],$row[password],$row[email],$row[gender],$row[classification]);
	$student->set_about_me($s_id,$s_major,$s_self_stmt,$s_social,$s_sleep,$s_cleaning);
	$student->set_preferences($s_id,&$r_major,&$r_social,&$r_sleep,&$r_cleaning,&$p_type,&$p_rent,&$p_sharing,&$p_smoking);
    }
}

echo "
<form name='registration_pt2' action=' ".$_SERVER['PHP_SELF']."' method='post'>
    <fieldset id='about-me'><label>About Me:</label>
        <p>
        <label>Major:</label>
        <select name='s_major'>
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
	<label>Self-Statement:</label>
	<textarea name='s_self_stmt' id='self-stmt' cols='45' rows='7'></textarea>
	<br/>
	<span name='countchars' id='countchars' style='font-weight:bold;'></span>Characters Remaining
	</p>
	<p>
	<label>Social Habits:</label>
	<select name='s_social'>
	     <option value=''>Please Select Your Social Habit</option>
             <option value='Quiet and Reserved'>Quiet and Reserved</option>
             <option value='Moderately Social'>Moderately Social</option>
             <option value='Friendly and Outgoing'>Friendly and Outgoing</option>
        </select>
        </p>
        <p>
        <label>Your Sleep Habits:</label>
        <select name='s_sleep' id='s_sleep'>
            <option value=''>Please Select Your Sleep Habits</option>
            <option value='Early Riser'>Early Riser</option>
            <option value='Flexible'>Flexible</option>
            <option value='Night Owl'>Night Owl</option>
        </select>
        </p>
        <p>
        <label>Your Cleaning Habits:</label>
        <select name='s_cleaning' id='s_cleaning'>
            <option value=''>Please Select Your Cleaning Habits</option>
            <option value='Chaotic'>Chaotic</option>
            <option value='Casual'>Casual</option>
            <option value='Neat'>Neat</option>
        </select>
        </p>	
    </fieldset>
    <fieldset id='roommate-pref'><label>Roommate Preferences:</label>
<p>
			   <label>Major:</label>
			   <select name='r_major[]'>
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
                           <label>Importance:</label>
                           <select name='r_major[]'>
                                <option value='0'>Not Important</option>
				<option value='25'>Moderately Important</option>
				<option value='75'>Very Important</option>
			   </select>
			   </p>
			   <p>
			   <label>Social Habits:</label>
			   <select name='r_social[]'>
                                <option value='Friendly and Outgoing'>Friendly and Outgoing</option>
                                <option value='Moderately Social'>Moderately Social</option>
                                <option value='Quiet and Reserved'>Quiet and Reserved</option>
			   </select>
			   </p>
			   <p>
                           <label>Importance:</label>
                           <select name='r_social[]'>
                                <option value='0'>Not Important</option>
				<option value='25'>Moderately Important</option>
				<option value='75'>Very Important</option>
			   </select>
			   </p>
			   <p>
			   <label>Sleep Habits:</label>
			   <select name='r_sleep[]'>
                                <option value='Early Bird'>Early Bird</option>
                                <option value='Flexible'>Flexible</option>
                                <option value='Night Owl'>Night Owl</option>
			   </select>
			   </p>
                           <p>
                           <label>Importance:</label>
                           <select name='r_sleep[]'>
                                <option value='0'>Not Important</option>
				<option value='25'>Moderately Important</option>
				<option value='75'>Very Important</option>
			   </select>
			   </p>
			   <p>
			   <label>Cleaning Habits:</label>
			   <select name='r_cleaning[]'>
                                <option value='Chaotic'>Chaotic</option>
                                <option value='Casual'>Casual</option>
                                <option value='Neat'>Neat</option>
			   </select>
			   </p>
			   <p>
                           <label>Importance:</label>
                           <select name='r_cleaning[]'>
                                <option value='0'>Not Important</option>
				<option value='25'>Moderately Important</option>
				<option value='75'>Very Important</option>
			   </select>
			   </p>	
    </fieldset>
    <fieldset id='property-pref'><label>Property Preferences:</label>
<p>
                <label>Type of Residence:<label>
			   <select name='p_type[]'>
                                <option value='Apartment'>Apartment</option>
                                <option value='Condo'>Condo</option>
                                <option value='House'>House</option>
                                <option value='Townhome'>Townhome</option>
			   </select>
			   </p>
 			   <p>
                           <label>Importance:</label>
                           <select name='p_type[]'>
                                <option value='0'>Not Important</option>
				<option value='25'>Moderately Important</option>
				<option value='75'>Very Important</option>
			   </select>
			   </p>
			   <p>
			   <label>Rent:<label>
			   <select name='p_rent[]'>
                                <option value='< $500'>< $500</option>
                                <option value='$500-$800'>$500-$800</option>
                                <option value='$800+'>$800+</option>
			   </select>
			   </p>
 			   <p>
                           <label>Importance:</label>
                           <select name='p_type[]'>
                                <option value='0'>Not Important</option>
				<option value='25'>Moderately Important</option>
				<option value='75'>Very Important</option>
			   </select>
			   </p>
			   <p>
			   <label>Sharing:<label>
			   <select name='p_sharing[]'>
                                <option value='<1'><1</option>
                                <option value='<2'><2</option>
                                <option value='<3'><3</option>
                                <option value='3+'>3+</option>
			   </select>
			   </p>
 			   <p>
                           <label>Importance:</label>
                           <select name='p_sharing[]'>
                                <option value='0'>Not Important</option>
				<option value='25'>Moderately Important</option>
				<option value='75'>Very Important</option>
			   </select>
			   </p>
			   <p>
			   <label>Smoking:<label>
			   <select name='p_smoking[]'>
                                <option value=''>Doesn't Matter</option>
                                <option value='Non-Smoking'>Non-Smoking</option>
                                <option value='Occasional Smoker'>Occasional Smoker</option>
                                <option value='Smoker'>Smoker</option>
			   </select>
			   </p>
			    <p>
                           <label>Importance:</label>
                           <select name='p_smoking[]'>
                                <option value='0'>Not Important</option>
				<option value='25'>Moderately Important</option>
				<option value='75'>Very Important</option>
			   </select>
			   </p>
    </fieldset>
</form>
";
?>