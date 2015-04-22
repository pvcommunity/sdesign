<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/


class User 
{
	public $user_active = 0;
	protected $clean_email;
	public $status = false;
	protected $clean_password;
	protected $username;
	protected $displayname;
	public $sql_failure = false;
	public $mail_failure = false;
	public $email_taken = false;
	public $username_taken = false;
	public $displayname_taken = false;
	public $activation_token = 0;
	public $success = NULL;
        
                
	function __construct($user,$display,$pass,$email)
	{
		//Used for display only
		$this->displayname = $display;
		
		//Sanitize
		$this->clean_email = sanitize($email);
		$this->clean_password = trim($pass);
		$this->username = sanitize($user);
                
               /* $this->gender = $gender;
                $this->classification = $classification;
                $this->type = $type;
                $this->address = $address;
                $this->city = $city;
                $this->state = $state;
                $this->zipcode = $zipcode;*/
		
		if(usernameExists($this->username))
		{
			$this->username_taken = true;
		}
		else if(displayNameExists($this->displayname))
		{
			$this->displayname_taken = true;
		}
		else if(emailExists($this->clean_email))
		{
			$this->email_taken = true;
		}
		else
		{
			//No problems have been found.
			$this->status = true;
		}
	}
	
	public function userCakeAddUser()
	{
		global $mysqli,$emailActivation,$websiteUrl,$db_table_prefix;
		
		//Prevent this function being called if there were construction errors
		if($this->status)
		{
			//Construct a secure hash for the plain text password
			$secure_pass = generateHash($this->clean_password);
			
			//Construct a unique activation token
			$this->activation_token = generateActivationToken();
			
			//Do we need to send out an activation email?
			if($emailActivation == "true")
			{
				//User must activate their account first
				$this->user_active = 0;
				
				$mail = new userCakeMail();
				
				//Build the activation message
				$activation_message = lang("ACCOUNT_ACTIVATION_MESSAGE",array($websiteUrl,$this->activation_token));
				
				//Define more if you want to build larger structures
				$hooks = array(
					"searchStrs" => array("#ACTIVATION-MESSAGE","#ACTIVATION-KEY","#USERNAME#"),
					"subjectStrs" => array($activation_message,$this->activation_token,$this->displayname)
					);
				
				/* Build the template - Optional, you can just use the sendMail function 
				Instead to pass a message. */
				
				if(!$mail->newTemplateMsg("new-registration.txt",$hooks))
				{
					$this->mail_failure = true;
				}
				else
				{
					//Send the mail. Specify users email here and subject. 
					//SendMail can have a third parementer for message if you do not wish to build a template.
					
					if(!$mail->sendMail($this->clean_email,"New User"))
					{
						$this->mail_failure = true;
					}
				}
				$this->success = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE2");
			}
			else
			{
				//Instant account activation
				$this->user_active = 1;
				$this->success = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE1");
			}	
			
			
			if(!$this->mail_failure)
			{
				//Insert the user into the database providing no errors have been found.
				$stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."users (
					user_name,
					display_name,
					password,
					email,
					activation_token,
					last_activation_request,
					lost_password_request, 
					active,
					title,
					sign_up_stamp,
					last_sign_in_stamp,
                                        gender,
                                        classification,
                                        type,
                                        address,
                                        city,
                                        state,
                                        zipcode
					)
					VALUES (
					?,
					?,
					?,
					?,
					?,
					'".time()."',
					'0',
					?,
					'Administrator',
					'".time()."',
					'0',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        ''
					)");
				
				$stmt->bind_param("sssssi", $this->username, $this->displayname, $secure_pass, $this->clean_email, $this->activation_token, $this->user_active);
				$stmt->execute();
				$inserted_id = $mysqli->insert_id;
				$stmt->close();
				
				//Insert default permission into matches table
				$stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."user_permission_matches  (
					user_id,
					permission_id
					)
					VALUES (
					?,
					'2'
					)");
				$stmt->bind_param("s", $inserted_id);
				$stmt->execute();
				$stmt->close();
			}
		}
	}
}

class Student extends User
{
    protected $s_id;
    
    function __construct($user, $display, $pass, $email, $gender, $classification, $id) {
        if($id == NULL){
            //Used for display only
            $this->displayname = $display;

            //Sanitize
            $this->clean_email = sanitize($email);
            $this->clean_password = trim($pass);
            $this->username = sanitize($user);

            $this->gender = trim($gender);
            $this->classification = trim($classification);


            if(usernameExists($this->username))
            {
                    $this->username_taken = true;
            }
            else if(emailExists($this->clean_email))
            {
                    $this->email_taken = true;
            }
            else
            {
                    //No problems have been found.
                    $this->status = true;
            }
        } else {
            $s_id = $id;
        }
    }
    
    function userCakeAddUser()
    {
            global $mysqli,$emailActivation,$websiteUrl,$db_table_prefix;

            //Prevent this function being called if there were construction errors
            if($this->status)
            {
                    //Construct a secure hash for the plain text password
                    $secure_pass = generateHash($this->clean_password);

                    //Construct a unique activation token
                    $this->activation_token = generateActivationToken();

                    //Do we need to send out an activation email?
                    if($emailActivation == "true")
                    {
                            //User must activate their account first
                            $this->user_active = 0;

                            $mail = new userCakeMail();

                            //Build the activation message
                            $activation_message = lang("ACCOUNT_ACTIVATION_MESSAGE",array($websiteUrl,$this->activation_token));

                            //Define more if you want to build larger structures
                            $hooks = array(
                                    "searchStrs" => array("#ACTIVATION-MESSAGE","#ACTIVATION-KEY","#USERNAME#"),
                                    "subjectStrs" => array($activation_message,$this->activation_token,$this->displayname)
                                    );

                            /* Build the template - Optional, you can just use the sendMail function 
                            Instead to pass a message. */

                            if(!$mail->newTemplateMsg("new-registration.txt",$hooks))
                            {
                                    $this->mail_failure = true;
                            }
                            else
                            {
                                    //Send the mail. Specify users email here and subject. 
                                    //SendMail can have a third parementer for message if you do not wish to build a template.

                                    if(!$mail->sendMail($this->clean_email,"New User"))
                                    {
                                            $this->mail_failure = true;
                                    }
                            }
                            $this->success = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE2");
                    }
                    else
                    {
                            //Instant account activation
                            $this->user_active = 1;
                            //$id = fetchUserId($this->username);

                            if(!$this->mail_failure)
                            {
                                    //Insert the user into the database providing no errors have been found.
                                    $stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."users (
                                            user_name,
                                            display_name,
                                            password,
                                            email,
                                            activation_token,
                                            last_activation_request,
                                            lost_password_request, 
                                            active,
                                            title,
                                            sign_up_stamp,
                                            last_sign_in_stamp,
                                            gender,
                                            classification,
                                            owner_name,
                                            type,
                                            address,
                                            city,
                                            state,
                                            zipcode,
                                            submitter_name
                                            )
                                            VALUES (
                                            ?,
                                            ?,
                                            ?,
                                            ?,
                                            ?,
                                            '".time()."',
                                            '0',
                                            ?,
                                            'Student',
                                            '".time()."',
                                            '0',
                                            ?,
                                            ?,
                                            '',
                                            '',
                                            '',
                                            '',
                                            '',
                                            '',
                                            ''
                                            )");

                                    $stmt->bind_param("sssssiss", $this->username, $this->displayname, $secure_pass, $this->clean_email, $this->activation_token, $this->user_active, $this->gender, $this->classification);
                                    $stmt->execute();
                                    $inserted_id = $mysqli->insert_id;
                                    $stmt->close();

                                    //Insert default permission into matches table
                                    $stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."user_permission_matches  (
                                            user_id,
                                            permission_id
                                            )
                                            VALUES (
                                            ?,
                                            '3'
                                            )");
                                    $stmt->bind_param("s", $inserted_id);
                                    $stmt->execute();
                                    $stmt->close();
                            }
                            $this->success = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE_STUDENT1",array($this->username,$inserted_id));
                    }	



            }
    }
    
    function set_about_me($s_id,$s_major,$s_self_stmt,$s_social,$s_sleep,$s_cleaning)
        {
            global $mysqli,$db_table_prefix;
            $this->id = $s_id;
            $this->major = $s_major;
            $this->self_stmt = $s_self_stmt;
            $this->social_habit = $s_social;
            $this->sleep_habit = $s_sleep;
            $this->cleaning_habit = $s_cleaning;
            
            $stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."about_me (
                s_id,
                s_major,
                s_self_stmt,
                s_social,
                s_sleep,
                s_cleaning
                )
                VALUES (
                ?,
                ?,
                ?,
                ?,
                ?,
                ?
                )");
            $stmt->bind_param("isssss", $this->id, $this->major, $this->self_stmt, $this->social_habit, $this->sleep_habit, $this->cleaning_habit);
            $stmt->execute();
            $inserted_id = $mysqli->insert_id;
            $stmt->close();
        }
        
        function set_preferences($s_id,$r_major,$r_major_imp,$r_social,$r_social_imp,$r_sleep,$r_sleep_imp,$r_cleaning,$r_cleaning_imp,$p_type,$p_type_imp,$p_rent,$p_rent_imp,$p_sharing,$p_sharing_imp,$p_smoking,$p_smoking_imp)
        {
            global $mysqli,$db_table_prefix;
            //$r_major = array();
            //$r_social = array();
            
            $this->id = $s_id;
            $this->r_major = array('ans'=>$r_major,'imp'=>$r_major_imp);
            $this->r_social = array('ans'=>$r_social,'imp'=>$r_social_imp);
            $this->r_sleep = array('ans'=>$r_sleep,'imp'=>$r_sleep_imp);
            $this->r_cleaning = array('ans'=>$r_cleaning,'imp'=>$r_cleaning_imp);
            $this->p_type = array('ans'=>$p_type,'imp'=>$p_type_imp);
            $this->p_rent = array('ans'=>$p_rent,'imp'=>$p_rent_imp);
            $this->p_sharing = array('ans'=>$p_sharing,'imp'=>$p_sharing_imp);
            $this->p_smoking = array('ans'=>$p_smoking,'imp'=>$p_smoking_imp);
            
            $stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."preferences (
                s_id,
                r_major,
		r_major_imp,
                r_social,
		r_social_imp,
                r_sleep,
		r_sleep_imp,
                r_cleaning,
		r_cleaning_imp,
                p_type,
		p_type_imp,
                p_rent,
		p_rent_imp,
                p_sharing,
		p_sharing_imp,
                p_smoking,
		p_smoking_imp
                )
                VALUES (
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?
                )");
            $stmt->bind_param('isisisisisisisisi', $this->id, $this->r_major['ans'], $this->r_major['imp'], $this->r_social['ans'], $this->r_social['imp'], $this->r_sleep['ans'], $this->r_sleep['imp'], $this->r_cleaning['ans'], $this->r_cleaning['imp'], $this->p_type['ans'], $this->p_type['imp'], $this->p_rent['ans'], $this->p_rent['imp'], $this->p_sharing['ans'], $this->p_sharing['imp'], $this->p_smoking['ans'], $this->p_smoking['imp']);
            $stmt->execute();
            $inserted_id = $mysqli->insert_id;
            $stmt->close();
        }
}
    

/*class Student extends User
{

    private $id;
    private $email;
    private $pass;
    private $display;
    private $user;
    protected $gender;
    protected $classification;
    private $s_id;

    function __construct(/*$user=NULL,$display=NULL,$pass=NULL,$email=NULL,$gender=NULL,$classification=NULL,$id=NULL*)
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
        call_user_func_array(array($this,$f),$a);
        /*if($id != NULL){
            $id = $s_id;
        } elseif ($id == NULL) {
            addStudent($user,$display,$pass,$email,$gender,$classification);
        }*
    }
    
    function __construct1(/*$id*)
    {
        //$id = $s_id;
    }
    
    function __construct2($user,$display,$pass,$email,$gender,$classification)
    //function addStudent($user,$display,$pass,$email,$gender,$classification)
	{
		//Used for display only
		$this->displayname = $display;
		
		//Sanitize
		$this->clean_email = sanitize($email);
		$this->clean_password = trim($pass);
		$this->username = sanitize($user);
                
                $this->gender = trim($gender);
                $this->classification = trim($classification);
            
		
		if(usernameExists($this->username))
		{
			$this->username_taken = true;
		}
		/*else if(displayNameExists($this->displayname))
		{
			$this->displayname_taken = true;
		}*
		else if(emailExists($this->clean_email))
		{
			$this->email_taken = true;
		}
		else
		{
			//No problems have been found.
			$this->status = true;
		}
	}
	
        
        /*public function fetchStudentById($s_id){
            global $mysqli,$db_table_prefix;
            
            if($s_id != NULL) {
                $data = $s_id;
            }
            
            $stmt = $mysqli->prepare("SELECT 
            user_name,
            display_name,
            password,
            email,
            gender,
            classification
            FROM ".$db_table_prefix."users
            WHERE
            id = ?");
            
            $stmt->bind_param("i",$data);

            $stmt->execute();
            $stmt->bind_result($user,$display,$password,$email,$gender,$classification);

            while($stmt->fetch()) {
                $row = array('user_name'=>$user,'display_name'=>$display,'password'=>$password,'email'=>$email,'gender'=>$gender,'classification'=>$classification);
            }

            $stmt->close();
            return($row);
                }*
	function userCakeAddUser()
	{
		global $mysqli,$emailActivation,$websiteUrl,$db_table_prefix;
		
		//Prevent this function being called if there were construction errors
		if($this->status)
		{
			//Construct a secure hash for the plain text password
			$secure_pass = generateHash($this->clean_password);
			
			//Construct a unique activation token
			$this->activation_token = generateActivationToken();
			
			//Do we need to send out an activation email?
			if($emailActivation == "true")
			{
				//User must activate their account first
				$this->user_active = 0;
				
				$mail = new userCakeMail();
				
				//Build the activation message
				$activation_message = lang("ACCOUNT_ACTIVATION_MESSAGE",array($websiteUrl,$this->activation_token));
				
				//Define more if you want to build larger structures
				$hooks = array(
					"searchStrs" => array("#ACTIVATION-MESSAGE","#ACTIVATION-KEY","#USERNAME#"),
					"subjectStrs" => array($activation_message,$this->activation_token,$this->displayname)
					);
				
				/* Build the template - Optional, you can just use the sendMail function 
				Instead to pass a message. *
				
				if(!$mail->newTemplateMsg("new-registration.txt",$hooks))
				{
					$this->mail_failure = true;
				}
				else
				{
					//Send the mail. Specify users email here and subject. 
					//SendMail can have a third parementer for message if you do not wish to build a template.
					
					if(!$mail->sendMail($this->clean_email,"New User"))
					{
						$this->mail_failure = true;
					}
				}
				$this->success = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE2");
			}
			else
			{
				//Instant account activation
				$this->user_active = 1;
                                //$id = fetchUserId($this->username);
                                
                                if(!$this->mail_failure)
                                {
                                        //Insert the user into the database providing no errors have been found.
                                        $stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."users (
                                                user_name,
                                                display_name,
                                                password,
                                                email,
                                                activation_token,
                                                last_activation_request,
                                                lost_password_request, 
                                                active,
                                                title,
                                                sign_up_stamp,
                                                last_sign_in_stamp,
                                                gender,
                                                classification,
                                                owner_name,
                                                type,
                                                address,
                                                city,
                                                state,
                                                zipcode,
                                                submitter_name
                                                )
                                                VALUES (
                                                ?,
                                                ?,
                                                ?,
                                                ?,
                                                ?,
                                                '".time()."',
                                                '0',
                                                ?,
                                                'Student',
                                                '".time()."',
                                                '0',
                                                ?,
                                                ?,
                                                '',
                                                '',
                                                '',
                                                '',
                                                '',
                                                '',
                                                ''
                                                )");

                                        $stmt->bind_param("sssssiss", $this->username, $this->displayname, $secure_pass, $this->clean_email, $this->activation_token, $this->user_active, $this->gender, $this->classification);
                                        $stmt->execute();
                                        $inserted_id = $mysqli->insert_id;
                                        $stmt->close();

                                        //Insert default permission into matches table
                                        $stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."user_permission_matches  (
                                                user_id,
                                                permission_id
                                                )
                                                VALUES (
                                                ?,
                                                '3'
                                                )");
                                        $stmt->bind_param("s", $inserted_id);
                                        $stmt->execute();
                                        $stmt->close();
                                }
				$this->success = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE_STUDENT1",array($this->username,$inserted_id));
			}	
			
			
			
		}
	}
        
        function set_about_me($s_id,$s_major,$s_self_stmt,$s_social,$s_sleep,$s_cleaning)
        {
            global $mysqli,$db_table_prefix;
            $this->id = $s_id;
            $this->major = $s_major;
            $this->self_stmt = $s_self_stmt;
            $this->social_habit = $s_social;
            $this->sleep_habit = $s_sleep;
            $this->cleaning_habit = $s_cleaning;
            
            $stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."about_me (
                s_id,
                s_major,
                s_self_stmt,
                s_social,
                s_sleep,
                s_cleaning
                )
                VALUES (
                ?,
                ?,
                ?,
                ?,
                ?,
                ?
                )");
            $stmt->bind_param("isssss", $this->id, $this->major, $this->self_stmt, $this->social_habit, $this->sleep_habit, $this->cleaning_habit);
            $stmt->execute();
            $inserted_id = $mysqli->insert_id;
            $stmt->close();
        }
        
        function set_preferences($id,$r_major,$r_major_imp,$r_social,$r_social_imp,$r_sleep,$r_sleep_imp,$r_cleaning,$r_cleaning_imp,$p_type,$p_type_imp,$p_rent,$p_rent_imp,$p_sharing,$p_sharing_imp,$p_smoking,$p_smoking_imp)
        //function set_preferences($id,$r_major,$r_social,$r_sleep,$r_cleaning,$p_type,$p_rent,$p_sharing,$p_smoking)
        {
            global $mysqli,$db_table_prefix;
            //$r_major = array();
            //$r_social = array();
            
            $this->id = $id;
            $this->r_major = array('ans'=>$r_major,'imp'=>$r_major_imp);
	    //$this->r_major_imp = 25;//$r_major_imp;
            $this->r_social = array('ans'=>$r_social,'imp'=>$r_social_imp);
	    //$this->r_social_imp = 25;// $r_social_imp;
            $this->r_sleep = array('ans'=>$r_sleep,'imp'=>$r_sleep_imp);
	    //$this->r_sleep_imp = 0;//$r_sleep_imp;
            $this->r_cleaning = array('ans'=>$r_cleaning,'imp'=>$r_cleaning_imp);
	    //$this->r_cleaning_imp = 0;//$r_cleaning_imp;
            $this->p_type = array('ans'=>$p_type,'imp'=>$p_type_imp);
	    //$this->p_type_imp = 0;//$p_type_imp;
            $this->p_rent = array('ans'=>$p_rent,'imp'=>$p_rent_imp);
	    //$this->p_rent_imp = 0;//$p_rent_imp;
            $this->p_sharing = array('ans'=>$p_sharing,'imp'=>$p_sharing_imp);
	    //$this->p_sharing_imp = 75;//$p_sharing_imp;
            $this->p_smoking = array('ans'=>$p_smoking,'imp'=>$p_smoking_imp);
	    //$this->p_smoking_imp = 75;//$p_smoking_imp;
            
            $stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."preferences (
                s_id,
                r_major,
		r_major_imp,
                r_social,
		r_social_imp,
                r_sleep,
		r_sleep_imp,
                r_cleaning,
		r_cleaning_imp,
                p_type,
		p_type_imp,
                p_rent,
		p_rent_imp,
                p_sharing,
		p_sharing_imp,
                p_smoking,
		p_smoking_imp
                )
                VALUES (
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?
                )");
            $stmt->bind_param("isisisisisisisisi", $this->id, $this->r_major['ans'], $this->r_major['imp'], $this->r_social['ans'], $this->r_social['imp'], $this->r_sleep['ans'], $this->r_sleep['imp'], $this->r_cleaning['ans'], $this->r_cleaning['imp'], $this->p_type['ans'], $this->p_type['imp'], $this->p_rent['ans'], $this->p_rent['imp'], $this->p_sharing['ans'], $this->p_sharing['imp'], $this->p_smoking['ans'], $this->p_smoking['imp']);
            $stmt->execute();
            $inserted_id = $mysqli->insert_id;
            $stmt->close();
        }
}
}*/

class Property extends User
{
       // properties only!!!
        protected $type;
        protected $address;
        protected $city;
        protected $state;
        protected $zipcode;
        protected $owner;
        protected $submitter;
                
	function __construct($user,$display,$pass,$email,$type,$address,$city,$state,$zipcode,$owner,$submitter)
	{
		//Used for display only
		$this->displayname = $display;
		
		//Sanitize
		$this->clean_email = sanitize($email);
		$this->clean_password = trim($pass);
		$this->username = sanitize($user);
               
                $this->owner = $owner;
                $this->submitter = $submitter;
                $this->type = $type;
                $this->address = $address;
                $this->city = $city;
                $this->state = $state;
                $this->zipcode = $zipcode;
		
		if(usernameExists($this->username))
		{
			$this->username_taken = true;
		}
		/*else if(displayNameExists($this->displayname))
		{
			$this->displayname_taken = true;
		}*/
		else if(emailExists($this->clean_email))
		{
			$this->email_taken = true;
		}
		else
		{
			//No problems have been found.
			$this->status = true;
		}
	}
	
	public function userCakeAddUser()
	{
		global $mysqli,$emailActivation,$websiteUrl,$db_table_prefix;
		
		//Prevent this function being called if there were construction errors
		if($this->status)
		{
			//Construct a secure hash for the plain text password
			$secure_pass = generateHash($this->clean_password);
			
			//Construct a unique activation token
			$this->activation_token = generateActivationToken();
			
			//Do we need to send out an activation email?
			if($emailActivation == "true")
			{
				//User must activate their account first
				$this->user_active = 0;
				
				$mail = new userCakeMail();
				
				//Build the activation message
				$activation_message = lang("ACCOUNT_ACTIVATION_MESSAGE",array($websiteUrl,$this->activation_token));
				
				//Define more if you want to build larger structures
				$hooks = array(
					"searchStrs" => array("#ACTIVATION-MESSAGE","#ACTIVATION-KEY","#USERNAME#"),
					"subjectStrs" => array($activation_message,$this->activation_token,$this->displayname)
					);
				
				/* Build the template - Optional, you can just use the sendMail function 
				Instead to pass a message. */
				
				if(!$mail->newTemplateMsg("new-registration.txt",$hooks))
				{
					$this->mail_failure = true;
				}
				else
				{
					//Send the mail. Specify users email here and subject. 
					//SendMail can have a third parementer for message if you do not wish to build a template.
					
					if(!$mail->sendMail($this->clean_email,"New User"))
					{
						$this->mail_failure = true;
					}
				}
				$this->success = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE2");
			}
			else
			{
				//Instant account activation
				$this->user_active = 1;
				$this->success = lang("ACCOUNT_REGISTRATION_COMPLETE_PROPERTY",array($this->username));
			}	
			
			
			if(!$this->mail_failure)
			{
				//Insert the user into the database providing no errors have been found.
				$stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."users (
					user_name,
					display_name,
					password,
					email,
					activation_token,
					last_activation_request,
					lost_password_request, 
					active,
					title,
					sign_up_stamp,
					last_sign_in_stamp,
					gender,
					classification,
                                        owner_name,
					type,
					address,
					city,
					state,
					zipcode,
                                        submitter_name
					)
					VALUES (
					?,
					?,
					?,
					?,
					?,
					'".time()."',
					'0',
					?,
					'Property',
					'".time()."',
					'0',
					'',
					'',
                                        ?,
					?,
					?,
					?,
					?,
					?,
                                        ?
					)");
				
				$stmt->bind_param("sssssisssssis", $this->username, $this->displayname, $secure_pass, $this->clean_email, $this->activation_token, $this->user_active, $this->owner, $this->type, $this->address, $this->city, $this->state, $this->zipcode, $this->submitter);
				$stmt->execute();
				$inserted_id = $mysqli->insert_id;
				$stmt->close();
				
				//Insert default permission into matches table
				$stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."user_permission_matches  (
					user_id,
					permission_id
					)
					VALUES (
					?,
					'4'
					)");
				$stmt->bind_param("s", $inserted_id);
				$stmt->execute();
				$stmt->close();
			}
		}
	}
}

?>