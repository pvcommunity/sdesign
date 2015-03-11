/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function student_reg2()
{
    var user = '<?php Print($username); ?>';
    alert("Congrats! Your username is " + user + ".\nClick here to finish setting up your account");
    location.href='register_student2.php';
}

function student_reg3()
{
    var user = '<?php Print($username); ?>';
    alert("Almost done, " + user + ".\nClick here to finish setting up your account");
    location.href='personality-quiz.php';
}