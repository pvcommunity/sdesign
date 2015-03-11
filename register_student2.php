<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'models/site-templates/top.php';

echo"
<div id='main' style='margin-left:50px;'><br>
<h1>About Me</h1>
<hr style='display:block;margin-right:25px;'>
   <br>
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
<br>
</p>

<h1>Roommate Preferences</h1>
<hr style='display:block;margin-right:25px;'>
    <br>
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
   <br><br>    
<h1>Property Preferences</h1>
<hr style='display:block;margin-right:25px;'>
   <br>
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
   <input type='submit' value='Next' onclick='student_reg3()'/>
    ";